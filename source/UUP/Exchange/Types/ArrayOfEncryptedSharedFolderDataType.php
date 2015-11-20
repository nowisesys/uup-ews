<?php

namespace UUP\Exchange\Types;

class ArrayOfEncryptedSharedFolderDataType
{

        /**
         * @var EncryptedSharedFolderDataType $EncryptedSharedFolderData
         */
        protected $EncryptedSharedFolderData = null;

        /**
         * @param EncryptedSharedFolderDataType $EncryptedSharedFolderData
         */
        public function __construct($EncryptedSharedFolderData = null)
        {
                $this->EncryptedSharedFolderData = $EncryptedSharedFolderData;
        }

        /**
         * @return EncryptedSharedFolderDataType
         */
        public function getEncryptedSharedFolderData()
        {
                return $this->EncryptedSharedFolderData;
        }

        /**
         * @param EncryptedSharedFolderDataType $EncryptedSharedFolderData
         * @return \UUP\Exchange\Types\ArrayOfEncryptedSharedFolderDataType
         */
        public function setEncryptedSharedFolderData($EncryptedSharedFolderData)
        {
                $this->EncryptedSharedFolderData = $EncryptedSharedFolderData;
                return $this;
        }

}
