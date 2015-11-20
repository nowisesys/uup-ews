<?php

namespace UUP\Exchange\Types;

class MailboxData
{

        /**
         * @var EmailAddress $Email
         */
        protected $Email = null;
        /**
         * @var MeetingAttendeeType $AttendeeType
         */
        protected $AttendeeType = null;
        /**
         * @var boolean $ExcludeConflicts
         */
        protected $ExcludeConflicts = null;

        /**
         * @param EmailAddress $Email
         * @param MeetingAttendeeType $AttendeeType
         */
        public function __construct($Email = null, $AttendeeType = null)
        {
                $this->Email = $Email;
                $this->AttendeeType = $AttendeeType;
        }

        /**
         * @return EmailAddress
         */
        public function getEmail()
        {
                return $this->Email;
        }

        /**
         * @param EmailAddress $Email
         * @return \UUP\Exchange\Types\MailboxData
         */
        public function setEmail($Email)
        {
                $this->Email = $Email;
                return $this;
        }

        /**
         * @return MeetingAttendeeType
         */
        public function getAttendeeType()
        {
                return $this->AttendeeType;
        }

        /**
         * @param MeetingAttendeeType $AttendeeType
         * @return \UUP\Exchange\Types\MailboxData
         */
        public function setAttendeeType($AttendeeType)
        {
                $this->AttendeeType = $AttendeeType;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getExcludeConflicts()
        {
                return $this->ExcludeConflicts;
        }

        /**
         * @param boolean $ExcludeConflicts
         * @return \UUP\Exchange\Types\MailboxData
         */
        public function setExcludeConflicts($ExcludeConflicts)
        {
                $this->ExcludeConflicts = $ExcludeConflicts;
                return $this;
        }

}
