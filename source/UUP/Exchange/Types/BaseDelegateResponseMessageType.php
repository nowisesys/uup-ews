<?php

namespace UUP\Exchange\Types;

abstract class BaseDelegateResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfDelegateUserResponseMessageType $ResponseMessages
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
         * @return ArrayOfDelegateUserResponseMessageType
         */
        public function getResponseMessages()
        {
                return $this->ResponseMessages;
        }

        /**
         * @param ArrayOfDelegateUserResponseMessageType $ResponseMessages
         * @return \UUP\Exchange\Types\BaseDelegateResponseMessageType
         */
        public function setResponseMessages($ResponseMessages)
        {
                $this->ResponseMessages = $ResponseMessages;
                return $this;
        }

}
