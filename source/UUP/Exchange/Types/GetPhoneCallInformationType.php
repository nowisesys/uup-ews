<?php

namespace UUP\Exchange\Types;

class GetPhoneCallInformationType extends BaseRequestType
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
         * @return \UUP\Exchange\Types\GetPhoneCallInformationType
         */
        public function setPhoneCallId($PhoneCallId)
        {
                $this->PhoneCallId = $PhoneCallId;
                return $this;
        }

}
