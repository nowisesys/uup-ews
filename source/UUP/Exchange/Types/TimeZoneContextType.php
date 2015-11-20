<?php

namespace UUP\Exchange\Types;

class TimeZoneContextType
{

        /**
         * @var TimeZoneDefinitionType $TimeZoneDefinition
         */
        protected $TimeZoneDefinition = null;

        /**
         * @param TimeZoneDefinitionType $TimeZoneDefinition
         */
        public function __construct($TimeZoneDefinition = null)
        {
                $this->TimeZoneDefinition = $TimeZoneDefinition;
        }

        /**
         * @return TimeZoneDefinitionType
         */
        public function getTimeZoneDefinition()
        {
                return $this->TimeZoneDefinition;
        }

        /**
         * @param TimeZoneDefinitionType $TimeZoneDefinition
         * @return \UUP\Exchange\Types\TimeZoneContextType
         */
        public function setTimeZoneDefinition($TimeZoneDefinition)
        {
                $this->TimeZoneDefinition = $TimeZoneDefinition;
                return $this;
        }

}
