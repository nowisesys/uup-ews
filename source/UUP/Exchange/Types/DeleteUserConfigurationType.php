<?php

namespace UUP\Exchange\Types;

class DeleteUserConfigurationType extends BaseRequestType
{

        /**
         * @var UserConfigurationNameType $UserConfigurationName
         */
        protected $UserConfigurationName = null;

        /**
         * @param UserConfigurationNameType $UserConfigurationName
         */
        public function __construct($UserConfigurationName = null)
        {
                $this->UserConfigurationName = $UserConfigurationName;
        }

        /**
         * @return UserConfigurationNameType
         */
        public function getUserConfigurationName()
        {
                return $this->UserConfigurationName;
        }

        /**
         * @param UserConfigurationNameType $UserConfigurationName
         * @return \UUP\Exchange\Types\DeleteUserConfigurationType
         */
        public function setUserConfigurationName($UserConfigurationName)
        {
                $this->UserConfigurationName = $UserConfigurationName;
                return $this;
        }

}
