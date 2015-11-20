<?php

namespace UUP\Exchange\Types;

class ArrayOfEmailAddressesType
{

        /**
         * @var EmailAddressType[] $Address
         */
        protected $Address = null;

        public function __construct()
        {
                
        }

        /**
         * @return EmailAddressType[]
         */
        public function getAddress()
        {
                return $this->Address;
        }

        /**
         * @param EmailAddressType[] $Address
         * @return \UUP\Exchange\Types\ArrayOfEmailAddressesType
         */
        public function setAddress(array $Address = null)
        {
                $this->Address = $Address;
                return $this;
        }

}
