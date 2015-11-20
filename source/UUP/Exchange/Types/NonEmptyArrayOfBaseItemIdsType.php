<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfBaseItemIdsType
{

        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;
        /**
         * @var OccurrenceItemIdType $OccurrenceItemId
         */
        protected $OccurrenceItemId = null;
        /**
         * @var RecurringMasterItemIdType $RecurringMasterItemId
         */
        protected $RecurringMasterItemId = null;

        /**
         * @param ItemIdType $ItemId
         * @param OccurrenceItemIdType $OccurrenceItemId
         * @param RecurringMasterItemIdType $RecurringMasterItemId
         */
        public function __construct($ItemId = null, $OccurrenceItemId = null, $RecurringMasterItemId = null)
        {
                $this->ItemId = $ItemId;
                $this->OccurrenceItemId = $OccurrenceItemId;
                $this->RecurringMasterItemId = $RecurringMasterItemId;
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfBaseItemIdsType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

        /**
         * @return OccurrenceItemIdType
         */
        public function getOccurrenceItemId()
        {
                return $this->OccurrenceItemId;
        }

        /**
         * @param OccurrenceItemIdType $OccurrenceItemId
         * @return \UUP\Exchange\Types\NonEmptyArrayOfBaseItemIdsType
         */
        public function setOccurrenceItemId($OccurrenceItemId)
        {
                $this->OccurrenceItemId = $OccurrenceItemId;
                return $this;
        }

        /**
         * @return RecurringMasterItemIdType
         */
        public function getRecurringMasterItemId()
        {
                return $this->RecurringMasterItemId;
        }

        /**
         * @param RecurringMasterItemIdType $RecurringMasterItemId
         * @return \UUP\Exchange\Types\NonEmptyArrayOfBaseItemIdsType
         */
        public function setRecurringMasterItemId($RecurringMasterItemId)
        {
                $this->RecurringMasterItemId = $RecurringMasterItemId;
                return $this;
        }

}
