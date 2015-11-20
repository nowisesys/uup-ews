<?php

namespace UUP\Exchange\Types;

class SendItemType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfBaseItemIdsType $ItemIds
         */
        protected $ItemIds = null;
        /**
         * @var TargetFolderIdType $SavedItemFolderId
         */
        protected $SavedItemFolderId = null;
        /**
         * @var boolean $SaveItemToFolder
         */
        protected $SaveItemToFolder = null;

        /**
         * @param NonEmptyArrayOfBaseItemIdsType $ItemIds
         * @param boolean $SaveItemToFolder
         */
        public function __construct($ItemIds = null, $SaveItemToFolder = null)
        {
                $this->ItemIds = $ItemIds;
                $this->SaveItemToFolder = $SaveItemToFolder;
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
         * @return \UUP\Exchange\Types\SendItemType
         */
        public function setItemIds($ItemIds)
        {
                $this->ItemIds = $ItemIds;
                return $this;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getSavedItemFolderId()
        {
                return $this->SavedItemFolderId;
        }

        /**
         * @param TargetFolderIdType $SavedItemFolderId
         * @return \UUP\Exchange\Types\SendItemType
         */
        public function setSavedItemFolderId($SavedItemFolderId)
        {
                $this->SavedItemFolderId = $SavedItemFolderId;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getSaveItemToFolder()
        {
                return $this->SaveItemToFolder;
        }

        /**
         * @param boolean $SaveItemToFolder
         * @return \UUP\Exchange\Types\SendItemType
         */
        public function setSaveItemToFolder($SaveItemToFolder)
        {
                $this->SaveItemToFolder = $SaveItemToFolder;
                return $this;
        }

}
