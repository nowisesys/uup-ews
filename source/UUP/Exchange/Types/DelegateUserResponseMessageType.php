<?php

namespace UUP\Exchange\Types;

class DelegateUserResponseMessageType extends ResponseMessageType
{

        /**
         * @var DelegateUserType $DelegateUser
         */
        protected $DelegateUser = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return DelegateUserType
         */
        public function getDelegateUser()
        {
                return $this->DelegateUser;
        }

        /**
         * @param DelegateUserType $DelegateUser
         * @return \UUP\Exchange\Types\DelegateUserResponseMessageType
         */
        public function setDelegateUser($DelegateUser)
        {
                $this->DelegateUser = $DelegateUser;
                return $this;
        }

}
