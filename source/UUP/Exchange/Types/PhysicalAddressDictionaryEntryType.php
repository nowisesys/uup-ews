<?php

namespace UUP\Exchange\Types;

class PhysicalAddressDictionaryEntryType
{

        /**
         * @var string $Street
         */
        protected $Street = null;
        /**
         * @var string $City
         */
        protected $City = null;
        /**
         * @var string $State
         */
        protected $State = null;
        /**
         * @var string $CountryOrRegion
         */
        protected $CountryOrRegion = null;
        /**
         * @var string $PostalCode
         */
        protected $PostalCode = null;
        /**
         * @var PhysicalAddressKeyType $Key
         */
        protected $Key = null;

        /**
         * @param PhysicalAddressKeyType $Key
         */
        public function __construct($Key = null)
        {
                $this->Key = $Key;
        }

        /**
         * @return string
         */
        public function getStreet()
        {
                return $this->Street;
        }

        /**
         * @param string $Street
         * @return \UUP\Exchange\Types\PhysicalAddressDictionaryEntryType
         */
        public function setStreet($Street)
        {
                $this->Street = $Street;
                return $this;
        }

        /**
         * @return string
         */
        public function getCity()
        {
                return $this->City;
        }

        /**
         * @param string $City
         * @return \UUP\Exchange\Types\PhysicalAddressDictionaryEntryType
         */
        public function setCity($City)
        {
                $this->City = $City;
                return $this;
        }

        /**
         * @return string
         */
        public function getState()
        {
                return $this->State;
        }

        /**
         * @param string $State
         * @return \UUP\Exchange\Types\PhysicalAddressDictionaryEntryType
         */
        public function setState($State)
        {
                $this->State = $State;
                return $this;
        }

        /**
         * @return string
         */
        public function getCountryOrRegion()
        {
                return $this->CountryOrRegion;
        }

        /**
         * @param string $CountryOrRegion
         * @return \UUP\Exchange\Types\PhysicalAddressDictionaryEntryType
         */
        public function setCountryOrRegion($CountryOrRegion)
        {
                $this->CountryOrRegion = $CountryOrRegion;
                return $this;
        }

        /**
         * @return string
         */
        public function getPostalCode()
        {
                return $this->PostalCode;
        }

        /**
         * @param string $PostalCode
         * @return \UUP\Exchange\Types\PhysicalAddressDictionaryEntryType
         */
        public function setPostalCode($PostalCode)
        {
                $this->PostalCode = $PostalCode;
                return $this;
        }

        /**
         * @return PhysicalAddressKeyType
         */
        public function getKey()
        {
                return $this->Key;
        }

        /**
         * @param PhysicalAddressKeyType $Key
         * @return \UUP\Exchange\Types\PhysicalAddressDictionaryEntryType
         */
        public function setKey($Key)
        {
                $this->Key = $Key;
                return $this;
        }

}
