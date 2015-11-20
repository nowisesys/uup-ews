<?php

namespace UUP\Exchange\Types;

class MailboxCultureType
{

        /**
         * @var language $_
         */
        protected $_ = null;

        /**
         * @param language $_
         */
        public function __construct($_ = null)
        {
                $this->_ = $_;
        }

        /**
         * @return language
         */
        public function get_()
        {
                return $this->_;
        }

        /**
         * @param language $_
         * @return \UUP\Exchange\Types\MailboxCultureType
         */
        public function set_($_)
        {
                $this->_ = $_;
                return $this;
        }

}
