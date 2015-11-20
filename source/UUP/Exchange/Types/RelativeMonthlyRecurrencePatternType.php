<?php

namespace UUP\Exchange\Types;

class RelativeMonthlyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

        /**
         * @var DayOfWeekType $DaysOfWeek
         */
        protected $DaysOfWeek = null;
        /**
         * @var DayOfWeekIndexType $DayOfWeekIndex
         */
        protected $DayOfWeekIndex = null;

        /**
         * @param int $Interval
         * @param DayOfWeekType $DaysOfWeek
         * @param DayOfWeekIndexType $DayOfWeekIndex
         */
        public function __construct($Interval = null, $DaysOfWeek = null, $DayOfWeekIndex = null)
        {
                parent::__construct($Interval);
                $this->DaysOfWeek = $DaysOfWeek;
                $this->DayOfWeekIndex = $DayOfWeekIndex;
        }

        /**
         * @return DayOfWeekType
         */
        public function getDaysOfWeek()
        {
                return $this->DaysOfWeek;
        }

        /**
         * @param DayOfWeekType $DaysOfWeek
         * @return \UUP\Exchange\Types\RelativeMonthlyRecurrencePatternType
         */
        public function setDaysOfWeek($DaysOfWeek)
        {
                $this->DaysOfWeek = $DaysOfWeek;
                return $this;
        }

        /**
         * @return DayOfWeekIndexType
         */
        public function getDayOfWeekIndex()
        {
                return $this->DayOfWeekIndex;
        }

        /**
         * @param DayOfWeekIndexType $DayOfWeekIndex
         * @return \UUP\Exchange\Types\RelativeMonthlyRecurrencePatternType
         */
        public function setDayOfWeekIndex($DayOfWeekIndex)
        {
                $this->DayOfWeekIndex = $DayOfWeekIndex;
                return $this;
        }

}
