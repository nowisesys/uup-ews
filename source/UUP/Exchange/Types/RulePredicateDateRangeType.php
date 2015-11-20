<?php

namespace UUP\Exchange\Types;

class RulePredicateDateRangeType
{

        /**
         * @var \DateTime $StartDateTime
         */
        protected $StartDateTime = null;
        /**
         * @var \DateTime $EndDateTime
         */
        protected $EndDateTime = null;

        public function __construct()
        {
                
        }

        /**
         * @return \DateTime
         */
        public function getStartDateTime()
        {
                if ($this->StartDateTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->StartDateTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $StartDateTime
         * @return \UUP\Exchange\Types\RulePredicateDateRangeType
         */
        public function setStartDateTime(\DateTime $StartDateTime = null)
        {
                if ($StartDateTime == null) {
                        $this->StartDateTime = null;
                } else {
                        $this->StartDateTime = $StartDateTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getEndDateTime()
        {
                if ($this->EndDateTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->EndDateTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $EndDateTime
         * @return \UUP\Exchange\Types\RulePredicateDateRangeType
         */
        public function setEndDateTime(\DateTime $EndDateTime = null)
        {
                if ($EndDateTime == null) {
                        $this->EndDateTime = null;
                } else {
                        $this->EndDateTime = $EndDateTime->format(\DateTime::ATOM);
                }
                return $this;
        }

}
