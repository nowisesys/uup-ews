<?php

namespace UUP\Exchange\Types;

class FreeBusyView
{

        /**
         * @var FreeBusyViewType $FreeBusyViewType
         */
        protected $FreeBusyViewType = null;
        /**
         * @var string $MergedFreeBusy
         */
        protected $MergedFreeBusy = null;
        /**
         * @var ArrayOfCalendarEvent $CalendarEventArray
         */
        protected $CalendarEventArray = null;
        /**
         * @var WorkingHours $WorkingHours
         */
        protected $WorkingHours = null;

        /**
         * @param FreeBusyViewType $FreeBusyViewType
         */
        public function __construct($FreeBusyViewType = null)
        {
                $this->FreeBusyViewType = $FreeBusyViewType;
        }

        /**
         * @return FreeBusyViewType
         */
        public function getFreeBusyViewType()
        {
                return $this->FreeBusyViewType;
        }

        /**
         * @param FreeBusyViewType $FreeBusyViewType
         * @return \UUP\Exchange\Types\FreeBusyView
         */
        public function setFreeBusyViewType($FreeBusyViewType)
        {
                $this->FreeBusyViewType = $FreeBusyViewType;
                return $this;
        }

        /**
         * @return string
         */
        public function getMergedFreeBusy()
        {
                return $this->MergedFreeBusy;
        }

        /**
         * @param string $MergedFreeBusy
         * @return \UUP\Exchange\Types\FreeBusyView
         */
        public function setMergedFreeBusy($MergedFreeBusy)
        {
                $this->MergedFreeBusy = $MergedFreeBusy;
                return $this;
        }

        /**
         * @return ArrayOfCalendarEvent
         */
        public function getCalendarEventArray()
        {
                return $this->CalendarEventArray;
        }

        /**
         * @param ArrayOfCalendarEvent $CalendarEventArray
         * @return \UUP\Exchange\Types\FreeBusyView
         */
        public function setCalendarEventArray($CalendarEventArray)
        {
                $this->CalendarEventArray = $CalendarEventArray;
                return $this;
        }

        /**
         * @return WorkingHours
         */
        public function getWorkingHours()
        {
                return $this->WorkingHours;
        }

        /**
         * @param WorkingHours $WorkingHours
         * @return \UUP\Exchange\Types\FreeBusyView
         */
        public function setWorkingHours($WorkingHours)
        {
                $this->WorkingHours = $WorkingHours;
                return $this;
        }

}
