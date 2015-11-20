<?php

namespace UUP\Exchange\Types;

class GetPhoneCallInformationResponseMessageType extends ResponseMessageType
{

        /**
         * @var PhoneCallInformationType $PhoneCallInformation
         */
        protected $PhoneCallInformation = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return PhoneCallInformationType
         */
        public function getPhoneCallInformation()
        {
                return $this->PhoneCallInformation;
        }

        /**
         * @param PhoneCallInformationType $PhoneCallInformation
         * @return \UUP\Exchange\Types\GetPhoneCallInformationResponseMessageType
         */
        public function setPhoneCallInformation($PhoneCallInformation)
        {
                $this->PhoneCallInformation = $PhoneCallInformation;
                return $this;
        }

}
