<?php

namespace UUP\Exchange\Types;

class DeletedOccurrenceInfoType
{

        /**
         * @var \DateTime $Start
         */
        protected $Start = null;

        /**
         * @param \DateTime $Start
         */
        public function __construct(\DateTime $Start = null)
        {
                $this->Start = $Start ? $Start->format(\DateTime::ATOM) : null;
        }

        /**
         * @return \DateTime
         */
        public function getStart()
        {
                if ($this->Start == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->Start);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $Start
         * @return \UUP\Exchange\Types\DeletedOccurrenceInfoType
         */
        public function setStart(\DateTime $Start)
        {
                $this->Start = $Start->format(\DateTime::ATOM);
                return $this;
        }

}
