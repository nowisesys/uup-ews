<?php

namespace UUP\Exchange\Types;

class ArrayOfArraysOfTrackingPropertiesType
{

        /**
         * @var ArrayOfTrackingPropertiesType $ArrayOfTrackingPropertiesType
         */
        protected $ArrayOfTrackingPropertiesType = null;

        /**
         * @param ArrayOfTrackingPropertiesType $ArrayOfTrackingPropertiesType
         */
        public function __construct($ArrayOfTrackingPropertiesType = null)
        {
                $this->ArrayOfTrackingPropertiesType = $ArrayOfTrackingPropertiesType;
        }

        /**
         * @return ArrayOfTrackingPropertiesType
         */
        public function getArrayOfTrackingPropertiesType()
        {
                return $this->ArrayOfTrackingPropertiesType;
        }

        /**
         * @param ArrayOfTrackingPropertiesType $ArrayOfTrackingPropertiesType
         * @return \UUP\Exchange\Types\ArrayOfArraysOfTrackingPropertiesType
         */
        public function setArrayOfTrackingPropertiesType($ArrayOfTrackingPropertiesType)
        {
                $this->ArrayOfTrackingPropertiesType = $ArrayOfTrackingPropertiesType;
                return $this;
        }

}
