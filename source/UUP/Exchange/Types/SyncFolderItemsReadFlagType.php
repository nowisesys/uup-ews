<?php

namespace UUP\Exchange\Types;

class SyncFolderItemsReadFlagType
{

        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;
        /**
         * @var boolean $IsRead
         */
        protected $IsRead = null;

        /**
         * @param ItemIdType $ItemId
         * @param boolean $IsRead
         */
        public function __construct($ItemId = null, $IsRead = null)
        {
                $this->ItemId = $ItemId;
                $this->IsRead = $IsRead;
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
         * @return \UUP\Exchange\Types\SyncFolderItemsReadFlagType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsRead()
        {
                return $this->IsRead;
        }

        /**
         * @param boolean $IsRead
         * @return \UUP\Exchange\Types\SyncFolderItemsReadFlagType
         */
        public function setIsRead($IsRead)
        {
                $this->IsRead = $IsRead;
                return $this;
        }

}
