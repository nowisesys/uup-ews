<?php

namespace UUP\Exchange\Types;

class GetUserConfigurationType extends BaseRequestType
{

        /**
         * @var UserConfigurationNameType $UserConfigurationName
         */
        protected $UserConfigurationName = null;
        /**
         * @var UserConfigurationPropertyType $UserConfigurationProperties
         */
        protected $UserConfigurationProperties = null;

        /**
         * @param UserConfigurationNameType $UserConfigurationName
         * @param UserConfigurationPropertyType $UserConfigurationProperties
         */
        public function __construct($UserConfigurationName = null, $UserConfigurationProperties = null)
        {
                $this->UserConfigurationName = $UserConfigurationName;
                $this->UserConfigurationProperties = $UserConfigurationProperties;
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
         * @return \UUP\Exchange\Types\GetUserConfigurationType
         */
        public function setUserConfigurationName($UserConfigurationName)
        {
                $this->UserConfigurationName = $UserConfigurationName;
                return $this;
        }

        /**
         * @return UserConfigurationPropertyType
         */
        public function getUserConfigurationProperties()
        {
                return $this->UserConfigurationProperties;
        }

        /**
         * @param UserConfigurationPropertyType $UserConfigurationProperties
         * @return \UUP\Exchange\Types\GetUserConfigurationType
         */
        public function setUserConfigurationProperties($UserConfigurationProperties)
        {
                $this->UserConfigurationProperties = $UserConfigurationProperties;
                return $this;
        }

}
