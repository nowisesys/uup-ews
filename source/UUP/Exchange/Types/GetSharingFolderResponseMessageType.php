<?php

namespace UUP\Exchange\Types;

class GetSharingFolderResponseMessageType extends ResponseMessageType
{

        /**
         * @var FolderIdType $SharingFolderId
         */
        protected $SharingFolderId = null;

        /**
         * @param ResponseClassType $ResponseClass
         * @param FolderIdType $SharingFolderId
         */
        public function __construct($ResponseClass = null, $SharingFolderId = null)
        {
                parent::__construct($ResponseClass);
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
         * @return \UUP\Exchange\Types\GetSharingFolderResponseMessageType
         */
        public function setSharingFolderId($SharingFolderId)
        {
                $this->SharingFolderId = $SharingFolderId;
                return $this;
        }

}
