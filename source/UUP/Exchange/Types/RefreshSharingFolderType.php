<?php

namespace UUP\Exchange\Types;

class RefreshSharingFolderType extends BaseRequestType
{

        /**
         * @var FolderIdType $SharingFolderId
         */
        protected $SharingFolderId = null;

        /**
         * @param FolderIdType $SharingFolderId
         */
        public function __construct($SharingFolderId = null)
        {
                $this->SharingFolderId = $SharingFolderId;
        }

        /**
         * @return FolderIdType
         */
        public function getSharingFolderId()
        {
                return $this->SharingFolderId;
        }

        /**
         * @param FolderIdType $SharingFolderId
         * @return \UUP\Exchange\Types\RefreshSharingFolderType
         */
        public function setSharingFolderId($SharingFolderId)
        {
                $this->SharingFolderId = $SharingFolderId;
                return $this;
        }

}
