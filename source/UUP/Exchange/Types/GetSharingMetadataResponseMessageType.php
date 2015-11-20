<?php

namespace UUP\Exchange\Types;

class GetSharingMetadataResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfEncryptedSharedFolderDataType $EncryptedSharedFolderDataCollection
         */
        protected $EncryptedSharedFolderDataCollection = null;
        /**
         * @var ArrayOfInvalidRecipientsType $InvalidRecipients
         */
        protected $InvalidRecipients = null;

        /**
         * @param ResponseClassType $ResponseClass
         * @param ArrayOfEncryptedSharedFolderDataType $EncryptedSharedFolderDataCollection
         * @param ArrayOfInvalidRecipientsType $InvalidRecipients
         */
        public function __construct($ResponseClass = null, $EncryptedSharedFolderDataCollection = null, $InvalidRecipients = null)
        {
                parent::__construct($ResponseClass);
                $this->EncryptedSharedFolderDataCollection = $EncryptedSharedFolderDataCollection;
                $this->InvalidRecipients = $InvalidRecipients;
        }

        /**
         * @return ArrayOfEncryptedSharedFolderDataType
         */
        public function getEncryptedSharedFolderDataCollection()
        {
                return $this->EncryptedSharedFolderDataCollection;
        }

        /**
         * @param ArrayOfEncryptedSharedFolderDataType $EncryptedSharedFolderDataCollection
         * @return \UUP\Exchange\Types\GetSharingMetadataResponseMessageType
         */
        public function setEncryptedSharedFolderDataCollection($EncryptedSharedFolderDataCollection)
        {
                $this->EncryptedSharedFolderDataCollection = $EncryptedSharedFolderDataCollection;
                return $this;
        }

        /**
         * @return ArrayOfInvalidRecipientsType
         */
        public function getInvalidRecipients()
        {
                return $this->InvalidRecipients;
        }

        /**
         * @param ArrayOfInvalidRecipientsType $InvalidRecipients
         * @return \UUP\Exchange\Types\GetSharingMetadataResponseMessageType
         */
        public function setInvalidRecipients($InvalidRecipients)
        {
                $this->InvalidRecipients = $InvalidRecipients;
                return $this;
        }

}
