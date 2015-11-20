<?php

namespace UUP\Exchange\Types;

class RelativeYearlyRecurrencePatternType extends RecurrencePatternBaseType
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
         * @var MonthNamesType $Month
         */
        protected $Month = null;

        /**
         * @param DayOfWeekType $DaysOfWeek
         * @param DayOfWeekIndexType $DayOfWeekIndex
         * @param MonthNamesType $Month
         */
        public function __construct($DaysOfWeek = null, $DayOfWeekIndex = null, $Month = null)
        {
                $this->DaysOfWeek = $DaysOfWeek;
                $this->DayOfWeekIndex = $DayOfWeekIndex;
                $this->Month = $Month;
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
         * @return \UUP\Exchange\Types\RelativeYearlyRecurrencePatternType
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
         * @return \UUP\Exchange\Types\RelativeYearlyRecurrencePatternType
         */
        public function setDayOfWeekIndex($DayOfWeekIndex)
        {
                $this->DayOfWeekIndex = $DayOfWeekIndex;
                return $this;
        }

        /**
         * @return MonthNamesType
         */
        public function getMonth()
        {
                return $this->Month;
        }

        /**
         * @param MonthNamesType $Month
         * @return \UUP\Exchange\Types\RelativeYearlyRecurrencePatternType
         */
        public function setMonth($Month)
        {
                $this->Month = $Month;
                return $this;
        }

}
