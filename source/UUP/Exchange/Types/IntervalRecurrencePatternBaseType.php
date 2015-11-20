<?php

namespace UUP\Exchange\Types;

abstract class IntervalRecurrencePatternBaseType extends RecurrencePatternBaseType
{

        /**
         * @var int $Interval
         */
        protected $Interval = null;

        /**
         * @param int $Interval
         */
        public function __construct($Interval = null)
        {
                $this->Interval = $Interval;
        }

        /**
         * @return int
         */
        public function getInterval()
        {
                return $this->Interval;
        }

        /**
         * @param int $Interval
         * @return \UUP\Exchange\Types\IntervalRecurrencePatternBaseType
         */
        public function setInterval($Interval)
        {
                $this->Interval = $Interval;
                return $this;
        }

}
