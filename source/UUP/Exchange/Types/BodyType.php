<?php

namespace UUP\Exchange\Types;

class BodyType
{

        /**
         * @var string $_
         */
        protected $_ = null;
        /**
         * @var BodyTypeType $BodyType
         */
        protected $BodyType = null;

        /**
         * @param string $_
         * @param BodyTypeType $BodyType
         */
        public function __construct($_ = null, $BodyType = null)
        {
                $this->_ = $_;
                $this->BodyType = $BodyType;
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
         * @return \UUP\Exchange\Types\BodyType
         */
        public function set_($_)
        {
                $this->_ = $_;
                return $this;
        }

        /**
         * @return BodyTypeType
         */
        public function getBodyType()
        {
                return $this->BodyType;
        }

        /**
         * @param BodyTypeType $BodyType
         * @return \UUP\Exchange\Types\BodyType
         */
        public function setBodyType($BodyType)
        {
                $this->BodyType = $BodyType;
                return $this;
        }

}
