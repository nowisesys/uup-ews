<?php

namespace UUP\Exchange\Types;

class BaseMoveCopyItemType extends BaseRequestType
{

        /**
         * @var TargetFolderIdType $ToFolderId
         */
        protected $ToFolderId = null;
        /**
         * @var NonEmptyArrayOfBaseItemIdsType $ItemIds
         */
        protected $ItemIds = null;
        /**
         * @var boolean $ReturnNewItemIds
         */
        protected $ReturnNewItemIds = null;

        /**
         * @param TargetFolderIdType $ToFolderId
         * @param NonEmptyArrayOfBaseItemIdsType $ItemIds
         */
        public function __construct($ToFolderId = null, $ItemIds = null)
        {
                $this->ToFolderId = $ToFolderId;
                $this->ItemIds = $ItemIds;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getToFolderId()
        {
                return $this->ToFolderId;
        }

        /**
         * @param TargetFolderIdType $ToFolderId
         * @return \UUP\Exchange\Types\BaseMoveCopyItemType
         */
        public function setToFolderId($ToFolderId)
        {
                $this->ToFolderId = $ToFolderId;
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
         * @return \UUP\Exchange\Types\BaseMoveCopyItemType
         */
        public function setItemIds($ItemIds)
        {
                $this->ItemIds = $ItemIds;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getReturnNewItemIds()
        {
                return $this->ReturnNewItemIds;
        }

        /**
         * @param boolean $ReturnNewItemIds
         * @return \UUP\Exchange\Types\BaseMoveCopyItemType
         */
        public function setReturnNewItemIds($ReturnNewItemIds)
        {
                $this->ReturnNewItemIds = $ReturnNewItemIds;
                return $this;
        }

}
