<?php

namespace UUP\Exchange\Types;

abstract class RecurringTimeTransitionType extends TransitionType
{

        /**
         * @var duration $TimeOffset
         */
        protected $TimeOffset = null;
        /**
         * @var int $Month
         */
        protected $Month = null;

        /**
         * @param TransitionTargetType $To
         * @param duration $TimeOffset
         * @param int $Month
         */
        public function __construct($To = null, $TimeOffset = null, $Month = null)
        {
                parent::__construct($To);
                $this->TimeOffset = $TimeOffset;
                $this->Month = $Month;
        }

        /**
         * @return duration
         */
        public function getTimeOffset()
        {
                return $this->TimeOffset;
        }

        /**
         * @param duration $TimeOffset
         * @return \UUP\Exchange\Types\RecurringTimeTransitionType
         */
        public function setTimeOffset($TimeOffset)
        {
                $this->TimeOffset = $TimeOffset;
                return $this;
        }

        /**
         * @return int
         */
        public function getMonth()
        {
                return $this->Month;
        }

        /**
         * @param int $Month
         * @return \UUP\Exchange\Types\RecurringTimeTransitionType
         */
        public function setMonth($Month)
        {
                $this->Month = $Month;
                return $this;
        }

}
