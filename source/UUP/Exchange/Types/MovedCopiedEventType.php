<?php

namespace UUP\Exchange\Types;

class MovedCopiedEventType extends BaseObjectChangedEventType
{

        /**
         * @var FolderIdType $OldFolderId
         */
        protected $OldFolderId = null;
        /**
         * @var ItemIdType $OldItemId
         */
        protected $OldItemId = null;
        /**
         * @var FolderIdType $OldParentFolderId
         */
        protected $OldParentFolderId = null;

        /**
         * @param \DateTime $TimeStamp
         * @param FolderIdType $FolderId
         * @param ItemIdType $ItemId
         * @param FolderIdType $ParentFolderId
         * @param FolderIdType $OldFolderId
         * @param ItemIdType $OldItemId
         * @param FolderIdType $OldParentFolderId
         */
        public function __construct(\DateTime $TimeStamp = null, $FolderId = null, $ItemId = null, $ParentFolderId = null, $OldFolderId = null, $OldItemId = null, $OldParentFolderId = null)
        {
                parent::__construct($TimeStamp, $FolderId, $ItemId, $ParentFolderId);
                $this->OldFolderId = $OldFolderId;
                $this->OldItemId = $OldItemId;
                $this->OldParentFolderId = $OldParentFolderId;
        }

        /**
         * @return FolderIdType
         */
        public function getOldFolderId()
        {
                return $this->OldFolderId;
        }

        /**
         * @param FolderIdType $OldFolderId
         * @return \UUP\Exchange\Types\MovedCopiedEventType
         */
        public function setOldFolderId($OldFolderId)
        {
                $this->OldFolderId = $OldFolderId;
                return $this;
        }

        /**
         * @return ItemIdType
         */
        public function getOldItemId()
        {
                return $this->OldItemId;
        }

        /**
         * @param ItemIdType $OldItemId
         * @return \UUP\Exchange\Types\MovedCopiedEventType
         */
        public function setOldItemId($OldItemId)
        {
                $this->OldItemId = $OldItemId;
                return $this;
        }

        /**
         * @return FolderIdType
         */
        public function getOldParentFolderId()
        {
                return $this->OldParentFolderId;
        }

        /**
         * @param FolderIdType $OldParentFolderId
         * @return \UUP\Exchange\Types\MovedCopiedEventType
         */
        public function setOldParentFolderId($OldParentFolderId)
        {
                $this->OldParentFolderId = $OldParentFolderId;
                return $this;
        }

}
