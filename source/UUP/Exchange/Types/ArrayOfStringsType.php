<?php

namespace UUP\Exchange\Types;

class ArrayOfStringsType
{

        /**
         * @var string[] $String
         */
        protected $String = null;

        public function __construct()
        {
                
        }

        /**
         * @return string[]
         */
        public function getString()
        {
                return $this->String;
        }

        /**
         * @param string[] $String
         * @return \UUP\Exchange\Types\ArrayOfStringsType
         */
        public function setString(array $String = null)
        {
                $this->String = $String;
                return $this;
        }

}
