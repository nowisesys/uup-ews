<?php

namespace UUP\Exchange\Types;

class UserOofSettings
{

        /**
         * @var OofState $OofState
         */
        protected $OofState = null;
        /**
         * @var ExternalAudience $ExternalAudience
         */
        protected $ExternalAudience = null;
        /**
         * @var Duration $Duration
         */
        protected $Duration = null;
        /**
         * @var ReplyBody $InternalReply
         */
        protected $InternalReply = null;
        /**
         * @var ReplyBody $ExternalReply
         */
        protected $ExternalReply = null;

        /**
         * @param OofState $OofState
         * @param ExternalAudience $ExternalAudience
         */
        public function __construct($OofState = null, $ExternalAudience = null)
        {
                $this->OofState = $OofState;
                $this->ExternalAudience = $ExternalAudience;
        }

        /**
         * @return OofState
         */
        public function getOofState()
        {
                return $this->OofState;
        }

        /**
         * @param OofState $OofState
         * @return \UUP\Exchange\Types\UserOofSettings
         */
        public function setOofState($OofState)
        {
                $this->OofState = $OofState;
                return $this;
        }

        /**
         * @return ExternalAudience
         */
        public function getExternalAudience()
        {
                return $this->ExternalAudience;
        }

        /**
         * @param ExternalAudience $ExternalAudience
         * @return \UUP\Exchange\Types\UserOofSettings
         */
        public function setExternalAudience($ExternalAudience)
        {
                $this->ExternalAudience = $ExternalAudience;
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
         * @return \UUP\Exchange\Types\UserOofSettings
         */
        public function setDuration($Duration)
        {
                $this->Duration = $Duration;
                return $this;
        }

        /**
         * @return ReplyBody
         */
        public function getInternalReply()
        {
                return $this->InternalReply;
        }

        /**
         * @param ReplyBody $InternalReply
         * @return \UUP\Exchange\Types\UserOofSettings
         */
        public function setInternalReply($InternalReply)
        {
                $this->InternalReply = $InternalReply;
                return $this;
        }

        /**
         * @return ReplyBody
         */
        public function getExternalReply()
        {
                return $this->ExternalReply;
        }

        /**
         * @param ReplyBody $ExternalReply
         * @return \UUP\Exchange\Types\UserOofSettings
         */
        public function setExternalReply($ExternalReply)
        {
                $this->ExternalReply = $ExternalReply;
                return $this;
        }

}
