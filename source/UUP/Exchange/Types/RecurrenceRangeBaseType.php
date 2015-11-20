<?php

namespace UUP\Exchange\Types;

abstract class RecurrenceRangeBaseType
{

        /**
         * @var date $StartDate
         */
        protected $StartDate = null;

        /**
         * @param date $StartDate
         */
        public function __construct($StartDate = null)
        {
                $this->StartDate = $StartDate;
        }

        /**
         * @return date
         */
        public function getStartDate()
        {
                return $this->StartDate;
        }

        /**
         * @param date $StartDate
         * @return \UUP\Exchange\Types\RecurrenceRangeBaseType
         */
        public function setStartDate($StartDate)
        {
                $this->StartDate = $StartDate;
                return $this;
        }

}
