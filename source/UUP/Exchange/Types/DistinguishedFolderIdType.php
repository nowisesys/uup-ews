<?php

namespace UUP\Exchange\Types;

class DistinguishedFolderIdType extends BaseFolderIdType
{

        /**
         * @var EmailAddressType $Mailbox
         */
        protected $Mailbox = null;
        /**
         * @var DistinguishedFolderIdNameType $Id
         */
        protected $Id = null;
        /**
         * @var string $ChangeKey
         */
        protected $ChangeKey = null;

        /**
         * @param DistinguishedFolderIdNameType $Id
         * @param string $ChangeKey
         */
        public function __construct($Id = null, $ChangeKey = null)
        {
                $this->Id = $Id;
                $this->ChangeKey = $ChangeKey;
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
         * @return \UUP\Exchange\Types\DistinguishedFolderIdType
         */
        public function setMailbox($Mailbox)
        {
                $this->Mailbox = $Mailbox;
                return $this;
        }

        /**
         * @return DistinguishedFolderIdNameType
         */
        public function getId()
        {
                return $this->Id;
        }

        /**
         * @param DistinguishedFolderIdNameType $Id
         * @return \UUP\Exchange\Types\DistinguishedFolderIdType
         */
        public function setId($Id)
        {
                $this->Id = $Id;
                return $this;
        }

        /**
         * @return string
         */
        public function getChangeKey()
        {
                return $this->ChangeKey;
        }

        /**
         * @param string $ChangeKey
         * @return \UUP\Exchange\Types\DistinguishedFolderIdType
         */
        public function setChangeKey($ChangeKey)
        {
                $this->ChangeKey = $ChangeKey;
                return $this;
        }

}
