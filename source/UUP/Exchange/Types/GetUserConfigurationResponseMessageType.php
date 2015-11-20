<?php

namespace UUP\Exchange\Types;

class GetUserConfigurationResponseMessageType extends ResponseMessageType
{

        /**
         * @var UserConfigurationType $UserConfiguration
         */
        protected $UserConfiguration = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return UserConfigurationType
         */
        public function getUserConfiguration()
        {
                return $this->UserConfiguration;
        }

        /**
         * @param UserConfigurationType $UserConfiguration
         * @return \UUP\Exchange\Types\GetUserConfigurationResponseMessageType
         */
        public function setUserConfiguration($UserConfiguration)
        {
                $this->UserConfiguration = $UserConfiguration;
                return $this;
        }

}
