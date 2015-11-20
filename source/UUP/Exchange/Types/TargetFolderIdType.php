<?php

namespace UUP\Exchange\Types;

class TargetFolderIdType
{

        /**
         * @var FolderIdType $FolderId
         */
        protected $FolderId = null;
        /**
         * @var DistinguishedFolderIdType $DistinguishedFolderId
         */
        protected $DistinguishedFolderId = null;

        /**
         * @param FolderIdType $FolderId
         * @param DistinguishedFolderIdType $DistinguishedFolderId
         */
        public function __construct($FolderId = null, $DistinguishedFolderId = null)
        {
                $this->FolderId = $FolderId;
                $this->DistinguishedFolderId = $DistinguishedFolderId;
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
         * @return \UUP\Exchange\Types\TargetFolderIdType
         */
        public function setFolderId($FolderId)
        {
                $this->FolderId = $FolderId;
                return $this;
        }

        /**
         * @return DistinguishedFolderIdType
         */
        public function getDistinguishedFolderId()
        {
                return $this->DistinguishedFolderId;
        }

        /**
         * @param DistinguishedFolderIdType $DistinguishedFolderId
         * @return \UUP\Exchange\Types\TargetFolderIdType
         */
        public function setDistinguishedFolderId($DistinguishedFolderId)
        {
                $this->DistinguishedFolderId = $DistinguishedFolderId;
                return $this;
        }

}
