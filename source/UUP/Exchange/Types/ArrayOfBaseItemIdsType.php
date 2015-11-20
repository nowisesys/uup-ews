<?php

namespace UUP\Exchange\Types;

class ArrayOfBaseItemIdsType
{

        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;

        /**
         * @param ItemIdType $ItemId
         */
        public function __construct($ItemId = null)
        {
                $this->ItemId = $ItemId;
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
         * @return \UUP\Exchange\Types\ArrayOfBaseItemIdsType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

}
