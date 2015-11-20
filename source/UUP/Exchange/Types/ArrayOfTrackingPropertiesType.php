<?php

namespace UUP\Exchange\Types;

class ArrayOfTrackingPropertiesType
{

        /**
         * @var TrackingPropertyType $TrackingPropertyType
         */
        protected $TrackingPropertyType = null;

        /**
         * @param TrackingPropertyType $TrackingPropertyType
         */
        public function __construct($TrackingPropertyType = null)
        {
                $this->TrackingPropertyType = $TrackingPropertyType;
        }

        /**
         * @return TrackingPropertyType
         */
        public function getTrackingPropertyType()
        {
                return $this->TrackingPropertyType;
        }

        /**
         * @param TrackingPropertyType $TrackingPropertyType
         * @return \UUP\Exchange\Types\ArrayOfTrackingPropertiesType
         */
        public function setTrackingPropertyType($TrackingPropertyType)
        {
                $this->TrackingPropertyType = $TrackingPropertyType;
                return $this;
        }

}
