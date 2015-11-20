<?php

namespace UUP\Exchange\Types;

class Value
{

        /**
         * @var string $_
         */
        protected $_ = null;
        /**
         * @var string $Name
         */
        protected $Name = null;

        /**
         * @param string $_
         * @param string $Name
         */
        public function __construct($_ = null, $Name = null)
        {
                $this->_ = $_;
                $this->Name = $Name;
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
         * @return \UUP\Exchange\Types\Value
         */
        public function set_($_)
        {
                $this->_ = $_;
                return $this;
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
         * @return \UUP\Exchange\Types\Value
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

}
