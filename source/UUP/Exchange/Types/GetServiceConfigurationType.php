<?php

namespace UUP\Exchange\Types;

class GetServiceConfigurationType extends BaseRequestType
{

        /**
         * @var EmailAddressType $ActingAs
         */
        protected $ActingAs = null;
        /**
         * @var ArrayOfServiceConfigurationType $RequestedConfiguration
         */
        protected $RequestedConfiguration = null;

        /**
         * @param ArrayOfServiceConfigurationType $RequestedConfiguration
         */
        public function __construct($RequestedConfiguration = null)
        {
                $this->RequestedConfiguration = $RequestedConfiguration;
        }

        /**
         * @return EmailAddressType
         */
        public function getActingAs()
        {
                return $this->ActingAs;
        }

        /**
         * @param EmailAddressType $ActingAs
         * @return \UUP\Exchange\Types\GetServiceConfigurationType
         */
        public function setActingAs($ActingAs)
        {
                $this->ActingAs = $ActingAs;
                return $this;
        }

        /**
         * @return ArrayOfServiceConfigurationType
         */
        public function getRequestedConfiguration()
        {
                return $this->RequestedConfiguration;
        }

        /**
         * @param ArrayOfServiceConfigurationType $RequestedConfiguration
         * @return \UUP\Exchange\Types\GetServiceConfigurationType
         */
        public function setRequestedConfiguration($RequestedConfiguration)
        {
                $this->RequestedConfiguration = $RequestedConfiguration;
                return $this;
        }

}
