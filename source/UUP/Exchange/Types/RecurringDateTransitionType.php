<?php

namespace UUP\Exchange\Types;

class RecurringDateTransitionType extends RecurringTimeTransitionType
{

        /**
         * @var int $Day
         */
        protected $Day = null;

        /**
         * @param TransitionTargetType $To
         * @param duration $TimeOffset
         * @param int $Month
         * @param int $Day
         */
        public function __construct($To = null, $TimeOffset = null, $Month = null, $Day = null)
        {
                parent::__construct($To, $TimeOffset, $Month);
                $this->Day = $Day;
        }

        /**
         * @return int
         */
        public function getDay()
        {
                return $this->Day;
        }

        /**
         * @param int $Day
         * @return \UUP\Exchange\Types\RecurringDateTransitionType
         */
        public function setDay($Day)
        {
                $this->Day = $Day;
                return $this;
        }

}
