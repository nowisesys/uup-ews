<?php

namespace UUP\Exchange\Types;

class GetSharingFolderType extends BaseRequestType
{

        /**
         * @var NonEmptyStringType $SmtpAddress
         */
        protected $SmtpAddress = null;
        /**
         * @var SharingDataType $DataType
         */
        protected $DataType = null;
        /**
         * @var NonEmptyStringType $SharedFolderId
         */
        protected $SharedFolderId = null;

        /**
         * @param NonEmptyStringType $SmtpAddress
         */
        public function __construct($SmtpAddress = null)
        {
                $this->SmtpAddress = $SmtpAddress;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getSmtpAddress()
        {
                return $this->SmtpAddress;
        }

        /**
         * @param NonEmptyStringType $SmtpAddress
         * @return \UUP\Exchange\Types\GetSharingFolderType
         */
        public function setSmtpAddress($SmtpAddress)
        {
                $this->SmtpAddress = $SmtpAddress;
                return $this;
        }

        /**
         * @return SharingDataType
         */
        public function getDataType()
        {
                return $this->DataType;
        }

        /**
         * @param SharingDataType $DataType
         * @return \UUP\Exchange\Types\GetSharingFolderType
         */
        public function setDataType($DataType)
        {
                $this->DataType = $DataType;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getSharedFolderId()
        {
                return $this->SharedFolderId;
        }

        /**
         * @param NonEmptyStringType $SharedFolderId
         * @return \UUP\Exchange\Types\GetSharingFolderType
         */
        public function setSharedFolderId($SharedFolderId)
        {
                $this->SharedFolderId = $SharedFolderId;
                return $this;
        }

}
