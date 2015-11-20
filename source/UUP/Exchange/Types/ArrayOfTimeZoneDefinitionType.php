<?php

namespace UUP\Exchange\Types;

class ArrayOfTimeZoneDefinitionType
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
         * @return \UUP\Exchange\Types\ArrayOfTimeZoneDefinitionType
         */
        public function setTimeZoneDefinition($TimeZoneDefinition)
        {
                $this->TimeZoneDefinition = $TimeZoneDefinition;
                return $this;
        }

}
