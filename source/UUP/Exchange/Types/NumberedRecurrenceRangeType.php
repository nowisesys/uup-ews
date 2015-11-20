<?php

namespace UUP\Exchange\Types;

class NumberedRecurrenceRangeType extends RecurrenceRangeBaseType
{

        /**
         * @var int $NumberOfOccurrences
         */
        protected $NumberOfOccurrences = null;

        /**
         * @param date $StartDate
         * @param int $NumberOfOccurrences
         */
        public function __construct($StartDate = null, $NumberOfOccurrences = null)
        {
                parent::__construct($StartDate);
                $this->NumberOfOccurrences = $NumberOfOccurrences;
        }

        /**
         * @return int
         */
        public function getNumberOfOccurrences()
        {
                return $this->NumberOfOccurrences;
        }

        /**
         * @param int $NumberOfOccurrences
         * @return \UUP\Exchange\Types\NumberedRecurrenceRangeType
         */
        public function setNumberOfOccurrences($NumberOfOccurrences)
        {
                $this->NumberOfOccurrences = $NumberOfOccurrences;
                return $this;
        }

}
