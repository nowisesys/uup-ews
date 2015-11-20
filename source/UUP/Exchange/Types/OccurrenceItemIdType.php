<?php

namespace UUP\Exchange\Types;

class OccurrenceItemIdType extends BaseItemIdType
{

        /**
         * @var DerivedItemIdType $RecurringMasterId
         */
        protected $RecurringMasterId = null;
        /**
         * @var string $ChangeKey
         */
        protected $ChangeKey = null;
        /**
         * @var int $InstanceIndex
         */
        protected $InstanceIndex = null;

        /**
         * @param DerivedItemIdType $RecurringMasterId
         * @param string $ChangeKey
         * @param int $InstanceIndex
         */
        public function __construct($RecurringMasterId = null, $ChangeKey = null, $InstanceIndex = null)
        {
                $this->RecurringMasterId = $RecurringMasterId;
                $this->ChangeKey = $ChangeKey;
                $this->InstanceIndex = $InstanceIndex;
        }

        /**
         * @return DerivedItemIdType
         */
        public function getRecurringMasterId()
        {
                return $this->RecurringMasterId;
        }

        /**
         * @param DerivedItemIdType $RecurringMasterId
         * @return \UUP\Exchange\Types\OccurrenceItemIdType
         */
        public function setRecurringMasterId($RecurringMasterId)
        {
                $this->RecurringMasterId = $RecurringMasterId;
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
         * @return \UUP\Exchange\Types\OccurrenceItemIdType
         */
        public function setChangeKey($ChangeKey)
        {
                $this->ChangeKey = $ChangeKey;
                return $this;
        }

        /**
         * @return int
         */
        public function getInstanceIndex()
        {
                return $this->InstanceIndex;
        }

        /**
         * @param int $InstanceIndex
         * @return \UUP\Exchange\Types\OccurrenceItemIdType
         */
        public function setInstanceIndex($InstanceIndex)
        {
                $this->InstanceIndex = $InstanceIndex;
                return $this;
        }

}
