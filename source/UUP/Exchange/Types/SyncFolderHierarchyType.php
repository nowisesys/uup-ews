<?php

namespace UUP\Exchange\Types;

class SyncFolderHierarchyType extends BaseRequestType
{

        /**
         * @var FolderResponseShapeType $FolderShape
         */
        protected $FolderShape = null;
        /**
         * @var TargetFolderIdType $SyncFolderId
         */
        protected $SyncFolderId = null;
        /**
         * @var string $SyncState
         */
        protected $SyncState = null;

        /**
         * @param FolderResponseShapeType $FolderShape
         */
        public function __construct($FolderShape = null)
        {
                $this->FolderShape = $FolderShape;
        }

        /**
         * @return FolderResponseShapeType
         */
        public function getFolderShape()
        {
                return $this->FolderShape;
        }

        /**
         * @param FolderResponseShapeType $FolderShape
         * @return \UUP\Exchange\Types\SyncFolderHierarchyType
         */
        public function setFolderShape($FolderShape)
        {
                $this->FolderShape = $FolderShape;
                return $this;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getSyncFolderId()
        {
                return $this->SyncFolderId;
        }

        /**
         * @param TargetFolderIdType $SyncFolderId
         * @return \UUP\Exchange\Types\SyncFolderHierarchyType
         */
        public function setSyncFolderId($SyncFolderId)
        {
                $this->SyncFolderId = $SyncFolderId;
                return $this;
        }

        /**
         * @return string
         */
        public function getSyncState()
        {
                return $this->SyncState;
        }

        /**
         * @param string $SyncState
         * @return \UUP\Exchange\Types\SyncFolderHierarchyType
         */
        public function setSyncState($SyncState)
        {
                $this->SyncState = $SyncState;
                return $this;
        }

}
