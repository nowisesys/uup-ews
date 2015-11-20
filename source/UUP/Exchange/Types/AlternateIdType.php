<?php

namespace UUP\Exchange\Types;

class AlternateIdType extends AlternateIdBaseType
{

        /**
         * @var string $Id
         */
        protected $Id = null;
        /**
         * @var NonEmptyStringType $Mailbox
         */
        protected $Mailbox = null;
        /**
         * @var boolean $IsArchive
         */
        protected $IsArchive = null;

        /**
         * @param IdFormatType $Format
         * @param string $Id
         * @param NonEmptyStringType $Mailbox
         * @param boolean $IsArchive
         */
        public function __construct($Format = null, $Id = null, $Mailbox = null, $IsArchive = null)
        {
                parent::__construct($Format);
                $this->Id = $Id;
                $this->Mailbox = $Mailbox;
                $this->IsArchive = $IsArchive;
        }

        /**
         * @return string
         */
        public function getId()
        {
                return $this->Id;
        }

        /**
         * @param string $Id
         * @return \UUP\Exchange\Types\AlternateIdType
         */
        public function setId($Id)
        {
                $this->Id = $Id;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getMailbox()
        {
                return $this->Mailbox;
        }

        /**
         * @param NonEmptyStringType $Mailbox
         * @return \UUP\Exchange\Types\AlternateIdType
         */
        public function setMailbox($Mailbox)
        {
                $this->Mailbox = $Mailbox;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsArchive()
        {
                return $this->IsArchive;
        }

        /**
         * @param boolean $IsArchive
         * @return \UUP\Exchange\Types\AlternateIdType
         */
        public function setIsArchive($IsArchive)
        {
                $this->IsArchive = $IsArchive;
                return $this;
        }

}
