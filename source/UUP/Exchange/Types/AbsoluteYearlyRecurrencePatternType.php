<?php

namespace UUP\Exchange\Types;

class AbsoluteYearlyRecurrencePatternType extends RecurrencePatternBaseType
{

        /**
         * @var int $DayOfMonth
         */
        protected $DayOfMonth = null;
        /**
         * @var MonthNamesType $Month
         */
        protected $Month = null;

        /**
         * @param int $DayOfMonth
         * @param MonthNamesType $Month
         */
        public function __construct($DayOfMonth = null, $Month = null)
        {
                $this->DayOfMonth = $DayOfMonth;
                $this->Month = $Month;
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
         * @return \UUP\Exchange\Types\AbsoluteYearlyRecurrencePatternType
         */
        public function setDayOfMonth($DayOfMonth)
        {
                $this->DayOfMonth = $DayOfMonth;
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
         * @return \UUP\Exchange\Types\AbsoluteYearlyRecurrencePatternType
         */
        public function setMonth($Month)
        {
                $this->Month = $Month;
                return $this;
        }

}
