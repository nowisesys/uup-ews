<?php

namespace UUP\Exchange\Types;

class UploadItemsType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfUploadItemsType $Items
         */
        protected $Items = null;

        /**
         * @param NonEmptyArrayOfUploadItemsType $Items
         */
        public function __construct($Items = null)
        {
                $this->Items = $Items;
        }

        /**
         * @return NonEmptyArrayOfUploadItemsType
         */
        public function getItems()
        {
                return $this->Items;
        }

        /**
         * @param NonEmptyArrayOfUploadItemsType $Items
         * @return \UUP\Exchange\Types\UploadItemsType
         */
        public function setItems($Items)
        {
                $this->Items = $Items;
                return $this;
        }

}
