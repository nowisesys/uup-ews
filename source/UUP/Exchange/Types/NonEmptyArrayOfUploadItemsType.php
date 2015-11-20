<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfUploadItemsType
{

        /**
         * @var UploadItemType[] $Item
         */
        protected $Item = null;

        /**
         * @param UploadItemType[] $Item
         */
        public function __construct(array $Item = null)
        {
                $this->Item = $Item;
        }

        /**
         * @return UploadItemType[]
         */
        public function getItem()
        {
                return $this->Item;
        }

        /**
         * @param UploadItemType[] $Item
         * @return \UUP\Exchange\Types\NonEmptyArrayOfUploadItemsType
         */
        public function setItem(array $Item)
        {
                $this->Item = $Item;
                return $this;
        }

}
