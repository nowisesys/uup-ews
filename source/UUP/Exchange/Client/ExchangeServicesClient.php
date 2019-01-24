<?php

/*
 * Copyright (C) 2015 Anders Lövgren (Nowise Systems/BMC-IT, Uppsala University).
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace UUP\Exchange\Client;

use UUP\Exchange\Types\ExchangeServices;

/**
 * Exchange Web Services (EWS) Client.
 * 
 * Provides NTML authentication for the ExchangeServices class. SSL verification is
 * enabled by default, but can be turned off. Trace of SSL negotiation and HTTP request 
 * can be enabled by setting the verbose property. Requires the cURL extension.
 * 
 * Example:
 * <code>
 * $service = new ExchangeServicesClient($user, $pass, $host);
 * $service->verbose = true;            // Trace SSL and NTLM
 * $service->CreateItem($request);
 * </code>
 * 
 * Based on example code by Nicholas Kreidberg (niczak) on GitHub.
 * @see https://gist.github.com/niczak/2003485
 * 
 * @author Anders Lövgren (Nowise Systems/BMC-IT, Uppsala University)
 * @package UUP
 * @subpackage Exchange
 */
class ExchangeServicesClient extends ExchangeServices
{

        /**
         * The user principal name.
         * @var string 
         */
        private $user;
        /**
         * The user password.
         * @var string 
         */
        private $pass;
        /**
         * Optional hostname. Overides default value from services.wsdl.
         * @var string 
         */
        public $host;
        /**
         * Verify peer SSL certificate.
         * @var bool 
         */
        public $verify;
        /**
         * Print request/response to stdout.
         * @var bool 
         */
        public $verbose;

        /**
         * Constructor.
         * @param string $user The user principal name.
         * @param string $pass The user password.
         * @param string $host The exchange server hostname (optional).
         * @param array $options SOAP client options.
         * @param string $wsdl Location of WSDL file.
         * @param bool $verify Verify peer SSL certificate.
         * @param bool $verbose Print request/response to stdout.
         * @throws \Exception
         */
        public function __construct($user, $pass, $host = null, $options = array(), $wsdl = 'config/services.wsdl', $verify = true, $verbose = false)
        {
                if (!extension_loaded('curl')) {
                        throw new \Exception("The cURL extension is not loaded");
                }

                $this->user = $user;
                $this->pass = $pass;
                $this->host = $host;

                $this->verify = $verify;
                $this->verbose = $verbose;

                parent::__construct($options, $wsdl);
        }

        function __doRequest($request, $location, $action, $version, $one_way = null)
        {
                $headers = array(
                        'Method: POST',
                        'Connection: Keep-Alive',
                        'User-Agent: PHP-SOAP-CURL',
                        'Content-Type: text/xml; charset=utf-8',
                        'SOAPAction: "' . $action . '"',
                );

                if (isset($this->host)) {
                        $location = sprintf("https://%s/ews/exchange.asmx", $this->host);
                }

                $this->__last_request_headers = $headers;

                // 
                // Initialize SOAP message POST:
                // 
                $curl = curl_init($location);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
                curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

                // 
                // The next option may or may not cause issues with non-XML documents:
                // 
                curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
                curl_setopt($curl, CURLOPT_USERPWD, $this->user . ':' . $this->pass);

                // 
                // Print HTTPS negotiating and header sent/received:
                // 
                curl_setopt($curl, CURLOPT_VERBOSE, $this->verbose);

                // 
                // Optional SSL verification:
                // 
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, $this->verify ? 1 : 0);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, $this->verify ? 2 : 0);

                if (!($response = curl_exec($curl))) {
                        throw new \SoapFault("Client", curl_error($curl) . " (" . curl_errno($curl) . ")");
                }

                // 
                // Next lines are for debugging only:
                // 
                if ($this->verbose) {
                        printf("Headers: \n%s\n\n", print_r($headers, true));
                        printf("Request: \n%s\n\n", print_r($request, true));
                        printf("Response:\n%s\n\n", print_r($response, true));
                }

                return $response;
        }

        function __getLastRequestHeaders()
        {
                return implode("\n", $this->__last_request_headers) . "\n";
        }

}
