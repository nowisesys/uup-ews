<?php

namespace UUP\Exchange\Types;

class MeetingMessageType extends MessageType
{

        /**
         * @var ItemIdType $AssociatedCalendarItemId
         */
        protected $AssociatedCalendarItemId = null;
        /**
         * @var boolean $IsDelegated
         */
        protected $IsDelegated = null;
        /**
         * @var boolean $IsOutOfDate
         */
        protected $IsOutOfDate = null;
        /**
         * @var boolean $HasBeenProcessed
         */
        protected $HasBeenProcessed = null;
        /**
         * @var ResponseTypeType $ResponseType
         */
        protected $ResponseType = null;
        /**
         * @var string $UID
         */
        protected $UID = null;
        /**
         * @var \DateTime $RecurrenceId
         */
        protected $RecurrenceId = null;
        /**
         * @var \DateTime $DateTimeStamp
         */
        protected $DateTimeStamp = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return ItemIdType
         */
        public function getAssociatedCalendarItemId()
        {
                return $this->AssociatedCalendarItemId;
        }

        /**
         * @param ItemIdType $AssociatedCalendarItemId
         * @return \UUP\Exchange\Types\MeetingMessageType
         */
        public function setAssociatedCalendarItemId($AssociatedCalendarItemId)
        {
                $this->AssociatedCalendarItemId = $AssociatedCalendarItemId;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsDelegated()
        {
                return $this->IsDelegated;
        }

        /**
         * @param boolean $IsDelegated
         * @return \UUP\Exchange\Types\MeetingMessageType
         */
        public function setIsDelegated($IsDelegated)
        {
                $this->IsDelegated = $IsDelegated;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsOutOfDate()
        {
                return $this->IsOutOfDate;
        }

        /**
         * @param boolean $IsOutOfDate
         * @return \UUP\Exchange\Types\MeetingMessageType
         */
        public function setIsOutOfDate($IsOutOfDate)
        {
                $this->IsOutOfDate = $IsOutOfDate;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getHasBeenProcessed()
        {
                return $this->HasBeenProcessed;
        }

        /**
         * @param boolean $HasBeenProcessed
         * @return \UUP\Exchange\Types\MeetingMessageType
         */
        public function setHasBeenProcessed($HasBeenProcessed)
        {
                $this->HasBeenProcessed = $HasBeenProcessed;
                return $this;
        }

        /**
         * @return ResponseTypeType
         */
        public function getResponseType()
        {
                return $this->ResponseType;
        }

        /**
         * @param ResponseTypeType $ResponseType
         * @return \UUP\Exchange\Types\MeetingMessageType
         */
        public function setResponseType($ResponseType)
        {
                $this->ResponseType = $ResponseType;
                return $this;
        }

        /**
         * @return string
         */
        public function getUID()
        {
                return $this->UID;
        }

        /**
         * @param string $UID
         * @return \UUP\Exchange\Types\MeetingMessageType
         */
        public function setUID($UID)
        {
                $this->UID = $UID;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getRecurrenceId()
        {
                if ($this->RecurrenceId == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->RecurrenceId);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $RecurrenceId
         * @return \UUP\Exchange\Types\MeetingMessageType
         */
        public function setRecurrenceId(\DateTime $RecurrenceId = null)
        {
                if ($RecurrenceId == null) {
                        $this->RecurrenceId = null;
                } else {
                        $this->RecurrenceId = $RecurrenceId->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getDateTimeStamp()
        {
                if ($this->DateTimeStamp == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->DateTimeStamp);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $DateTimeStamp
         * @return \UUP\Exchange\Types\MeetingMessageType
         */
        public function setDateTimeStamp(\DateTime $DateTimeStamp = null)
        {
                if ($DateTimeStamp == null) {
                        $this->DateTimeStamp = null;
                } else {
                        $this->DateTimeStamp = $DateTimeStamp->format(\DateTime::ATOM);
                }
                return $this;
        }

}
