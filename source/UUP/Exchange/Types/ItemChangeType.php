<?php

namespace UUP\Exchange\Types;

class ItemChangeType
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
         * @var NonEmptyArrayOfItemChangeDescriptionsType $Updates
         */
        protected $Updates = null;

        /**
         * @param ItemIdType $ItemId
         * @param OccurrenceItemIdType $OccurrenceItemId
         * @param RecurringMasterItemIdType $RecurringMasterItemId
         * @param NonEmptyArrayOfItemChangeDescriptionsType $Updates
         */
        public function __construct($ItemId = null, $OccurrenceItemId = null, $RecurringMasterItemId = null, $Updates = null)
        {
                $this->ItemId = $ItemId;
                $this->OccurrenceItemId = $OccurrenceItemId;
                $this->RecurringMasterItemId = $RecurringMasterItemId;
                $this->Updates = $Updates;
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
         * @return \UUP\Exchange\Types\ItemChangeType
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
         * @return \UUP\Exchange\Types\ItemChangeType
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
         * @return \UUP\Exchange\Types\ItemChangeType
         */
        public function setRecurringMasterItemId($RecurringMasterItemId)
        {
                $this->RecurringMasterItemId = $RecurringMasterItemId;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfItemChangeDescriptionsType
         */
        public function getUpdates()
        {
                return $this->Updates;
        }

        /**
         * @param NonEmptyArrayOfItemChangeDescriptionsType $Updates
         * @return \UUP\Exchange\Types\ItemChangeType
         */
        public function setUpdates($Updates)
        {
                $this->Updates = $Updates;
                return $this;
        }

}
