<?php

namespace UUP\Exchange\Types;

class ImAddressDictionaryEntryType
{

        /**
         * @var string $_
         */
        protected $_ = null;
        /**
         * @var ImAddressKeyType $Key
         */
        protected $Key = null;

        /**
         * @param string $_
         * @param ImAddressKeyType $Key
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
         * @return \UUP\Exchange\Types\ImAddressDictionaryEntryType
         */
        public function set_($_)
        {
                $this->_ = $_;
                return $this;
        }

        /**
         * @return ImAddressKeyType
         */
        public function getKey()
        {
                return $this->Key;
        }

        /**
         * @param ImAddressKeyType $Key
         * @return \UUP\Exchange\Types\ImAddressDictionaryEntryType
         */
        public function setKey($Key)
        {
                $this->Key = $Key;
                return $this;
        }

}
