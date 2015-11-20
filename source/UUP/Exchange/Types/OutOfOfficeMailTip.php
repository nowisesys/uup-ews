<?php

namespace UUP\Exchange\Types;

class OutOfOfficeMailTip
{

        /**
         * @var ReplyBody $ReplyBody
         */
        protected $ReplyBody = null;
        /**
         * @var Duration $Duration
         */
        protected $Duration = null;

        /**
         * @param ReplyBody $ReplyBody
         */
        public function __construct($ReplyBody = null)
        {
                $this->ReplyBody = $ReplyBody;
        }

        /**
         * @return ReplyBody
         */
        public function getReplyBody()
        {
                return $this->ReplyBody;
        }

        /**
         * @param ReplyBody $ReplyBody
         * @return \UUP\Exchange\Types\OutOfOfficeMailTip
         */
        public function setReplyBody($ReplyBody)
        {
                $this->ReplyBody = $ReplyBody;
                return $this;
        }

        /**
         * @return Duration
         */
        public function getDuration()
        {
                return $this->Duration;
        }

        /**
         * @param Duration $Duration
         * @return \UUP\Exchange\Types\OutOfOfficeMailTip
         */
        public function setDuration($Duration)
        {
                $this->Duration = $Duration;
                return $this;
        }

}
