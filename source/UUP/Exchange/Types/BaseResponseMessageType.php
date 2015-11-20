<?php

namespace UUP\Exchange\Types;

class BaseResponseMessageType
{

        /**
         * @var ArrayOfResponseMessagesType $ResponseMessages
         */
        protected $ResponseMessages = null;

        /**
         * @param ArrayOfResponseMessagesType $ResponseMessages
         */
        public function __construct($ResponseMessages = null)
        {
                $this->ResponseMessages = $ResponseMessages;
        }

        /**
         * @return ArrayOfResponseMessagesType
         */
        public function getResponseMessages()
        {
                return $this->ResponseMessages;
        }

        /**
         * @param ArrayOfResponseMessagesType $ResponseMessages
         * @return \UUP\Exchange\Types\BaseResponseMessageType
         */
        public function setResponseMessages($ResponseMessages)
        {
                $this->ResponseMessages = $ResponseMessages;
                return $this;
        }

}
