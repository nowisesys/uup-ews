<?php

namespace UUP\Exchange\Types;

class ArrayOfCalendarEvent
{

        /**
         * @var CalendarEvent[] $CalendarEvent
         */
        protected $CalendarEvent = null;

        public function __construct()
        {
                
        }

        /**
         * @return CalendarEvent[]
         */
        public function getCalendarEvent()
        {
                return $this->CalendarEvent;
        }

        /**
         * @param CalendarEvent[] $CalendarEvent
         * @return \UUP\Exchange\Types\ArrayOfCalendarEvent
         */
        public function setCalendarEvent(array $CalendarEvent = null)
        {
                $this->CalendarEvent = $CalendarEvent;
                return $this;
        }

}
