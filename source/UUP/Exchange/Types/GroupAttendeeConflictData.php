<?php

namespace UUP\Exchange\Types;

class GroupAttendeeConflictData extends AttendeeConflictData
{

        /**
         * @var int $NumberOfMembers
         */
        protected $NumberOfMembers = null;
        /**
         * @var int $NumberOfMembersAvailable
         */
        protected $NumberOfMembersAvailable = null;
        /**
         * @var int $NumberOfMembersWithConflict
         */
        protected $NumberOfMembersWithConflict = null;
        /**
         * @var int $NumberOfMembersWithNoData
         */
        protected $NumberOfMembersWithNoData = null;

        /**
         * @param int $NumberOfMembers
         * @param int $NumberOfMembersAvailable
         * @param int $NumberOfMembersWithConflict
         * @param int $NumberOfMembersWithNoData
         */
        public function __construct($NumberOfMembers = null, $NumberOfMembersAvailable = null, $NumberOfMembersWithConflict = null, $NumberOfMembersWithNoData = null)
        {
                $this->NumberOfMembers = $NumberOfMembers;
                $this->NumberOfMembersAvailable = $NumberOfMembersAvailable;
                $this->NumberOfMembersWithConflict = $NumberOfMembersWithConflict;
                $this->NumberOfMembersWithNoData = $NumberOfMembersWithNoData;
        }

        /**
         * @return int
         */
        public function getNumberOfMembers()
        {
                return $this->NumberOfMembers;
        }

        /**
         * @param int $NumberOfMembers
         * @return \UUP\Exchange\Types\GroupAttendeeConflictData
         */
        public function setNumberOfMembers($NumberOfMembers)
        {
                $this->NumberOfMembers = $NumberOfMembers;
                return $this;
        }

        /**
         * @return int
         */
        public function getNumberOfMembersAvailable()
        {
                return $this->NumberOfMembersAvailable;
        }

        /**
         * @param int $NumberOfMembersAvailable
         * @return \UUP\Exchange\Types\GroupAttendeeConflictData
         */
        public function setNumberOfMembersAvailable($NumberOfMembersAvailable)
        {
                $this->NumberOfMembersAvailable = $NumberOfMembersAvailable;
                return $this;
        }

        /**
         * @return int
         */
        public function getNumberOfMembersWithConflict()
        {
                return $this->NumberOfMembersWithConflict;
        }

        /**
         * @param int $NumberOfMembersWithConflict
         * @return \UUP\Exchange\Types\GroupAttendeeConflictData
         */
        public function setNumberOfMembersWithConflict($NumberOfMembersWithConflict)
        {
                $this->NumberOfMembersWithConflict = $NumberOfMembersWithConflict;
                return $this;
        }

        /**
         * @return int
         */
        public function getNumberOfMembersWithNoData()
        {
                return $this->NumberOfMembersWithNoData;
        }

        /**
         * @param int $NumberOfMembersWithNoData
         * @return \UUP\Exchange\Types\GroupAttendeeConflictData
         */
        public function setNumberOfMembersWithNoData($NumberOfMembersWithNoData)
        {
                $this->NumberOfMembersWithNoData = $NumberOfMembersWithNoData;
                return $this;
        }

}
