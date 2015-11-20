<?php

namespace UUP\Exchange\Types;

class ArrayOfGroupedItemsType
{

        /**
         * @var GroupedItemsType[] $GroupedItems
         */
        protected $GroupedItems = null;

        public function __construct()
        {
                
        }

        /**
         * @return GroupedItemsType[]
         */
        public function getGroupedItems()
        {
                return $this->GroupedItems;
        }

        /**
         * @param GroupedItemsType[] $GroupedItems
         * @return \UUP\Exchange\Types\ArrayOfGroupedItemsType
         */
        public function setGroupedItems(array $GroupedItems = null)
        {
                $this->GroupedItems = $GroupedItems;
                return $this;
        }

}
