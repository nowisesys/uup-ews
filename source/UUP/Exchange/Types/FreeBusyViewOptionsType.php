<?php

namespace UUP\Exchange\Types;

class FreeBusyViewOptionsType
{

        /**
         * @var Duration $TimeWindow
         */
        protected $TimeWindow = null;
        /**
         * @var int $MergedFreeBusyIntervalInMinutes
         */
        protected $MergedFreeBusyIntervalInMinutes = null;
        /**
         * @var FreeBusyViewType $RequestedView
         */
        protected $RequestedView = null;

        /**
         * @param Duration $TimeWindow
         */
        public function __construct($TimeWindow = null)
        {
                $this->TimeWindow = $TimeWindow;
        }

        /**
         * @return Duration
         */
        public function getTimeWindow()
        {
                return $this->TimeWindow;
        }

        /**
         * @param Duration $TimeWindow
         * @return \UUP\Exchange\Types\FreeBusyViewOptionsType
         */
        public function setTimeWindow($TimeWindow)
        {
                $this->TimeWindow = $TimeWindow;
                return $this;
        }

        /**
         * @return int
         */
        public function getMergedFreeBusyIntervalInMinutes()
        {
                return $this->MergedFreeBusyIntervalInMinutes;
        }

        /**
         * @param int $MergedFreeBusyIntervalInMinutes
         * @return \UUP\Exchange\Types\FreeBusyViewOptionsType
         */
        public function setMergedFreeBusyIntervalInMinutes($MergedFreeBusyIntervalInMinutes)
        {
                $this->MergedFreeBusyIntervalInMinutes = $MergedFreeBusyIntervalInMinutes;
                return $this;
        }

        /**
         * @return FreeBusyViewType
         */
        public function getRequestedView()
        {
                return $this->RequestedView;
        }

        /**
         * @param FreeBusyViewType $RequestedView
         * @return \UUP\Exchange\Types\FreeBusyViewOptionsType
         */
        public function setRequestedView($RequestedView)
        {
                $this->RequestedView = $RequestedView;
                return $this;
        }

}
