<?php

namespace UUP\Exchange\Types;

class ArrayOfServiceConfigurationResponseMessageType
{

        /**
         * @var ServiceConfigurationResponseMessageType[] $ServiceConfigurationResponseMessageType
         */
        protected $ServiceConfigurationResponseMessageType = null;

        /**
         * @param ServiceConfigurationResponseMessageType[] $ServiceConfigurationResponseMessageType
         */
        public function __construct(array $ServiceConfigurationResponseMessageType = null)
        {
                $this->ServiceConfigurationResponseMessageType = $ServiceConfigurationResponseMessageType;
        }

        /**
         * @return ServiceConfigurationResponseMessageType[]
         */
        public function getServiceConfigurationResponseMessageType()
        {
                return $this->ServiceConfigurationResponseMessageType;
        }

        /**
         * @param ServiceConfigurationResponseMessageType[] $ServiceConfigurationResponseMessageType
         * @return \UUP\Exchange\Types\ArrayOfServiceConfigurationResponseMessageType
         */
        public function setServiceConfigurationResponseMessageType(array $ServiceConfigurationResponseMessageType)
        {
                $this->ServiceConfigurationResponseMessageType = $ServiceConfigurationResponseMessageType;
                return $this;
        }

}
