<?php

namespace UUP\Exchange\Types;

class ArrayOfCalendarPermissionsType
{

        /**
         * @var CalendarPermissionType $CalendarPermission
         */
        protected $CalendarPermission = null;

        /**
         * @param CalendarPermissionType $CalendarPermission
         */
        public function __construct($CalendarPermission = null)
        {
                $this->CalendarPermission = $CalendarPermission;
        }

        /**
         * @return CalendarPermissionType
         */
        public function getCalendarPermission()
        {
                return $this->CalendarPermission;
        }

        /**
         * @param CalendarPermissionType $CalendarPermission
         * @return \UUP\Exchange\Types\ArrayOfCalendarPermissionsType
         */
        public function setCalendarPermission($CalendarPermission)
        {
                $this->CalendarPermission = $CalendarPermission;
                return $this;
        }

}
