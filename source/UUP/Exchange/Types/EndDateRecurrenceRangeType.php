<?php

namespace UUP\Exchange\Types;

class EndDateRecurrenceRangeType extends RecurrenceRangeBaseType
{

        /**
         * @var date $EndDate
         */
        protected $EndDate = null;

        /**
         * @param date $StartDate
         * @param date $EndDate
         */
        public function __construct($StartDate = null, $EndDate = null)
        {
                parent::__construct($StartDate);
                $this->EndDate = $EndDate;
        }

        /**
         * @return date
         */
        public function getEndDate()
        {
                return $this->EndDate;
        }

        /**
         * @param date $EndDate
         * @return \UUP\Exchange\Types\EndDateRecurrenceRangeType
         */
        public function setEndDate($EndDate)
        {
                $this->EndDate = $EndDate;
                return $this;
        }

}
