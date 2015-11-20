<?php

namespace UUP\Exchange\Types;

class SuggestionDayResult
{

        /**
         * @var \DateTime $Date
         */
        protected $Date = null;
        /**
         * @var SuggestionQuality $DayQuality
         */
        protected $DayQuality = null;
        /**
         * @var ArrayOfSuggestion $SuggestionArray
         */
        protected $SuggestionArray = null;

        /**
         * @param \DateTime $Date
         * @param SuggestionQuality $DayQuality
         */
        public function __construct(\DateTime $Date = null, $DayQuality = null)
        {
                $this->Date = $Date ? $Date->format(\DateTime::ATOM) : null;
                $this->DayQuality = $DayQuality;
        }

        /**
         * @return \DateTime
         */
        public function getDate()
        {
                if ($this->Date == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->Date);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $Date
         * @return \UUP\Exchange\Types\SuggestionDayResult
         */
        public function setDate(\DateTime $Date)
        {
                $this->Date = $Date->format(\DateTime::ATOM);
                return $this;
        }

        /**
         * @return SuggestionQuality
         */
        public function getDayQuality()
        {
                return $this->DayQuality;
        }

        /**
         * @param SuggestionQuality $DayQuality
         * @return \UUP\Exchange\Types\SuggestionDayResult
         */
        public function setDayQuality($DayQuality)
        {
                $this->DayQuality = $DayQuality;
                return $this;
        }

        /**
         * @return ArrayOfSuggestion
         */
        public function getSuggestionArray()
        {
                return $this->SuggestionArray;
        }

        /**
         * @param ArrayOfSuggestion $SuggestionArray
         * @return \UUP\Exchange\Types\SuggestionDayResult
         */
        public function setSuggestionArray($SuggestionArray)
        {
                $this->SuggestionArray = $SuggestionArray;
                return $this;
        }

}
