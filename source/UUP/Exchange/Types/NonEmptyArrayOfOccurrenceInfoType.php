<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfOccurrenceInfoType
{

        /**
         * @var OccurrenceInfoType[] $Occurrence
         */
        protected $Occurrence = null;

        /**
         * @param OccurrenceInfoType[] $Occurrence
         */
        public function __construct(array $Occurrence = null)
        {
                $this->Occurrence = $Occurrence;
        }

        /**
         * @return OccurrenceInfoType[]
         */
        public function getOccurrence()
        {
                return $this->Occurrence;
        }

        /**
         * @param OccurrenceInfoType[] $Occurrence
         * @return \UUP\Exchange\Types\NonEmptyArrayOfOccurrenceInfoType
         */
        public function setOccurrence(array $Occurrence)
        {
                $this->Occurrence = $Occurrence;
                return $this;
        }

}
