<?php

namespace UUP\Exchange\Types;

class ArrayOfDelegateUserType
{

        /**
         * @var DelegateUserType[] $DelegateUser
         */
        protected $DelegateUser = null;

        /**
         * @param DelegateUserType[] $DelegateUser
         */
        public function __construct(array $DelegateUser = null)
        {
                $this->DelegateUser = $DelegateUser;
        }

        /**
         * @return DelegateUserType[]
         */
        public function getDelegateUser()
        {
                return $this->DelegateUser;
        }

        /**
         * @param DelegateUserType[] $DelegateUser
         * @return \UUP\Exchange\Types\ArrayOfDelegateUserType
         */
        public function setDelegateUser(array $DelegateUser)
        {
                $this->DelegateUser = $DelegateUser;
                return $this;
        }

}
