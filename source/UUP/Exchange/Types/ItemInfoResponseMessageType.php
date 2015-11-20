<?php

namespace UUP\Exchange\Types;

class ItemInfoResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfRealItemsType $Items
         */
        protected $Items = null;

        /**
         * @param ResponseClassType $ResponseClass
         * @param ArrayOfRealItemsType $Items
         */
        public function __construct($ResponseClass = null, $Items = null)
        {
                parent::__construct($ResponseClass);
                $this->Items = $Items;
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
         * @return \UUP\Exchange\Types\ItemInfoResponseMessageType
         */
        public function setItems($Items)
        {
                $this->Items = $Items;
                return $this;
        }

}
