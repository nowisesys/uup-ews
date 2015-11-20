<?php

namespace UUP\Exchange\Types;

class IndividualAttendeeConflictData extends AttendeeConflictData
{

        /**
         * @var LegacyFreeBusyType $BusyType
         */
        protected $BusyType = null;

        /**
         * @param LegacyFreeBusyType $BusyType
         */
        public function __construct($BusyType = null)
        {
                $this->BusyType = $BusyType;
        }

        /**
         * @return LegacyFreeBusyType
         */
        public function getBusyType()
        {
                return $this->BusyType;
        }

        /**
         * @param LegacyFreeBusyType $BusyType
         * @return \UUP\Exchange\Types\IndividualAttendeeConflictData
         */
        public function setBusyType($BusyType)
        {
                $this->BusyType = $BusyType;
                return $this;
        }

}
