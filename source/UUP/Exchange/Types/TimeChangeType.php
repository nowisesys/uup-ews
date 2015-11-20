<?php

namespace UUP\Exchange\Types;

class TimeChangeType
{

        /**
         * @var duration $Offset
         */
        protected $Offset = null;
        /**
         * @var RelativeYearlyRecurrencePatternType $RelativeYearlyRecurrence
         */
        protected $RelativeYearlyRecurrence = null;
        /**
         * @var date $AbsoluteDate
         */
        protected $AbsoluteDate = null;
        /**
         * @var time $Time
         */
        protected $Time = null;
        /**
         * @var string $TimeZoneName
         */
        protected $TimeZoneName = null;

        /**
         * @param duration $Offset
         * @param RelativeYearlyRecurrencePatternType $RelativeYearlyRecurrence
         * @param date $AbsoluteDate
         * @param time $Time
         * @param string $TimeZoneName
         */
        public function __construct($Offset = null, $RelativeYearlyRecurrence = null, $AbsoluteDate = null, $Time = null, $TimeZoneName = null)
        {
                $this->Offset = $Offset;
                $this->RelativeYearlyRecurrence = $RelativeYearlyRecurrence;
                $this->AbsoluteDate = $AbsoluteDate;
                $this->Time = $Time;
                $this->TimeZoneName = $TimeZoneName;
        }

        /**
         * @return duration
         */
        public function getOffset()
        {
                return $this->Offset;
        }

        /**
         * @param duration $Offset
         * @return \UUP\Exchange\Types\TimeChangeType
         */
        public function setOffset($Offset)
        {
                $this->Offset = $Offset;
                return $this;
        }

        /**
         * @return RelativeYearlyRecurrencePatternType
         */
        public function getRelativeYearlyRecurrence()
        {
                return $this->RelativeYearlyRecurrence;
        }

        /**
         * @param RelativeYearlyRecurrencePatternType $RelativeYearlyRecurrence
         * @return \UUP\Exchange\Types\TimeChangeType
         */
        public function setRelativeYearlyRecurrence($RelativeYearlyRecurrence)
        {
                $this->RelativeYearlyRecurrence = $RelativeYearlyRecurrence;
                return $this;
        }

        /**
         * @return date
         */
        public function getAbsoluteDate()
        {
                return $this->AbsoluteDate;
        }

        /**
         * @param date $AbsoluteDate
         * @return \UUP\Exchange\Types\TimeChangeType
         */
        public function setAbsoluteDate($AbsoluteDate)
        {
                $this->AbsoluteDate = $AbsoluteDate;
                return $this;
        }

        /**
         * @return time
         */
        public function getTime()
        {
                return $this->Time;
        }

        /**
         * @param time $Time
         * @return \UUP\Exchange\Types\TimeChangeType
         */
        public function setTime($Time)
        {
                $this->Time = $Time;
                return $this;
        }

        /**
         * @return string
         */
        public function getTimeZoneName()
        {
                return $this->TimeZoneName;
        }

        /**
         * @param string $TimeZoneName
         * @return \UUP\Exchange\Types\TimeChangeType
         */
        public function setTimeZoneName($TimeZoneName)
        {
                $this->TimeZoneName = $TimeZoneName;
                return $this;
        }

}
