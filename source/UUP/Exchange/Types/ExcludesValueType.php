<?php

namespace UUP\Exchange\Types;

class ExcludesValueType
{

        /**
         * @var ExcludesAttributeType $Value
         */
        protected $Value = null;

        /**
         * @param ExcludesAttributeType $Value
         */
        public function __construct($Value = null)
        {
                $this->Value = $Value;
        }

        /**
         * @return ExcludesAttributeType
         */
        public function getValue()
        {
                return $this->Value;
        }

        /**
         * @param ExcludesAttributeType $Value
         * @return \UUP\Exchange\Types\ExcludesValueType
         */
        public function setValue($Value)
        {
                $this->Value = $Value;
                return $this;
        }

}
