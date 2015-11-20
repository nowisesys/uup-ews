<?php

namespace UUP\Exchange\Types;

class ConstantValueType
{

        /**
         * @var string $Value
         */
        protected $Value = null;

        /**
         * @param string $Value
         */
        public function __construct($Value = null)
        {
                $this->Value = $Value;
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
         * @return \UUP\Exchange\Types\ConstantValueType
         */
        public function setValue($Value)
        {
                $this->Value = $Value;
                return $this;
        }

}
