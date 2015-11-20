<?php

namespace UUP\Exchange\Types;

class RecurringDayTransitionType extends RecurringTimeTransitionType
{

        /**
         * @var DayOfWeekType $DayOfWeek
         */
        protected $DayOfWeek = null;
        /**
         * @var int $Occurrence
         */
        protected $Occurrence = null;

        /**
         * @param TransitionTargetType $To
         * @param duration $TimeOffset
         * @param int $Month
         * @param DayOfWeekType $DayOfWeek
         * @param int $Occurrence
         */
        public function __construct($To = null, $TimeOffset = null, $Month = null, $DayOfWeek = null, $Occurrence = null)
        {
                parent::__construct($To, $TimeOffset, $Month);
                $this->DayOfWeek = $DayOfWeek;
                $this->Occurrence = $Occurrence;
        }

        /**
         * @return DayOfWeekType
         */
        public function getDayOfWeek()
        {
                return $this->DayOfWeek;
        }

        /**
         * @param DayOfWeekType $DayOfWeek
         * @return \UUP\Exchange\Types\RecurringDayTransitionType
         */
        public function setDayOfWeek($DayOfWeek)
        {
                $this->DayOfWeek = $DayOfWeek;
                return $this;
        }

        /**
         * @return int
         */
        public function getOccurrence()
        {
                return $this->Occurrence;
        }

        /**
         * @param int $Occurrence
         * @return \UUP\Exchange\Types\RecurringDayTransitionType
         */
        public function setOccurrence($Occurrence)
        {
                $this->Occurrence = $Occurrence;
                return $this;
        }

}
