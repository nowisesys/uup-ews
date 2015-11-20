<?php

namespace UUP\Exchange\Types;

class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfTimeZoneDefinitionType $TimeZoneDefinitions
         */
        protected $TimeZoneDefinitions = null;

        /**
         * @param ResponseClassType $ResponseClass
         * @param ArrayOfTimeZoneDefinitionType $TimeZoneDefinitions
         */
        public function __construct($ResponseClass = null, $TimeZoneDefinitions = null)
        {
                parent::__construct($ResponseClass);
                $this->TimeZoneDefinitions = $TimeZoneDefinitions;
        }

        /**
         * @return ArrayOfTimeZoneDefinitionType
         */
        public function getTimeZoneDefinitions()
        {
                return $this->TimeZoneDefinitions;
        }

        /**
         * @param ArrayOfTimeZoneDefinitionType $TimeZoneDefinitions
         * @return \UUP\Exchange\Types\GetServerTimeZonesResponseMessageType
         */
        public function setTimeZoneDefinitions($TimeZoneDefinitions)
        {
                $this->TimeZoneDefinitions = $TimeZoneDefinitions;
                return $this;
        }

}
