<?php

namespace UUP\Exchange\Types;

class ConvertIdResponseMessageType extends ResponseMessageType
{

        /**
         * @var AlternateIdBaseType $AlternateId
         */
        protected $AlternateId = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return AlternateIdBaseType
         */
        public function getAlternateId()
        {
                return $this->AlternateId;
        }

        /**
         * @param AlternateIdBaseType $AlternateId
         * @return \UUP\Exchange\Types\ConvertIdResponseMessageType
         */
        public function setAlternateId($AlternateId)
        {
                $this->AlternateId = $AlternateId;
                return $this;
        }

}
