<?php

namespace UUP\Exchange\Types;

class PhoneNumberDictionaryEntryType
{

        /**
         * @var string $_
         */
        protected $_ = null;
        /**
         * @var PhoneNumberKeyType $Key
         */
        protected $Key = null;

        /**
         * @param string $_
         * @param PhoneNumberKeyType $Key
         */
        public function __construct($_ = null, $Key = null)
        {
                $this->_ = $_;
                $this->Key = $Key;
        }

        /**
         * @return string
         */
        public function get_()
        {
                return $this->_;
        }

        /**
         * @param string $_
         * @return \UUP\Exchange\Types\PhoneNumberDictionaryEntryType
         */
        public function set_($_)
        {
                $this->_ = $_;
                return $this;
        }

        /**
         * @return PhoneNumberKeyType
         */
        public function getKey()
        {
                return $this->Key;
        }

        /**
         * @param PhoneNumberKeyType $Key
         * @return \UUP\Exchange\Types\PhoneNumberDictionaryEntryType
         */
        public function setKey($Key)
        {
                $this->Key = $Key;
                return $this;
        }

}
