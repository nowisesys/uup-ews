<?php

namespace UUP\Exchange\Types;

class PhoneCallInformationType
{

        /**
         * @var PhoneCallStateType $PhoneCallState
         */
        protected $PhoneCallState = null;
        /**
         * @var ConnectionFailureCauseType $ConnectionFailureCause
         */
        protected $ConnectionFailureCause = null;
        /**
         * @var string $SIPResponseText
         */
        protected $SIPResponseText = null;
        /**
         * @var int $SIPResponseCode
         */
        protected $SIPResponseCode = null;

        /**
         * @param PhoneCallStateType $PhoneCallState
         * @param ConnectionFailureCauseType $ConnectionFailureCause
         */
        public function __construct($PhoneCallState = null, $ConnectionFailureCause = null)
        {
                $this->PhoneCallState = $PhoneCallState;
                $this->ConnectionFailureCause = $ConnectionFailureCause;
        }

        /**
         * @return PhoneCallStateType
         */
        public function getPhoneCallState()
        {
                return $this->PhoneCallState;
        }

        /**
         * @param PhoneCallStateType $PhoneCallState
         * @return \UUP\Exchange\Types\PhoneCallInformationType
         */
        public function setPhoneCallState($PhoneCallState)
        {
                $this->PhoneCallState = $PhoneCallState;
                return $this;
        }

        /**
         * @return ConnectionFailureCauseType
         */
        public function getConnectionFailureCause()
        {
                return $this->ConnectionFailureCause;
        }

        /**
         * @param ConnectionFailureCauseType $ConnectionFailureCause
         * @return \UUP\Exchange\Types\PhoneCallInformationType
         */
        public function setConnectionFailureCause($ConnectionFailureCause)
        {
                $this->ConnectionFailureCause = $ConnectionFailureCause;
                return $this;
        }

        /**
         * @return string
         */
        public function getSIPResponseText()
        {
                return $this->SIPResponseText;
        }

        /**
         * @param string $SIPResponseText
         * @return \UUP\Exchange\Types\PhoneCallInformationType
         */
        public function setSIPResponseText($SIPResponseText)
        {
                $this->SIPResponseText = $SIPResponseText;
                return $this;
        }

        /**
         * @return int
         */
        public function getSIPResponseCode()
        {
                return $this->SIPResponseCode;
        }

        /**
         * @param int $SIPResponseCode
         * @return \UUP\Exchange\Types\PhoneCallInformationType
         */
        public function setSIPResponseCode($SIPResponseCode)
        {
                $this->SIPResponseCode = $SIPResponseCode;
                return $this;
        }

}
