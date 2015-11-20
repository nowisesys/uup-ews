<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfDeletedOccurrencesType
{

        /**
         * @var DeletedOccurrenceInfoType[] $DeletedOccurrence
         */
        protected $DeletedOccurrence = null;

        /**
         * @param DeletedOccurrenceInfoType[] $DeletedOccurrence
         */
        public function __construct(array $DeletedOccurrence = null)
        {
                $this->DeletedOccurrence = $DeletedOccurrence;
        }

        /**
         * @return DeletedOccurrenceInfoType[]
         */
        public function getDeletedOccurrence()
        {
                return $this->DeletedOccurrence;
        }

        /**
         * @param DeletedOccurrenceInfoType[] $DeletedOccurrence
         * @return \UUP\Exchange\Types\NonEmptyArrayOfDeletedOccurrencesType
         */
        public function setDeletedOccurrence(array $DeletedOccurrence)
        {
                $this->DeletedOccurrence = $DeletedOccurrence;
                return $this;
        }

}
