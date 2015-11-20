<?php

/*
 * Copyright (C) 2015 Anders Lövgren (QNET/BMC CompDept).
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
 * @author Anders Lövgren (QNET/BMC CompDept)
 */
class ExchangeServicesClient extends ExchangeServices
{

        public function __construct(array $options = array(), $wsdl = 'config/services.wsdl')
        {
                parent::__construct($options, $wsdl);
        }

}
