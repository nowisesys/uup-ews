<?php

namespace UUP\Exchange\Types;

class EmptyFolderType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfBaseFolderIdsType $FolderIds
         */
        protected $FolderIds = null;
        /**
         * @var DisposalType $DeleteType
         */
        protected $DeleteType = null;
        /**
         * @var boolean $DeleteSubFolders
         */
        protected $DeleteSubFolders = null;

        /**
         * @param NonEmptyArrayOfBaseFolderIdsType $FolderIds
         * @param DisposalType $DeleteType
         * @param boolean $DeleteSubFolders
         */
        public function __construct($FolderIds = null, $DeleteType = null, $DeleteSubFolders = null)
        {
                $this->FolderIds = $FolderIds;
                $this->DeleteType = $DeleteType;
                $this->DeleteSubFolders = $DeleteSubFolders;
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
         * @return \UUP\Exchange\Types\EmptyFolderType
         */
        public function setFolderIds($FolderIds)
        {
                $this->FolderIds = $FolderIds;
                return $this;
        }

        /**
         * @return DisposalType
         */
        public function getDeleteType()
        {
                return $this->DeleteType;
        }

        /**
         * @param DisposalType $DeleteType
         * @return \UUP\Exchange\Types\EmptyFolderType
         */
        public function setDeleteType($DeleteType)
        {
                $this->DeleteType = $DeleteType;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getDeleteSubFolders()
        {
                return $this->DeleteSubFolders;
        }

        /**
         * @param boolean $DeleteSubFolders
         * @return \UUP\Exchange\Types\EmptyFolderType
         */
        public function setDeleteSubFolders($DeleteSubFolders)
        {
                $this->DeleteSubFolders = $DeleteSubFolders;
                return $this;
        }

}
