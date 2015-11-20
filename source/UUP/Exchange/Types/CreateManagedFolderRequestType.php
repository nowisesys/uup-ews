<?php

namespace UUP\Exchange\Types;

class CreateManagedFolderRequestType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfFolderNamesType $FolderNames
         */
        protected $FolderNames = null;
        /**
         * @var EmailAddressType $Mailbox
         */
        protected $Mailbox = null;

        /**
         * @param NonEmptyArrayOfFolderNamesType $FolderNames
         */
        public function __construct($FolderNames = null)
        {
                $this->FolderNames = $FolderNames;
        }

        /**
         * @return NonEmptyArrayOfFolderNamesType
         */
        public function getFolderNames()
        {
                return $this->FolderNames;
        }

        /**
         * @param NonEmptyArrayOfFolderNamesType $FolderNames
         * @return \UUP\Exchange\Types\CreateManagedFolderRequestType
         */
        public function setFolderNames($FolderNames)
        {
                $this->FolderNames = $FolderNames;
                return $this;
        }

        /**
         * @return EmailAddressType
         */
        public function getMailbox()
        {
                return $this->Mailbox;
        }

        /**
         * @param EmailAddressType $Mailbox
         * @return \UUP\Exchange\Types\CreateManagedFolderRequestType
         */
        public function setMailbox($Mailbox)
        {
                $this->Mailbox = $Mailbox;
                return $this;
        }

}
