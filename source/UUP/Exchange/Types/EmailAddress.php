<?php

namespace UUP\Exchange\Types;

class EmailAddress
{

        /**
         * @var string $Name
         */
        protected $Name = null;
        /**
         * @var string $Address
         */
        protected $Address = null;
        /**
         * @var string $RoutingType
         */
        protected $RoutingType = null;

        /**
         * @param string $Address
         */
        public function __construct($Address = null)
        {
                $this->Address = $Address;
        }

        /**
         * @return string
         */
        public function getName()
        {
                return $this->Name;
        }

        /**
         * @param string $Name
         * @return \UUP\Exchange\Types\EmailAddress
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

        /**
         * @return string
         */
        public function getAddress()
        {
                return $this->Address;
        }

        /**
         * @param string $Address
         * @return \UUP\Exchange\Types\EmailAddress
         */
        public function setAddress($Address)
        {
                $this->Address = $Address;
                return $this;
        }

        /**
         * @return string
         */
        public function getRoutingType()
        {
                return $this->RoutingType;
        }

        /**
         * @param string $RoutingType
         * @return \UUP\Exchange\Types\EmailAddress
         */
        public function setRoutingType($RoutingType)
        {
                $this->RoutingType = $RoutingType;
                return $this;
        }

}
