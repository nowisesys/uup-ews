<?php

namespace UUP\Exchange\Types;

class CalendarPermissionSetType
{

        /**
         * @var ArrayOfCalendarPermissionsType $CalendarPermissions
         */
        protected $CalendarPermissions = null;
        /**
         * @var ArrayOfUnknownEntriesType $UnknownEntries
         */
        protected $UnknownEntries = null;

        /**
         * @param ArrayOfCalendarPermissionsType $CalendarPermissions
         */
        public function __construct($CalendarPermissions = null)
        {
                $this->CalendarPermissions = $CalendarPermissions;
        }

        /**
         * @return ArrayOfCalendarPermissionsType
         */
        public function getCalendarPermissions()
        {
                return $this->CalendarPermissions;
        }

        /**
         * @param ArrayOfCalendarPermissionsType $CalendarPermissions
         * @return \UUP\Exchange\Types\CalendarPermissionSetType
         */
        public function setCalendarPermissions($CalendarPermissions)
        {
                $this->CalendarPermissions = $CalendarPermissions;
                return $this;
        }

        /**
         * @return ArrayOfUnknownEntriesType
         */
        public function getUnknownEntries()
        {
                return $this->UnknownEntries;
        }

        /**
         * @param ArrayOfUnknownEntriesType $UnknownEntries
         * @return \UUP\Exchange\Types\CalendarPermissionSetType
         */
        public function setUnknownEntries($UnknownEntries)
        {
                $this->UnknownEntries = $UnknownEntries;
                return $this;
        }

}
