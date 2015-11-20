<?php

namespace UUP\Exchange\Types;

class CalendarEventDetails
{

        /**
         * @var string $ID
         */
        protected $ID = null;
        /**
         * @var string $Subject
         */
        protected $Subject = null;
        /**
         * @var string $Location
         */
        protected $Location = null;
        /**
         * @var boolean $IsMeeting
         */
        protected $IsMeeting = null;
        /**
         * @var boolean $IsRecurring
         */
        protected $IsRecurring = null;
        /**
         * @var boolean $IsException
         */
        protected $IsException = null;
        /**
         * @var boolean $IsReminderSet
         */
        protected $IsReminderSet = null;
        /**
         * @var boolean $IsPrivate
         */
        protected $IsPrivate = null;

        /**
         * @param boolean $IsMeeting
         * @param boolean $IsRecurring
         * @param boolean $IsException
         * @param boolean $IsReminderSet
         * @param boolean $IsPrivate
         */
        public function __construct($IsMeeting = null, $IsRecurring = null, $IsException = null, $IsReminderSet = null, $IsPrivate = null)
        {
                $this->IsMeeting = $IsMeeting;
                $this->IsRecurring = $IsRecurring;
                $this->IsException = $IsException;
                $this->IsReminderSet = $IsReminderSet;
                $this->IsPrivate = $IsPrivate;
        }

        /**
         * @return string
         */
        public function getID()
        {
                return $this->ID;
        }

        /**
         * @param string $ID
         * @return \UUP\Exchange\Types\CalendarEventDetails
         */
        public function setID($ID)
        {
                $this->ID = $ID;
                return $this;
        }

        /**
         * @return string
         */
        public function getSubject()
        {
                return $this->Subject;
        }

        /**
         * @param string $Subject
         * @return \UUP\Exchange\Types\CalendarEventDetails
         */
        public function setSubject($Subject)
        {
                $this->Subject = $Subject;
                return $this;
        }

        /**
         * @return string
         */
        public function getLocation()
        {
                return $this->Location;
        }

        /**
         * @param string $Location
         * @return \UUP\Exchange\Types\CalendarEventDetails
         */
        public function setLocation($Location)
        {
                $this->Location = $Location;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsMeeting()
        {
                return $this->IsMeeting;
        }

        /**
         * @param boolean $IsMeeting
         * @return \UUP\Exchange\Types\CalendarEventDetails
         */
        public function setIsMeeting($IsMeeting)
        {
                $this->IsMeeting = $IsMeeting;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsRecurring()
        {
                return $this->IsRecurring;
        }

        /**
         * @param boolean $IsRecurring
         * @return \UUP\Exchange\Types\CalendarEventDetails
         */
        public function setIsRecurring($IsRecurring)
        {
                $this->IsRecurring = $IsRecurring;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsException()
        {
                return $this->IsException;
        }

        /**
         * @param boolean $IsException
         * @return \UUP\Exchange\Types\CalendarEventDetails
         */
        public function setIsException($IsException)
        {
                $this->IsException = $IsException;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsReminderSet()
        {
                return $this->IsReminderSet;
        }

        /**
         * @param boolean $IsReminderSet
         * @return \UUP\Exchange\Types\CalendarEventDetails
         */
        public function setIsReminderSet($IsReminderSet)
        {
                $this->IsReminderSet = $IsReminderSet;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsPrivate()
        {
                return $this->IsPrivate;
        }

        /**
         * @param boolean $IsPrivate
         * @return \UUP\Exchange\Types\CalendarEventDetails
         */
        public function setIsPrivate($IsPrivate)
        {
                $this->IsPrivate = $IsPrivate;
                return $this;
        }

}
