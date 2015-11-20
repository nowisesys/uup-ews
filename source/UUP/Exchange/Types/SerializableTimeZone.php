<?php

namespace UUP\Exchange\Types;

class SerializableTimeZone
{

        /**
         * @var int $Bias
         */
        protected $Bias = null;
        /**
         * @var SerializableTimeZoneTime $StandardTime
         */
        protected $StandardTime = null;
        /**
         * @var SerializableTimeZoneTime $DaylightTime
         */
        protected $DaylightTime = null;

        /**
         * @param int $Bias
         * @param SerializableTimeZoneTime $StandardTime
         * @param SerializableTimeZoneTime $DaylightTime
         */
        public function __construct($Bias = null, $StandardTime = null, $DaylightTime = null)
        {
                $this->Bias = $Bias;
                $this->StandardTime = $StandardTime;
                $this->DaylightTime = $DaylightTime;
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
         * @return \UUP\Exchange\Types\SerializableTimeZone
         */
        public function setBias($Bias)
        {
                $this->Bias = $Bias;
                return $this;
        }

        /**
         * @return SerializableTimeZoneTime
         */
        public function getStandardTime()
        {
                return $this->StandardTime;
        }

        /**
         * @param SerializableTimeZoneTime $StandardTime
         * @return \UUP\Exchange\Types\SerializableTimeZone
         */
        public function setStandardTime($StandardTime)
        {
                $this->StandardTime = $StandardTime;
                return $this;
        }

        /**
         * @return SerializableTimeZoneTime
         */
        public function getDaylightTime()
        {
                return $this->DaylightTime;
        }

        /**
         * @param SerializableTimeZoneTime $DaylightTime
         * @return \UUP\Exchange\Types\SerializableTimeZone
         */
        public function setDaylightTime($DaylightTime)
        {
                $this->DaylightTime = $DaylightTime;
                return $this;
        }

}
