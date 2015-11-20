<?php

namespace UUP\Exchange\Types;

class SyncFolderHierarchyDeleteType
{

        /**
         * @var FolderIdType $FolderId
         */
        protected $FolderId = null;

        /**
         * @param FolderIdType $FolderId
         */
        public function __construct($FolderId = null)
        {
                $this->FolderId = $FolderId;
        }

        /**
         * @return FolderIdType
         */
        public function getFolderId()
        {
                return $this->FolderId;
        }

        /**
         * @param FolderIdType $FolderId
         * @return \UUP\Exchange\Types\SyncFolderHierarchyDeleteType
         */
        public function setFolderId($FolderId)
        {
                $this->FolderId = $FolderId;
                return $this;
        }

}
