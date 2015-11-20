<?php

namespace UUP\Exchange\Types;

class DisconnectPhoneCallType extends BaseRequestType
{

        /**
         * @var PhoneCallIdType $PhoneCallId
         */
        protected $PhoneCallId = null;

        /**
         * @param PhoneCallIdType $PhoneCallId
         */
        public function __construct($PhoneCallId = null)
        {
                $this->PhoneCallId = $PhoneCallId;
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
         * @return \UUP\Exchange\Types\DisconnectPhoneCallType
         */
        public function setPhoneCallId($PhoneCallId)
        {
                $this->PhoneCallId = $PhoneCallId;
                return $this;
        }

}
