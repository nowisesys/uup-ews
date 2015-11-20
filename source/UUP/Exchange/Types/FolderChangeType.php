<?php

namespace UUP\Exchange\Types;

class FolderChangeType
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
         * @var NonEmptyArrayOfFolderChangeDescriptionsType $Updates
         */
        protected $Updates = null;

        /**
         * @param FolderIdType $FolderId
         * @param DistinguishedFolderIdType $DistinguishedFolderId
         * @param NonEmptyArrayOfFolderChangeDescriptionsType $Updates
         */
        public function __construct($FolderId = null, $DistinguishedFolderId = null, $Updates = null)
        {
                $this->FolderId = $FolderId;
                $this->DistinguishedFolderId = $DistinguishedFolderId;
                $this->Updates = $Updates;
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
         * @return \UUP\Exchange\Types\FolderChangeType
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
         * @return \UUP\Exchange\Types\FolderChangeType
         */
        public function setDistinguishedFolderId($DistinguishedFolderId)
        {
                $this->DistinguishedFolderId = $DistinguishedFolderId;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfFolderChangeDescriptionsType
         */
        public function getUpdates()
        {
                return $this->Updates;
        }

        /**
         * @param NonEmptyArrayOfFolderChangeDescriptionsType $Updates
         * @return \UUP\Exchange\Types\FolderChangeType
         */
        public function setUpdates($Updates)
        {
                $this->Updates = $Updates;
                return $this;
        }

}
