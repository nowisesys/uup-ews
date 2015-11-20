<?php

namespace UUP\Exchange\Types;

class SerializableTimeZoneTime
{

        /**
         * @var int $Bias
         */
        protected $Bias = null;
        /**
         * @var string $Time
         */
        protected $Time = null;
        /**
         * @var int $DayOrder
         */
        protected $DayOrder = null;
        /**
         * @var int $Month
         */
        protected $Month = null;
        /**
         * @var DayOfWeekType $DayOfWeek
         */
        protected $DayOfWeek = null;
        /**
         * @var string $Year
         */
        protected $Year = null;

        /**
         * @param int $Bias
         * @param string $Time
         * @param int $DayOrder
         * @param int $Month
         * @param DayOfWeekType $DayOfWeek
         */
        public function __construct($Bias = null, $Time = null, $DayOrder = null, $Month = null, $DayOfWeek = null)
        {
                $this->Bias = $Bias;
                $this->Time = $Time;
                $this->DayOrder = $DayOrder;
                $this->Month = $Month;
                $this->DayOfWeek = $DayOfWeek;
        }

        /**
         * @return int
         */
        public function getBias()
        {
                return $this->Bias;
        }

        /**
         * @param int $Bias
         * @return \UUP\Exchange\Types\SerializableTimeZoneTime
         */
        public function setBias($Bias)
        {
                $this->Bias = $Bias;
                return $this;
        }

        /**
         * @return string
         */
        public function getTime()
        {
                return $this->Time;
        }

        /**
         * @param string $Time
         * @return \UUP\Exchange\Types\SerializableTimeZoneTime
         */
        public function setTime($Time)
        {
                $this->Time = $Time;
                return $this;
        }

        /**
         * @return int
         */
        public function getDayOrder()
        {
                return $this->DayOrder;
        }

        /**
         * @param int $DayOrder
         * @return \UUP\Exchange\Types\SerializableTimeZoneTime
         */
        public function setDayOrder($DayOrder)
        {
                $this->DayOrder = $DayOrder;
                return $this;
        }

        /**
         * @return int
         */
        public function getMonth()
        {
                return $this->Month;
        }

        /**
         * @param int $Month
         * @return \UUP\Exchange\Types\SerializableTimeZoneTime
         */
        public function setMonth($Month)
        {
                $this->Month = $Month;
                return $this;
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
         * @return \UUP\Exchange\Types\SerializableTimeZoneTime
         */
        public function setDayOfWeek($DayOfWeek)
        {
                $this->DayOfWeek = $DayOfWeek;
                return $this;
        }

        /**
         * @return string
         */
        public function getYear()
        {
                return $this->Year;
        }

        /**
         * @param string $Year
         * @return \UUP\Exchange\Types\SerializableTimeZoneTime
         */
        public function setYear($Year)
        {
                $this->Year = $Year;
                return $this;
        }

}
