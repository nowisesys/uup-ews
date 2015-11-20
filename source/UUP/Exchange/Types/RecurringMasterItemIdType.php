<?php

namespace UUP\Exchange\Types;

class RecurringMasterItemIdType extends BaseItemIdType
{

        /**
         * @var DerivedItemIdType $OccurrenceId
         */
        protected $OccurrenceId = null;
        /**
         * @var string $ChangeKey
         */
        protected $ChangeKey = null;

        /**
         * @param DerivedItemIdType $OccurrenceId
         * @param string $ChangeKey
         */
        public function __construct($OccurrenceId = null, $ChangeKey = null)
        {
                $this->OccurrenceId = $OccurrenceId;
                $this->ChangeKey = $ChangeKey;
        }

        /**
         * @return DerivedItemIdType
         */
        public function getOccurrenceId()
        {
                return $this->OccurrenceId;
        }

        /**
         * @param DerivedItemIdType $OccurrenceId
         * @return \UUP\Exchange\Types\RecurringMasterItemIdType
         */
        public function setOccurrenceId($OccurrenceId)
        {
                $this->OccurrenceId = $OccurrenceId;
                return $this;
        }

        /**
         * @return string
         */
        public function getChangeKey()
        {
                return $this->ChangeKey;
        }

        /**
         * @param string $ChangeKey
         * @return \UUP\Exchange\Types\RecurringMasterItemIdType
         */
        public function setChangeKey($ChangeKey)
        {
                $this->ChangeKey = $ChangeKey;
                return $this;
        }

}
