<?php

namespace UUP\Exchange\Types;

class EmailAddressType extends BaseEmailAddressType
{

        /**
         * @var string $Name
         */
        protected $Name = null;
        /**
         * @var NonEmptyStringType $EmailAddress
         */
        protected $EmailAddress = null;
        /**
         * @var NonEmptyStringType $RoutingType
         */
        protected $RoutingType = null;
        /**
         * @var MailboxTypeType $MailboxType
         */
        protected $MailboxType = null;
        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;

        public function __construct()
        {
                
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
         * @return \UUP\Exchange\Types\EmailAddressType
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getEmailAddress()
        {
                return $this->EmailAddress;
        }

        /**
         * @param NonEmptyStringType $EmailAddress
         * @return \UUP\Exchange\Types\EmailAddressType
         */
        public function setEmailAddress($EmailAddress)
        {
                $this->EmailAddress = $EmailAddress;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getRoutingType()
        {
                return $this->RoutingType;
        }

        /**
         * @param NonEmptyStringType $RoutingType
         * @return \UUP\Exchange\Types\EmailAddressType
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
         * @return \UUP\Exchange\Types\EmailAddressType
         */
        public function setMailboxType($MailboxType)
        {
                $this->MailboxType = $MailboxType;
                return $this;
        }

        /**
         * @return ItemIdType
         */
        public function getItemId()
        {
                return $this->ItemId;
        }

        /**
         * @param ItemIdType $ItemId
         * @return \UUP\Exchange\Types\EmailAddressType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

}
