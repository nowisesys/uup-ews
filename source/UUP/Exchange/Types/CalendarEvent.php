<?php

namespace UUP\Exchange\Types;

class CalendarEvent
{

        /**
         * @var \DateTime $StartTime
         */
        protected $StartTime = null;
        /**
         * @var \DateTime $EndTime
         */
        protected $EndTime = null;
        /**
         * @var LegacyFreeBusyType $BusyType
         */
        protected $BusyType = null;
        /**
         * @var CalendarEventDetails $CalendarEventDetails
         */
        protected $CalendarEventDetails = null;

        /**
         * @param \DateTime $StartTime
         * @param \DateTime $EndTime
         * @param LegacyFreeBusyType $BusyType
         */
        public function __construct(\DateTime $StartTime = null, \DateTime $EndTime = null, $BusyType = null)
        {
                $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
                $this->EndTime = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
                $this->BusyType = $BusyType;
        }

        /**
         * @return \DateTime
         */
        public function getStartTime()
        {
                if ($this->StartTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->StartTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $StartTime
         * @return \UUP\Exchange\Types\CalendarEvent
         */
        public function setStartTime(\DateTime $StartTime)
        {
                $this->StartTime = $StartTime->format(\DateTime::ATOM);
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getEndTime()
        {
                if ($this->EndTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->EndTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $EndTime
         * @return \UUP\Exchange\Types\CalendarEvent
         */
        public function setEndTime(\DateTime $EndTime)
        {
                $this->EndTime = $EndTime->format(\DateTime::ATOM);
                return $this;
        }

        /**
         * @return LegacyFreeBusyType
         */
        public function getBusyType()
        {
                return $this->BusyType;
        }

        /**
         * @param LegacyFreeBusyType $BusyType
         * @return \UUP\Exchange\Types\CalendarEvent
         */
        public function setBusyType($BusyType)
        {
                $this->BusyType = $BusyType;
                return $this;
        }

        /**
         * @return CalendarEventDetails
         */
        public function getCalendarEventDetails()
        {
                return $this->CalendarEventDetails;
        }

        /**
         * @param CalendarEventDetails $CalendarEventDetails
         * @return \UUP\Exchange\Types\CalendarEvent
         */
        public function setCalendarEventDetails($CalendarEventDetails)
        {
                $this->CalendarEventDetails = $CalendarEventDetails;
                return $this;
        }

}
