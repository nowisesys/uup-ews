<?php

namespace UUP\Exchange\Types;

class CalendarViewType extends BasePagingType
{

        /**
         * @var \DateTime $StartDate
         */
        protected $StartDate = null;
        /**
         * @var \DateTime $EndDate
         */
        protected $EndDate = null;

        /**
         * @param int $MaxEntriesReturned
         * @param \DateTime $StartDate
         * @param \DateTime $EndDate
         */
        public function __construct($MaxEntriesReturned = null, \DateTime $StartDate = null, \DateTime $EndDate = null)
        {
                parent::__construct($MaxEntriesReturned);
                $this->StartDate = $StartDate ? $StartDate->format(\DateTime::ATOM) : null;
                $this->EndDate = $EndDate ? $EndDate->format(\DateTime::ATOM) : null;
        }

        /**
         * @return \DateTime
         */
        public function getStartDate()
        {
                if ($this->StartDate == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->StartDate);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $StartDate
         * @return \UUP\Exchange\Types\CalendarViewType
         */
        public function setStartDate(\DateTime $StartDate)
        {
                $this->StartDate = $StartDate->format(\DateTime::ATOM);
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getEndDate()
        {
                if ($this->EndDate == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->EndDate);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $EndDate
         * @return \UUP\Exchange\Types\CalendarViewType
         */
        public function setEndDate(\DateTime $EndDate)
        {
                $this->EndDate = $EndDate->format(\DateTime::ATOM);
                return $this;
        }

}
