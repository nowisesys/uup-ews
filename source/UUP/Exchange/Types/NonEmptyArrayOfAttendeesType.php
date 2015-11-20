<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfAttendeesType
{

        /**
         * @var AttendeeType[] $Attendee
         */
        protected $Attendee = null;

        /**
         * @param AttendeeType[] $Attendee
         */
        public function __construct(array $Attendee = null)
        {
                $this->Attendee = $Attendee;
        }

        /**
         * @return AttendeeType[]
         */
        public function getAttendee()
        {
                return $this->Attendee;
        }

        /**
         * @param AttendeeType[] $Attendee
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAttendeesType
         */
        public function setAttendee(array $Attendee)
        {
                $this->Attendee = $Attendee;
                return $this;
        }

}
