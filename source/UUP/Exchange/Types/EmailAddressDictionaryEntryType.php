<?php

namespace UUP\Exchange\Types;

class EmailAddressDictionaryEntryType
{

        /**
         * @var string $_
         */
        protected $_ = null;
        /**
         * @var EmailAddressKeyType $Key
         */
        protected $Key = null;
        /**
         * @var string $Name
         */
        protected $Name = null;
        /**
         * @var string $RoutingType
         */
        protected $RoutingType = null;
        /**
         * @var MailboxTypeType $MailboxType
         */
        protected $MailboxType = null;

        /**
         * @param string $_
         * @param EmailAddressKeyType $Key
         * @param string $Name
         * @param string $RoutingType
         * @param MailboxTypeType $MailboxType
         */
        public function __construct($_ = null, $Key = null, $Name = null, $RoutingType = null, $MailboxType = null)
        {
                $this->_ = $_;
                $this->Key = $Key;
                $this->Name = $Name;
                $this->RoutingType = $RoutingType;
                $this->MailboxType = $MailboxType;
        }

        /**
         * @return string
         */
        public function get_()
        {
                return $this->_;
        }

        /**
         * @param string $_
         * @return \UUP\Exchange\Types\EmailAddressDictionaryEntryType
         */
        public function set_($_)
        {
                $this->_ = $_;
                return $this;
        }

        /**
         * @return EmailAddressKeyType
         */
        public function getKey()
        {
                return $this->Key;
        }

        /**
         * @param EmailAddressKeyType $Key
         * @return \UUP\Exchange\Types\EmailAddressDictionaryEntryType
         */
        public function setKey($Key)
        {
                $this->Key = $Key;
                return $this;
        }

        /**
         * @return string
         */
        public function getName()
        {
                return $this->Name;
        }

        /**
         * @param string $Name
         * @return \UUP\Exchange\Types\EmailAddressDictionaryEntryType
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

        /**
         * @return string
         */
        public function getRoutingType()
        {
                return $this->RoutingType;
        }

        /**
         * @param string $RoutingType
         * @return \UUP\Exchange\Types\EmailAddressDictionaryEntryType
         */
        public function setRoutingType($RoutingType)
        {
                $this->RoutingType = $RoutingType;
                return $this;
        }

        /**
         * @return MailboxTypeType
         */
        public function getMailboxType()
        {
                return $this->MailboxType;
        }

        /**
         * @param MailboxTypeType $MailboxType
         * @return \UUP\Exchange\Types\EmailAddressDictionaryEntryType
         */
        public function setMailboxType($MailboxType)
        {
                $this->MailboxType = $MailboxType;
                return $this;
        }

}
