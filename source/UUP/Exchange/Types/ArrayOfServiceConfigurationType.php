<?php

namespace UUP\Exchange\Types;

class ArrayOfServiceConfigurationType
{

        /**
         * @var ServiceConfigurationType $ConfigurationName
         */
        protected $ConfigurationName = null;

        /**
         * @param ServiceConfigurationType $ConfigurationName
         */
        public function __construct($ConfigurationName = null)
        {
                $this->ConfigurationName = $ConfigurationName;
        }

        /**
         * @return ServiceConfigurationType
         */
        public function getConfigurationName()
        {
                return $this->ConfigurationName;
        }

        /**
         * @param ServiceConfigurationType $ConfigurationName
         * @return \UUP\Exchange\Types\ArrayOfServiceConfigurationType
         */
        public function setConfigurationName($ConfigurationName)
        {
                $this->ConfigurationName = $ConfigurationName;
                return $this;
        }

}
