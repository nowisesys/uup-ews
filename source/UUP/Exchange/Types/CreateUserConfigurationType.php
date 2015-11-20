<?php

namespace UUP\Exchange\Types;

class CreateUserConfigurationType extends BaseRequestType
{

        /**
         * @var UserConfigurationType $UserConfiguration
         */
        protected $UserConfiguration = null;

        /**
         * @param UserConfigurationType $UserConfiguration
         */
        public function __construct($UserConfiguration = null)
        {
                $this->UserConfiguration = $UserConfiguration;
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
         * @return \UUP\Exchange\Types\CreateUserConfigurationType
         */
        public function setUserConfiguration($UserConfiguration)
        {
                $this->UserConfiguration = $UserConfiguration;
                return $this;
        }

}
