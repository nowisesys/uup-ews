<?php

namespace UUP\Exchange\Types;

class ReplyBody
{

        /**
         * @var string $Message
         */
        protected $Message = null;
        /**
         * @var UNKNOWN $lang
         */
        protected $lang = null;

        /**
         * @param UNKNOWN $lang
         */
        public function __construct($lang = null)
        {
                $this->lang = $lang;
        }

        /**
         * @return string
         */
        public function getMessage()
        {
                return $this->Message;
        }

        /**
         * @param string $Message
         * @return \UUP\Exchange\Types\ReplyBody
         */
        public function setMessage($Message)
        {
                $this->Message = $Message;
                return $this;
        }

        /**
         * @return UNKNOWN
         */
        public function getLang()
        {
                return $this->lang;
        }

        /**
         * @param UNKNOWN $lang
         * @return \UUP\Exchange\Types\ReplyBody
         */
        public function setLang($lang)
        {
                $this->lang = $lang;
                return $this;
        }

}
