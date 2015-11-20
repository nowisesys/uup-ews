<?php

namespace UUP\Exchange\Types;

class ProxySecurityContextType
{

        /**
         * @var base64Binary $_
         */
        protected $_ = null;

        /**
         * @param base64Binary $_
         */
        public function __construct($_ = null)
        {
                $this->_ = $_;
        }

        /**
         * @return base64Binary
         */
        public function get_()
        {
                return $this->_;
        }

        /**
         * @param base64Binary $_
         * @return \UUP\Exchange\Types\ProxySecurityContextType
         */
        public function set_($_)
        {
                $this->_ = $_;
                return $this;
        }

}
