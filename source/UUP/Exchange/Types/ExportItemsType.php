<?php

namespace UUP\Exchange\Types;

class ExportItemsType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfItemIdsType $ItemIds
         */
        protected $ItemIds = null;

        /**
         * @param NonEmptyArrayOfItemIdsType $ItemIds
         */
        public function __construct($ItemIds = null)
        {
                $this->ItemIds = $ItemIds;
        }

        /**
         * @return NonEmptyArrayOfItemIdsType
         */
        public function getItemIds()
        {
                return $this->ItemIds;
        }

        /**
         * @param NonEmptyArrayOfItemIdsType $ItemIds
         * @return \UUP\Exchange\Types\ExportItemsType
         */
        public function setItemIds($ItemIds)
        {
                $this->ItemIds = $ItemIds;
                return $this;
        }

}
