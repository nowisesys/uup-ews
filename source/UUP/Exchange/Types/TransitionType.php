<?php

namespace UUP\Exchange\Types;

class TransitionType
{

        /**
         * @var TransitionTargetType $To
         */
        protected $To = null;

        /**
         * @param TransitionTargetType $To
         */
        public function __construct($To = null)
        {
                $this->To = $To;
        }

        /**
         * @return TransitionTargetType
         */
        public function getTo()
        {
                return $this->To;
        }

        /**
         * @param TransitionTargetType $To
         * @return \UUP\Exchange\Types\TransitionType
         */
        public function setTo($To)
        {
                $this->To = $To;
                return $this;
        }

}
