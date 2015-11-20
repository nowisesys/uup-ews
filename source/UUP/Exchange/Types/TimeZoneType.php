<?php

namespace UUP\Exchange\Types;

class TimeZoneType
{

        /**
         * @var duration $BaseOffset
         */
        protected $BaseOffset = null;
        /**
         * @var TimeChangeType $Standard
         */
        protected $Standard = null;
        /**
         * @var TimeChangeType $Daylight
         */
        protected $Daylight = null;
        /**
         * @var string $TimeZoneName
         */
        protected $TimeZoneName = null;

        /**
         * @param duration $BaseOffset
         * @param TimeChangeType $Standard
         * @param TimeChangeType $Daylight
         * @param string $TimeZoneName
         */
        public function __construct($BaseOffset = null, $Standard = null, $Daylight = null, $TimeZoneName = null)
        {
                $this->BaseOffset = $BaseOffset;
                $this->Standard = $Standard;
                $this->Daylight = $Daylight;
                $this->TimeZoneName = $TimeZoneName;
        }

        /**
         * @return duration
         */
        public function getBaseOffset()
        {
                return $this->BaseOffset;
        }

        /**
         * @param duration $BaseOffset
         * @return \UUP\Exchange\Types\TimeZoneType
         */
        public function setBaseOffset($BaseOffset)
        {
                $this->BaseOffset = $BaseOffset;
                return $this;
        }

        /**
         * @return TimeChangeType
         */
        public function getStandard()
        {
                return $this->Standard;
        }

        /**
         * @param TimeChangeType $Standard
         * @return \UUP\Exchange\Types\TimeZoneType
         */
        public function setStandard($Standard)
        {
                $this->Standard = $Standard;
                return $this;
        }

        /**
         * @return TimeChangeType
         */
        public function getDaylight()
        {
                return $this->Daylight;
        }

        /**
         * @param TimeChangeType $Daylight
         * @return \UUP\Exchange\Types\TimeZoneType
         */
        public function setDaylight($Daylight)
        {
                $this->Daylight = $Daylight;
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
         * @return \UUP\Exchange\Types\TimeZoneType
         */
        public function setTimeZoneName($TimeZoneName)
        {
                $this->TimeZoneName = $TimeZoneName;
                return $this;
        }

}
