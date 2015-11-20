<?php

namespace UUP\Exchange\Types;

class ArrayOfBinaryType
{

        /**
         * @var base64Binary[] $Base64Binary
         */
        protected $Base64Binary = null;

        public function __construct()
        {
                
        }

        /**
         * @return base64Binary[]
         */
        public function getBase64Binary()
        {
                return $this->Base64Binary;
        }

        /**
         * @param base64Binary[] $Base64Binary
         * @return \UUP\Exchange\Types\ArrayOfBinaryType
         */
        public function setBase64Binary(array $Base64Binary = null)
        {
                $this->Base64Binary = $Base64Binary;
                return $this;
        }

}
