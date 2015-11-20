<?php

namespace UUP\Exchange\Types;

class TrackingPropertyType
{

        /**
         * @var string $Name
         */
        protected $Name = null;
        /**
         * @var string $Value
         */
        protected $Value = null;

        /**
         * @param string $Name
         */
        public function __construct($Name = null)
        {
                $this->Name = $Name;
        }

        /**
         * @return string
         */
        public function getName()
        {
                return $this->Name;
        }

        /**
         * @param string $Name
         * @return \UUP\Exchange\Types\TrackingPropertyType
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

        /**
         * @return string
         */
        public function getValue()
        {
                return $this->Value;
        }

        /**
         * @param string $Value
         * @return \UUP\Exchange\Types\TrackingPropertyType
         */
        public function setValue($Value)
        {
                $this->Value = $Value;
                return $this;
        }

}
