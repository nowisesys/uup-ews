<?php

namespace UUP\Exchange\Types;

class GetItemType extends BaseRequestType
{

        /**
         * @var ItemResponseShapeType $ItemShape
         */
        protected $ItemShape = null;
        /**
         * @var NonEmptyArrayOfBaseItemIdsType $ItemIds
         */
        protected $ItemIds = null;

        /**
         * @param ItemResponseShapeType $ItemShape
         * @param NonEmptyArrayOfBaseItemIdsType $ItemIds
         */
        public function __construct($ItemShape = null, $ItemIds = null)
        {
                $this->ItemShape = $ItemShape;
                $this->ItemIds = $ItemIds;
        }

        /**
         * @return ItemResponseShapeType
         */
        public function getItemShape()
        {
                return $this->ItemShape;
        }

        /**
         * @param ItemResponseShapeType $ItemShape
         * @return \UUP\Exchange\Types\GetItemType
         */
        public function setItemShape($ItemShape)
        {
                $this->ItemShape = $ItemShape;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfBaseItemIdsType
         */
        public function getItemIds()
        {
                return $this->ItemIds;
        }

        /**
         * @param NonEmptyArrayOfBaseItemIdsType $ItemIds
         * @return \UUP\Exchange\Types\GetItemType
         */
        public function setItemIds($ItemIds)
        {
                $this->ItemIds = $ItemIds;
                return $this;
        }

}
