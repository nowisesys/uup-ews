<?php

namespace UUP\Exchange\Types;

class ArrayOfDelegateUserResponseMessageType
{

        /**
         * @var DelegateUserResponseMessageType[] $DelegateUserResponseMessageType
         */
        protected $DelegateUserResponseMessageType = null;

        /**
         * @param DelegateUserResponseMessageType[] $DelegateUserResponseMessageType
         */
        public function __construct(array $DelegateUserResponseMessageType = null)
        {
                $this->DelegateUserResponseMessageType = $DelegateUserResponseMessageType;
        }

        /**
         * @return DelegateUserResponseMessageType[]
         */
        public function getDelegateUserResponseMessageType()
        {
                return $this->DelegateUserResponseMessageType;
        }

        /**
         * @param DelegateUserResponseMessageType[] $DelegateUserResponseMessageType
         * @return \UUP\Exchange\Types\ArrayOfDelegateUserResponseMessageType
         */
        public function setDelegateUserResponseMessageType(array $DelegateUserResponseMessageType)
        {
                $this->DelegateUserResponseMessageType = $DelegateUserResponseMessageType;
                return $this;
        }

}
