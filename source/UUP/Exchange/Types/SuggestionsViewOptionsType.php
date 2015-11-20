<?php

namespace UUP\Exchange\Types;

class SuggestionsViewOptionsType
{

        /**
         * @var int $GoodThreshold
         */
        protected $GoodThreshold = null;
        /**
         * @var int $MaximumResultsByDay
         */
        protected $MaximumResultsByDay = null;
        /**
         * @var int $MaximumNonWorkHourResultsByDay
         */
        protected $MaximumNonWorkHourResultsByDay = null;
        /**
         * @var int $MeetingDurationInMinutes
         */
        protected $MeetingDurationInMinutes = null;
        /**
         * @var SuggestionQuality $MinimumSuggestionQuality
         */
        protected $MinimumSuggestionQuality = null;
        /**
         * @var Duration $DetailedSuggestionsWindow
         */
        protected $DetailedSuggestionsWindow = null;
        /**
         * @var \DateTime $CurrentMeetingTime
         */
        protected $CurrentMeetingTime = null;
        /**
         * @var string $GlobalObjectId
         */
        protected $GlobalObjectId = null;

        /**
         * @param Duration $DetailedSuggestionsWindow
         */
        public function __construct($DetailedSuggestionsWindow = null)
        {
                $this->DetailedSuggestionsWindow = $DetailedSuggestionsWindow;
        }

        /**
         * @return int
         */
        public function getGoodThreshold()
        {
                return $this->GoodThreshold;
        }

        /**
         * @param int $GoodThreshold
         * @return \UUP\Exchange\Types\SuggestionsViewOptionsType
         */
        public function setGoodThreshold($GoodThreshold)
        {
                $this->GoodThreshold = $GoodThreshold;
                return $this;
        }

        /**
         * @return int
         */
        public function getMaximumResultsByDay()
        {
                return $this->MaximumResultsByDay;
        }

        /**
         * @param int $MaximumResultsByDay
         * @return \UUP\Exchange\Types\SuggestionsViewOptionsType
         */
        public function setMaximumResultsByDay($MaximumResultsByDay)
        {
                $this->MaximumResultsByDay = $MaximumResultsByDay;
                return $this;
        }

        /**
         * @return int
         */
        public function getMaximumNonWorkHourResultsByDay()
        {
                return $this->MaximumNonWorkHourResultsByDay;
        }

        /**
         * @param int $MaximumNonWorkHourResultsByDay
         * @return \UUP\Exchange\Types\SuggestionsViewOptionsType
         */
        public function setMaximumNonWorkHourResultsByDay($MaximumNonWorkHourResultsByDay)
        {
                $this->MaximumNonWorkHourResultsByDay = $MaximumNonWorkHourResultsByDay;
                return $this;
        }

        /**
         * @return int
         */
        public function getMeetingDurationInMinutes()
        {
                return $this->MeetingDurationInMinutes;
        }

        /**
         * @param int $MeetingDurationInMinutes
         * @return \UUP\Exchange\Types\SuggestionsViewOptionsType
         */
        public function setMeetingDurationInMinutes($MeetingDurationInMinutes)
        {
                $this->MeetingDurationInMinutes = $MeetingDurationInMinutes;
                return $this;
        }

        /**
         * @return SuggestionQuality
         */
        public function getMinimumSuggestionQuality()
        {
                return $this->MinimumSuggestionQuality;
        }

        /**
         * @param SuggestionQuality $MinimumSuggestionQuality
         * @return \UUP\Exchange\Types\SuggestionsViewOptionsType
         */
        public function setMinimumSuggestionQuality($MinimumSuggestionQuality)
        {
                $this->MinimumSuggestionQuality = $MinimumSuggestionQuality;
                return $this;
        }

        /**
         * @return Duration
         */
        public function getDetailedSuggestionsWindow()
        {
                return $this->DetailedSuggestionsWindow;
        }

        /**
         * @param Duration $DetailedSuggestionsWindow
         * @return \UUP\Exchange\Types\SuggestionsViewOptionsType
         */
        public function setDetailedSuggestionsWindow($DetailedSuggestionsWindow)
        {
                $this->DetailedSuggestionsWindow = $DetailedSuggestionsWindow;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getCurrentMeetingTime()
        {
                if ($this->CurrentMeetingTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->CurrentMeetingTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $CurrentMeetingTime
         * @return \UUP\Exchange\Types\SuggestionsViewOptionsType
         */
        public function setCurrentMeetingTime(\DateTime $CurrentMeetingTime = null)
        {
                if ($CurrentMeetingTime == null) {
                        $this->CurrentMeetingTime = null;
                } else {
                        $this->CurrentMeetingTime = $CurrentMeetingTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return string
         */
        public function getGlobalObjectId()
        {
                return $this->GlobalObjectId;
        }

        /**
         * @param string $GlobalObjectId
         * @return \UUP\Exchange\Types\SuggestionsViewOptionsType
         */
        public function setGlobalObjectId($GlobalObjectId)
        {
                $this->GlobalObjectId = $GlobalObjectId;
                return $this;
        }

}
