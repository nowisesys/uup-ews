<?php

namespace UUP\Exchange\Types;

class PlayOnPhoneResponseMessageType extends ResponseMessageType
{

        /**
         * @var PhoneCallIdType $PhoneCallId
         */
        protected $PhoneCallId = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return PhoneCallIdType
         */
        public function getPhoneCallId()
        {
                return $this->PhoneCallId;
        }

        /**
         * @param PhoneCallIdType $PhoneCallId
         * @return \UUP\Exchange\Types\PlayOnPhoneResponseMessageType
         */
        public function setPhoneCallId($PhoneCallId)
        {
                $this->PhoneCallId = $PhoneCallId;
                return $this;
        }

}
