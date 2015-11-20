<?php

namespace UUP\Exchange\Types;

class CreateFolderType extends BaseRequestType
{

        /**
         * @var TargetFolderIdType $ParentFolderId
         */
        protected $ParentFolderId = null;
        /**
         * @var NonEmptyArrayOfFoldersType $Folders
         */
        protected $Folders = null;

        /**
         * @param TargetFolderIdType $ParentFolderId
         * @param NonEmptyArrayOfFoldersType $Folders
         */
        public function __construct($ParentFolderId = null, $Folders = null)
        {
                $this->ParentFolderId = $ParentFolderId;
                $this->Folders = $Folders;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getParentFolderId()
        {
                return $this->ParentFolderId;
        }

        /**
         * @param TargetFolderIdType $ParentFolderId
         * @return \UUP\Exchange\Types\CreateFolderType
         */
        public function setParentFolderId($ParentFolderId)
        {
                $this->ParentFolderId = $ParentFolderId;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfFoldersType
         */
        public function getFolders()
        {
                return $this->Folders;
        }

        /**
         * @param NonEmptyArrayOfFoldersType $Folders
         * @return \UUP\Exchange\Types\CreateFolderType
         */
        public function setFolders($Folders)
        {
                $this->Folders = $Folders;
                return $this;
        }

}
