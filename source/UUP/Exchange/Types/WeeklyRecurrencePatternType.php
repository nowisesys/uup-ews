<?php

namespace UUP\Exchange\Types;

class WeeklyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

        /**
         * @var DaysOfWeekType $DaysOfWeek
         */
        protected $DaysOfWeek = null;
        /**
         * @var DayOfWeekType $FirstDayOfWeek
         */
        protected $FirstDayOfWeek = null;

        /**
         * @param int $Interval
         * @param DaysOfWeekType $DaysOfWeek
         */
        public function __construct($Interval = null, $DaysOfWeek = null)
        {
                parent::__construct($Interval);
                $this->DaysOfWeek = $DaysOfWeek;
        }

        /**
         * @return DaysOfWeekType
         */
        public function getDaysOfWeek()
        {
                return $this->DaysOfWeek;
        }

        /**
         * @param DaysOfWeekType $DaysOfWeek
         * @return \UUP\Exchange\Types\WeeklyRecurrencePatternType
         */
        public function setDaysOfWeek($DaysOfWeek)
        {
                $this->DaysOfWeek = $DaysOfWeek;
                return $this;
        }

        /**
         * @return DayOfWeekType
         */
        public function getFirstDayOfWeek()
        {
                return $this->FirstDayOfWeek;
        }

        /**
         * @param DayOfWeekType $FirstDayOfWeek
         * @return \UUP\Exchange\Types\WeeklyRecurrencePatternType
         */
        public function setFirstDayOfWeek($FirstDayOfWeek)
        {
                $this->FirstDayOfWeek = $FirstDayOfWeek;
                return $this;
        }

}
