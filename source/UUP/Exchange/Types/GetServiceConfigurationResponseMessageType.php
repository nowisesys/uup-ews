<?php

namespace UUP\Exchange\Types;

class GetServiceConfigurationResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfServiceConfigurationResponseMessageType $ResponseMessages
         */
        protected $ResponseMessages = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return ArrayOfServiceConfigurationResponseMessageType
         */
        public function getResponseMessages()
        {
                return $this->ResponseMessages;
        }

        /**
         * @param ArrayOfServiceConfigurationResponseMessageType $ResponseMessages
         * @return \UUP\Exchange\Types\GetServiceConfigurationResponseMessageType
         */
        public function setResponseMessages($ResponseMessages)
        {
                $this->ResponseMessages = $ResponseMessages;
                return $this;
        }

}
