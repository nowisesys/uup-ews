<?php

namespace UUP\Exchange\Types;

class ArrayOfAttendeeConflictData
{

        /**
         * @var UnknownAttendeeConflictData $UnknownAttendeeConflictData
         */
        protected $UnknownAttendeeConflictData = null;
        /**
         * @var IndividualAttendeeConflictData $IndividualAttendeeConflictData
         */
        protected $IndividualAttendeeConflictData = null;
        /**
         * @var TooBigGroupAttendeeConflictData $TooBigGroupAttendeeConflictData
         */
        protected $TooBigGroupAttendeeConflictData = null;
        /**
         * @var GroupAttendeeConflictData $GroupAttendeeConflictData
         */
        protected $GroupAttendeeConflictData = null;

        public function __construct()
        {
                
        }

        /**
         * @return UnknownAttendeeConflictData
         */
        public function getUnknownAttendeeConflictData()
        {
                return $this->UnknownAttendeeConflictData;
        }

        /**
         * @param UnknownAttendeeConflictData $UnknownAttendeeConflictData
         * @return \UUP\Exchange\Types\ArrayOfAttendeeConflictData
         */
        public function setUnknownAttendeeConflictData($UnknownAttendeeConflictData)
        {
                $this->UnknownAttendeeConflictData = $UnknownAttendeeConflictData;
                return $this;
        }

        /**
         * @return IndividualAttendeeConflictData
         */
        public function getIndividualAttendeeConflictData()
        {
                return $this->IndividualAttendeeConflictData;
        }

        /**
         * @param IndividualAttendeeConflictData $IndividualAttendeeConflictData
         * @return \UUP\Exchange\Types\ArrayOfAttendeeConflictData
         */
        public function setIndividualAttendeeConflictData($IndividualAttendeeConflictData)
        {
                $this->IndividualAttendeeConflictData = $IndividualAttendeeConflictData;
                return $this;
        }

        /**
         * @return TooBigGroupAttendeeConflictData
         */
        public function getTooBigGroupAttendeeConflictData()
        {
                return $this->TooBigGroupAttendeeConflictData;
        }

        /**
         * @param TooBigGroupAttendeeConflictData $TooBigGroupAttendeeConflictData
         * @return \UUP\Exchange\Types\ArrayOfAttendeeConflictData
         */
        public function setTooBigGroupAttendeeConflictData($TooBigGroupAttendeeConflictData)
        {
                $this->TooBigGroupAttendeeConflictData = $TooBigGroupAttendeeConflictData;
                return $this;
        }

        /**
         * @return GroupAttendeeConflictData
         */
        public function getGroupAttendeeConflictData()
        {
                return $this->GroupAttendeeConflictData;
        }

        /**
         * @param GroupAttendeeConflictData $GroupAttendeeConflictData
         * @return \UUP\Exchange\Types\ArrayOfAttendeeConflictData
         */
        public function setGroupAttendeeConflictData($GroupAttendeeConflictData)
        {
                $this->GroupAttendeeConflictData = $GroupAttendeeConflictData;
                return $this;
        }

}
