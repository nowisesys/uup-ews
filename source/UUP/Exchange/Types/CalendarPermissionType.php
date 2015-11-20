<?php

namespace UUP\Exchange\Types;

class CalendarPermissionType extends BasePermissionType
{

        /**
         * @var CalendarPermissionReadAccessType $ReadItems
         */
        protected $ReadItems = null;
        /**
         * @var CalendarPermissionLevelType $CalendarPermissionLevel
         */
        protected $CalendarPermissionLevel = null;

        /**
         * @param UserIdType $UserId
         * @param CalendarPermissionLevelType $CalendarPermissionLevel
         */
        public function __construct($UserId = null, $CalendarPermissionLevel = null)
        {
                parent::__construct($UserId);
                $this->CalendarPermissionLevel = $CalendarPermissionLevel;
        }

        /**
         * @return CalendarPermissionReadAccessType
         */
        public function getReadItems()
        {
                return $this->ReadItems;
        }

        /**
         * @param CalendarPermissionReadAccessType $ReadItems
         * @return \UUP\Exchange\Types\CalendarPermissionType
         */
        public function setReadItems($ReadItems)
        {
                $this->ReadItems = $ReadItems;
                return $this;
        }

        /**
         * @return CalendarPermissionLevelType
         */
        public function getCalendarPermissionLevel()
        {
                return $this->CalendarPermissionLevel;
        }

        /**
         * @param CalendarPermissionLevelType $CalendarPermissionLevel
         * @return \UUP\Exchange\Types\CalendarPermissionType
         */
        public function setCalendarPermissionLevel($CalendarPermissionLevel)
        {
                $this->CalendarPermissionLevel = $CalendarPermissionLevel;
                return $this;
        }

}
