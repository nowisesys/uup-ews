<?php

namespace UUP\Exchange\Types;

class BaseMoveCopyFolderType extends BaseRequestType
{

        /**
         * @var TargetFolderIdType $ToFolderId
         */
        protected $ToFolderId = null;
        /**
         * @var NonEmptyArrayOfBaseFolderIdsType $FolderIds
         */
        protected $FolderIds = null;

        /**
         * @param TargetFolderIdType $ToFolderId
         * @param NonEmptyArrayOfBaseFolderIdsType $FolderIds
         */
        public function __construct($ToFolderId = null, $FolderIds = null)
        {
                $this->ToFolderId = $ToFolderId;
                $this->FolderIds = $FolderIds;
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
         * @return \UUP\Exchange\Types\BaseMoveCopyFolderType
         */
        public function setToFolderId($ToFolderId)
        {
                $this->ToFolderId = $ToFolderId;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfBaseFolderIdsType
         */
        public function getFolderIds()
        {
                return $this->FolderIds;
        }

        /**
         * @param NonEmptyArrayOfBaseFolderIdsType $FolderIds
         * @return \UUP\Exchange\Types\BaseMoveCopyFolderType
         */
        public function setFolderIds($FolderIds)
        {
                $this->FolderIds = $FolderIds;
                return $this;
        }

}
