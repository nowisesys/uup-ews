<?php

namespace UUP\Exchange\Types;

class EncryptedSharedFolderDataType
{

        /**
         * @var EncryptedDataContainerType $Token
         */
        protected $Token = null;
        /**
         * @var EncryptedDataContainerType $Data
         */
        protected $Data = null;

        /**
         * @param EncryptedDataContainerType $Token
         * @param EncryptedDataContainerType $Data
         */
        public function __construct($Token = null, $Data = null)
        {
                $this->Token = $Token;
                $this->Data = $Data;
        }

        /**
         * @return EncryptedDataContainerType
         */
        public function getToken()
        {
                return $this->Token;
        }

        /**
         * @param EncryptedDataContainerType $Token
         * @return \UUP\Exchange\Types\EncryptedSharedFolderDataType
         */
        public function setToken($Token)
        {
                $this->Token = $Token;
                return $this;
        }

        /**
         * @return EncryptedDataContainerType
         */
        public function getData()
        {
                return $this->Data;
        }

        /**
         * @param EncryptedDataContainerType $Data
         * @return \UUP\Exchange\Types\EncryptedSharedFolderDataType
         */
        public function setData($Data)
        {
                $this->Data = $Data;
                return $this;
        }

}
