<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfItemIdsType
{

        /**
         * @var ItemIdType[] $ItemId
         */
        protected $ItemId = null;

        /**
         * @param ItemIdType[] $ItemId
         */
        public function __construct(array $ItemId = null)
        {
                $this->ItemId = $ItemId;
        }

        /**
         * @return ItemIdType[]
         */
        public function getItemId()
        {
                return $this->ItemId;
        }

        /**
         * @param ItemIdType[] $ItemId
         * @return \UUP\Exchange\Types\NonEmptyArrayOfItemIdsType
         */
        public function setItemId(array $ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

}
