<?php

namespace UUP\Exchange\Types;

class WorkingPeriod
{

        /**
         * @var DaysOfWeekType $DayOfWeek
         */
        protected $DayOfWeek = null;
        /**
         * @var int $StartTimeInMinutes
         */
        protected $StartTimeInMinutes = null;
        /**
         * @var int $EndTimeInMinutes
         */
        protected $EndTimeInMinutes = null;

        /**
         * @param DaysOfWeekType $DayOfWeek
         * @param int $StartTimeInMinutes
         * @param int $EndTimeInMinutes
         */
        public function __construct($DayOfWeek = null, $StartTimeInMinutes = null, $EndTimeInMinutes = null)
        {
                $this->DayOfWeek = $DayOfWeek;
                $this->StartTimeInMinutes = $StartTimeInMinutes;
                $this->EndTimeInMinutes = $EndTimeInMinutes;
        }

        /**
         * @return DaysOfWeekType
         */
        public function getDayOfWeek()
        {
                return $this->DayOfWeek;
        }

        /**
         * @param DaysOfWeekType $DayOfWeek
         * @return \UUP\Exchange\Types\WorkingPeriod
         */
        public function setDayOfWeek($DayOfWeek)
        {
                $this->DayOfWeek = $DayOfWeek;
                return $this;
        }

        /**
         * @return int
         */
        public function getStartTimeInMinutes()
        {
                return $this->StartTimeInMinutes;
        }

        /**
         * @param int $StartTimeInMinutes
         * @return \UUP\Exchange\Types\WorkingPeriod
         */
        public function setStartTimeInMinutes($StartTimeInMinutes)
        {
                $this->StartTimeInMinutes = $StartTimeInMinutes;
                return $this;
        }

        /**
         * @return int
         */
        public function getEndTimeInMinutes()
        {
                return $this->EndTimeInMinutes;
        }

        /**
         * @param int $EndTimeInMinutes
         * @return \UUP\Exchange\Types\WorkingPeriod
         */
        public function setEndTimeInMinutes($EndTimeInMinutes)
        {
                $this->EndTimeInMinutes = $EndTimeInMinutes;
                return $this;
        }

}
