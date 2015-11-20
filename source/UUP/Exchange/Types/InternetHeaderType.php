<?php

namespace UUP\Exchange\Types;

class InternetHeaderType
{

        /**
         * @var string $_
         */
        protected $_ = null;
        /**
         * @var string $HeaderName
         */
        protected $HeaderName = null;

        /**
         * @param string $_
         * @param string $HeaderName
         */
        public function __construct($_ = null, $HeaderName = null)
        {
                $this->_ = $_;
                $this->HeaderName = $HeaderName;
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
         * @return \UUP\Exchange\Types\InternetHeaderType
         */
        public function set_($_)
        {
                $this->_ = $_;
                return $this;
        }

        /**
         * @return string
         */
        public function getHeaderName()
        {
                return $this->HeaderName;
        }

        /**
         * @param string $HeaderName
         * @return \UUP\Exchange\Types\InternetHeaderType
         */
        public function setHeaderName($HeaderName)
        {
                $this->HeaderName = $HeaderName;
                return $this;
        }

}
