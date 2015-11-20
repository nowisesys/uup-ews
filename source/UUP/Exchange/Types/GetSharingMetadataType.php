<?php

namespace UUP\Exchange\Types;

class GetSharingMetadataType extends BaseRequestType
{

        /**
         * @var FolderIdType $IdOfFolderToShare
         */
        protected $IdOfFolderToShare = null;
        /**
         * @var NonEmptyStringType $SenderSmtpAddress
         */
        protected $SenderSmtpAddress = null;
        /**
         * @var ArrayOfSmtpAddressType $Recipients
         */
        protected $Recipients = null;

        /**
         * @param FolderIdType $IdOfFolderToShare
         * @param NonEmptyStringType $SenderSmtpAddress
         * @param ArrayOfSmtpAddressType $Recipients
         */
        public function __construct($IdOfFolderToShare = null, $SenderSmtpAddress = null, $Recipients = null)
        {
                $this->IdOfFolderToShare = $IdOfFolderToShare;
                $this->SenderSmtpAddress = $SenderSmtpAddress;
                $this->Recipients = $Recipients;
        }

        /**
         * @return FolderIdType
         */
        public function getIdOfFolderToShare()
        {
                return $this->IdOfFolderToShare;
        }

        /**
         * @param FolderIdType $IdOfFolderToShare
         * @return \UUP\Exchange\Types\GetSharingMetadataType
         */
        public function setIdOfFolderToShare($IdOfFolderToShare)
        {
                $this->IdOfFolderToShare = $IdOfFolderToShare;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getSenderSmtpAddress()
        {
                return $this->SenderSmtpAddress;
        }

        /**
         * @param NonEmptyStringType $SenderSmtpAddress
         * @return \UUP\Exchange\Types\GetSharingMetadataType
         */
        public function setSenderSmtpAddress($SenderSmtpAddress)
        {
                $this->SenderSmtpAddress = $SenderSmtpAddress;
                return $this;
        }

        /**
         * @return ArrayOfSmtpAddressType
         */
        public function getRecipients()
        {
                return $this->Recipients;
        }

        /**
         * @param ArrayOfSmtpAddressType $Recipients
         * @return \UUP\Exchange\Types\GetSharingMetadataType
         */
        public function setRecipients($Recipients)
        {
                $this->Recipients = $Recipients;
                return $this;
        }

}
