<?php

namespace UUP\Exchange\Types;

class UploadItemsResponseMessageType extends ResponseMessageType
{

        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
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
         * @return \UUP\Exchange\Types\UploadItemsResponseMessageType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

}
