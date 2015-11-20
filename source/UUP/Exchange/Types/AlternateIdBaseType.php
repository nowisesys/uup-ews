<?php

namespace UUP\Exchange\Types;

abstract class AlternateIdBaseType
{

        /**
         * @var IdFormatType $Format
         */
        protected $Format = null;

        /**
         * @param IdFormatType $Format
         */
        public function __construct($Format = null)
        {
                $this->Format = $Format;
        }

        /**
         * @return IdFormatType
         */
        public function getFormat()
        {
                return $this->Format;
        }

        /**
         * @param IdFormatType $Format
         * @return \UUP\Exchange\Types\AlternateIdBaseType
         */
        public function setFormat($Format)
        {
                $this->Format = $Format;
                return $this;
        }

}
