<?php

namespace UUP\Exchange\Types;

class ExportItemsResponseMessageType extends ResponseMessageType
{

        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;
        /**
         * @var base64Binary $Data
         */
        protected $Data = null;

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
         * @return \UUP\Exchange\Types\ExportItemsResponseMessageType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

        /**
         * @return base64Binary
         */
        public function getData()
        {
                return $this->Data;
        }

        /**
         * @param base64Binary $Data
         * @return \UUP\Exchange\Types\ExportItemsResponseMessageType
         */
        public function setData($Data)
        {
                $this->Data = $Data;
                return $this;
        }

}
