<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfPropertyValuesType
{

        /**
         * @var string[] $Value
         */
        protected $Value = null;

        /**
         * @param string[] $Value
         */
        public function __construct(array $Value = null)
        {
                $this->Value = $Value;
        }

        /**
         * @return string[]
         */
        public function getValue()
        {
                return $this->Value;
        }

        /**
         * @param string[] $Value
         * @return \UUP\Exchange\Types\NonEmptyArrayOfPropertyValuesType
         */
        public function setValue(array $Value)
        {
                $this->Value = $Value;
                return $this;
        }

}
