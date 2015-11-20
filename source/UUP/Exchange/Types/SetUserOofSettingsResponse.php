<?php

namespace UUP\Exchange\Types;

class SetUserOofSettingsResponse
{

        /**
         * @var ResponseMessageType $ResponseMessage
         */
        protected $ResponseMessage = null;

        public function __construct()
        {
                
        }

        /**
         * @return ResponseMessageType
         */
        public function getResponseMessage()
        {
                return $this->ResponseMessage;
        }

        /**
         * @param ResponseMessageType $ResponseMessage
         * @return \UUP\Exchange\Types\SetUserOofSettingsResponse
         */
        public function setResponseMessage($ResponseMessage)
        {
                $this->ResponseMessage = $ResponseMessage;
                return $this;
        }

}
