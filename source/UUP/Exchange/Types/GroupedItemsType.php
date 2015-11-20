<?php

namespace UUP\Exchange\Types;

class GroupedItemsType
{

        /**
         * @var string $GroupIndex
         */
        protected $GroupIndex = null;
        /**
         * @var ArrayOfRealItemsType $Items
         */
        protected $Items = null;

        /**
         * @param string $GroupIndex
         * @param ArrayOfRealItemsType $Items
         */
        public function __construct($GroupIndex = null, $Items = null)
        {
                $this->GroupIndex = $GroupIndex;
                $this->Items = $Items;
        }

        /**
         * @return string
         */
        public function getGroupIndex()
        {
                return $this->GroupIndex;
        }

        /**
         * @param string $GroupIndex
         * @return \UUP\Exchange\Types\GroupedItemsType
         */
        public function setGroupIndex($GroupIndex)
        {
                $this->GroupIndex = $GroupIndex;
                return $this;
        }

        /**
         * @return ArrayOfRealItemsType
         */
        public function getItems()
        {
                return $this->Items;
        }

        /**
         * @param ArrayOfRealItemsType $Items
         * @return \UUP\Exchange\Types\GroupedItemsType
         */
        public function setItems($Items)
        {
                $this->Items = $Items;
                return $this;
        }

}
