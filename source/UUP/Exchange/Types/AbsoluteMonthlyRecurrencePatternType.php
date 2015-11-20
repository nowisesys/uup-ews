<?php

namespace UUP\Exchange\Types;

class AbsoluteMonthlyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

        /**
         * @var int $DayOfMonth
         */
        protected $DayOfMonth = null;

        /**
         * @param int $Interval
         * @param int $DayOfMonth
         */
        public function __construct($Interval = null, $DayOfMonth = null)
        {
                parent::__construct($Interval);
                $this->DayOfMonth = $DayOfMonth;
        }

        /**
         * @return int
         */
        public function getDayOfMonth()
        {
                return $this->DayOfMonth;
        }

        /**
         * @param int $DayOfMonth
         * @return \UUP\Exchange\Types\AbsoluteMonthlyRecurrencePatternType
         */
        public function setDayOfMonth($DayOfMonth)
        {
                $this->DayOfMonth = $DayOfMonth;
                return $this;
        }

}
