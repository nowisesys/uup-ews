<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfAlternateIdsType
{

        /**
         * @var AlternateIdType $AlternateId
         */
        protected $AlternateId = null;
        /**
         * @var AlternatePublicFolderIdType $AlternatePublicFolderId
         */
        protected $AlternatePublicFolderId = null;
        /**
         * @var AlternatePublicFolderItemIdType $AlternatePublicFolderItemId
         */
        protected $AlternatePublicFolderItemId = null;

        /**
         * @param AlternateIdType $AlternateId
         * @param AlternatePublicFolderIdType $AlternatePublicFolderId
         * @param AlternatePublicFolderItemIdType $AlternatePublicFolderItemId
         */
        public function __construct($AlternateId = null, $AlternatePublicFolderId = null, $AlternatePublicFolderItemId = null)
        {
                $this->AlternateId = $AlternateId;
                $this->AlternatePublicFolderId = $AlternatePublicFolderId;
                $this->AlternatePublicFolderItemId = $AlternatePublicFolderItemId;
        }

        /**
         * @return AlternateIdType
         */
        public function getAlternateId()
        {
                return $this->AlternateId;
        }

        /**
         * @param AlternateIdType $AlternateId
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAlternateIdsType
         */
        public function setAlternateId($AlternateId)
        {
                $this->AlternateId = $AlternateId;
                return $this;
        }

        /**
         * @return AlternatePublicFolderIdType
         */
        public function getAlternatePublicFolderId()
        {
                return $this->AlternatePublicFolderId;
        }

        /**
         * @param AlternatePublicFolderIdType $AlternatePublicFolderId
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAlternateIdsType
         */
        public function setAlternatePublicFolderId($AlternatePublicFolderId)
        {
                $this->AlternatePublicFolderId = $AlternatePublicFolderId;
                return $this;
        }

        /**
         * @return AlternatePublicFolderItemIdType
         */
        public function getAlternatePublicFolderItemId()
        {
                return $this->AlternatePublicFolderItemId;
        }

        /**
         * @param AlternatePublicFolderItemIdType $AlternatePublicFolderItemId
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAlternateIdsType
         */
        public function setAlternatePublicFolderItemId($AlternatePublicFolderItemId)
        {
                $this->AlternatePublicFolderItemId = $AlternatePublicFolderItemId;
                return $this;
        }

}
