<?php

namespace UUP\Exchange\Types;

class GetMailTipsResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfMailTipsResponseMessageType $ResponseMessages
         */
        protected $ResponseMessages = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return ArrayOfMailTipsResponseMessageType
         */
        public function getResponseMessages()
        {
                return $this->ResponseMessages;
        }

        /**
         * @param ArrayOfMailTipsResponseMessageType $ResponseMessages
         * @return \UUP\Exchange\Types\GetMailTipsResponseMessageType
         */
        public function setResponseMessages($ResponseMessages)
        {
                $this->ResponseMessages = $ResponseMessages;
                return $this;
        }

}
