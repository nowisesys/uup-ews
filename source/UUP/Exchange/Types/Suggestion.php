<?php

namespace UUP\Exchange\Types;

class Suggestion
{

        /**
         * @var \DateTime $MeetingTime
         */
        protected $MeetingTime = null;
        /**
         * @var boolean $IsWorkTime
         */
        protected $IsWorkTime = null;
        /**
         * @var SuggestionQuality $SuggestionQuality
         */
        protected $SuggestionQuality = null;
        /**
         * @var ArrayOfAttendeeConflictData $AttendeeConflictDataArray
         */
        protected $AttendeeConflictDataArray = null;

        /**
         * @param \DateTime $MeetingTime
         * @param boolean $IsWorkTime
         * @param SuggestionQuality $SuggestionQuality
         */
        public function __construct(\DateTime $MeetingTime = null, $IsWorkTime = null, $SuggestionQuality = null)
        {
                $this->MeetingTime = $MeetingTime ? $MeetingTime->format(\DateTime::ATOM) : null;
                $this->IsWorkTime = $IsWorkTime;
                $this->SuggestionQuality = $SuggestionQuality;
        }

        /**
         * @return \DateTime
         */
        public function getMeetingTime()
        {
                if ($this->MeetingTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->MeetingTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $MeetingTime
         * @return \UUP\Exchange\Types\Suggestion
         */
        public function setMeetingTime(\DateTime $MeetingTime)
        {
                $this->MeetingTime = $MeetingTime->format(\DateTime::ATOM);
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsWorkTime()
        {
                return $this->IsWorkTime;
        }

        /**
         * @param boolean $IsWorkTime
         * @return \UUP\Exchange\Types\Suggestion
         */
        public function setIsWorkTime($IsWorkTime)
        {
                $this->IsWorkTime = $IsWorkTime;
                return $this;
        }

        /**
         * @return SuggestionQuality
         */
        public function getSuggestionQuality()
        {
                return $this->SuggestionQuality;
        }

        /**
         * @param SuggestionQuality $SuggestionQuality
         * @return \UUP\Exchange\Types\Suggestion
         */
        public function setSuggestionQuality($SuggestionQuality)
        {
                $this->SuggestionQuality = $SuggestionQuality;
                return $this;
        }

        /**
         * @return ArrayOfAttendeeConflictData
         */
        public function getAttendeeConflictDataArray()
        {
                return $this->AttendeeConflictDataArray;
        }

        /**
         * @param ArrayOfAttendeeConflictData $AttendeeConflictDataArray
         * @return \UUP\Exchange\Types\Suggestion
         */
        public function setAttendeeConflictDataArray($AttendeeConflictDataArray)
        {
                $this->AttendeeConflictDataArray = $AttendeeConflictDataArray;
                return $this;
        }

}
