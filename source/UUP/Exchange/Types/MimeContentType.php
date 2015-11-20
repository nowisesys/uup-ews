<?php

namespace UUP\Exchange\Types;

class MimeContentType
{

        /**
         * @var string $_
         */
        protected $_ = null;
        /**
         * @var string $CharacterSet
         */
        protected $CharacterSet = null;

        /**
         * @param string $_
         * @param string $CharacterSet
         */
        public function __construct($_ = null, $CharacterSet = null)
        {
                $this->_ = $_;
                $this->CharacterSet = $CharacterSet;
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
         * @return \UUP\Exchange\Types\MimeContentType
         */
        public function set_($_)
        {
                $this->_ = $_;
                return $this;
        }

        /**
         * @return string
         */
        public function getCharacterSet()
        {
                return $this->CharacterSet;
        }

        /**
         * @param string $CharacterSet
         * @return \UUP\Exchange\Types\MimeContentType
         */
        public function setCharacterSet($CharacterSet)
        {
                $this->CharacterSet = $CharacterSet;
                return $this;
        }

}
