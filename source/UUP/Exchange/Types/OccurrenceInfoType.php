<?php

namespace UUP\Exchange\Types;

class OccurrenceInfoType
{

        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;
        /**
         * @var \DateTime $Start
         */
        protected $Start = null;
        /**
         * @var \DateTime $End
         */
        protected $End = null;
        /**
         * @var \DateTime $OriginalStart
         */
        protected $OriginalStart = null;

        /**
         * @param ItemIdType $ItemId
         * @param \DateTime $Start
         * @param \DateTime $End
         * @param \DateTime $OriginalStart
         */
        public function __construct($ItemId = null, \DateTime $Start = null, \DateTime $End = null, \DateTime $OriginalStart = null)
        {
                $this->ItemId = $ItemId;
                $this->Start = $Start ? $Start->format(\DateTime::ATOM) : null;
                $this->End = $End ? $End->format(\DateTime::ATOM) : null;
                $this->OriginalStart = $OriginalStart ? $OriginalStart->format(\DateTime::ATOM) : null;
        }

        /**
         * @return ItemIdType
         */
        public function getItemId()
        {
                return $this->ItemId;
        }

        /**
         * @param ItemIdType $ItemId
         * @return \UUP\Exchange\Types\OccurrenceInfoType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
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
         * @return \UUP\Exchange\Types\OccurrenceInfoType
         */
        public function setStart(\DateTime $Start)
        {
                $this->Start = $Start->format(\DateTime::ATOM);
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getEnd()
        {
                if ($this->End == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->End);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $End
         * @return \UUP\Exchange\Types\OccurrenceInfoType
         */
        public function setEnd(\DateTime $End)
        {
                $this->End = $End->format(\DateTime::ATOM);
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getOriginalStart()
        {
                if ($this->OriginalStart == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->OriginalStart);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $OriginalStart
         * @return \UUP\Exchange\Types\OccurrenceInfoType
         */
        public function setOriginalStart(\DateTime $OriginalStart)
        {
                $this->OriginalStart = $OriginalStart->format(\DateTime::ATOM);
                return $this;
        }

}
