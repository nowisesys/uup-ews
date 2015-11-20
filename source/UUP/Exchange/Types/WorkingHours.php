<?php

namespace UUP\Exchange\Types;

class WorkingHours
{

        /**
         * @var SerializableTimeZone $TimeZone
         */
        protected $TimeZone = null;
        /**
         * @var ArrayOfWorkingPeriod $WorkingPeriodArray
         */
        protected $WorkingPeriodArray = null;

        /**
         * @param SerializableTimeZone $TimeZone
         * @param ArrayOfWorkingPeriod $WorkingPeriodArray
         */
        public function __construct($TimeZone = null, $WorkingPeriodArray = null)
        {
                $this->TimeZone = $TimeZone;
                $this->WorkingPeriodArray = $WorkingPeriodArray;
        }

        /**
         * @return SerializableTimeZone
         */
        public function getTimeZone()
        {
                return $this->TimeZone;
        }

        /**
         * @param SerializableTimeZone $TimeZone
         * @return \UUP\Exchange\Types\WorkingHours
         */
        public function setTimeZone($TimeZone)
        {
                $this->TimeZone = $TimeZone;
                return $this;
        }

        /**
         * @return ArrayOfWorkingPeriod
         */
        public function getWorkingPeriodArray()
        {
                return $this->WorkingPeriodArray;
        }

        /**
         * @param ArrayOfWorkingPeriod $WorkingPeriodArray
         * @return \UUP\Exchange\Types\WorkingHours
         */
        public function setWorkingPeriodArray($WorkingPeriodArray)
        {
                $this->WorkingPeriodArray = $WorkingPeriodArray;
                return $this;
        }

}
