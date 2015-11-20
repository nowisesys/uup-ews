<?php

namespace UUP\Exchange\Types;

class MailTips
{

        /**
         * @var EmailAddressType $RecipientAddress
         */
        protected $RecipientAddress = null;
        /**
         * @var MailTipTypes $PendingMailTips
         */
        protected $PendingMailTips = null;
        /**
         * @var OutOfOfficeMailTip $OutOfOffice
         */
        protected $OutOfOffice = null;
        /**
         * @var boolean $MailboxFull
         */
        protected $MailboxFull = null;
        /**
         * @var string $CustomMailTip
         */
        protected $CustomMailTip = null;
        /**
         * @var int $TotalMemberCount
         */
        protected $TotalMemberCount = null;
        /**
         * @var int $ExternalMemberCount
         */
        protected $ExternalMemberCount = null;
        /**
         * @var int $MaxMessageSize
         */
        protected $MaxMessageSize = null;
        /**
         * @var boolean $DeliveryRestricted
         */
        protected $DeliveryRestricted = null;
        /**
         * @var boolean $IsModerated
         */
        protected $IsModerated = null;
        /**
         * @var boolean $InvalidRecipient
         */
        protected $InvalidRecipient = null;

        /**
         * @param EmailAddressType $RecipientAddress
         * @param MailTipTypes $PendingMailTips
         */
        public function __construct($RecipientAddress = null, $PendingMailTips = null)
        {
                $this->RecipientAddress = $RecipientAddress;
                $this->PendingMailTips = $PendingMailTips;
        }

        /**
         * @return EmailAddressType
         */
        public function getRecipientAddress()
        {
                return $this->RecipientAddress;
        }

        /**
         * @param EmailAddressType $RecipientAddress
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setRecipientAddress($RecipientAddress)
        {
                $this->RecipientAddress = $RecipientAddress;
                return $this;
        }

        /**
         * @return MailTipTypes
         */
        public function getPendingMailTips()
        {
                return $this->PendingMailTips;
        }

        /**
         * @param MailTipTypes $PendingMailTips
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setPendingMailTips($PendingMailTips)
        {
                $this->PendingMailTips = $PendingMailTips;
                return $this;
        }

        /**
         * @return OutOfOfficeMailTip
         */
        public function getOutOfOffice()
        {
                return $this->OutOfOffice;
        }

        /**
         * @param OutOfOfficeMailTip $OutOfOffice
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setOutOfOffice($OutOfOffice)
        {
                $this->OutOfOffice = $OutOfOffice;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getMailboxFull()
        {
                return $this->MailboxFull;
        }

        /**
         * @param boolean $MailboxFull
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setMailboxFull($MailboxFull)
        {
                $this->MailboxFull = $MailboxFull;
                return $this;
        }

        /**
         * @return string
         */
        public function getCustomMailTip()
        {
                return $this->CustomMailTip;
        }

        /**
         * @param string $CustomMailTip
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setCustomMailTip($CustomMailTip)
        {
                $this->CustomMailTip = $CustomMailTip;
                return $this;
        }

        /**
         * @return int
         */
        public function getTotalMemberCount()
        {
                return $this->TotalMemberCount;
        }

        /**
         * @param int $TotalMemberCount
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setTotalMemberCount($TotalMemberCount)
        {
                $this->TotalMemberCount = $TotalMemberCount;
                return $this;
        }

        /**
         * @return int
         */
        public function getExternalMemberCount()
        {
                return $this->ExternalMemberCount;
        }

        /**
         * @param int $ExternalMemberCount
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setExternalMemberCount($ExternalMemberCount)
        {
                $this->ExternalMemberCount = $ExternalMemberCount;
                return $this;
        }

        /**
         * @return int
         */
        public function getMaxMessageSize()
        {
                return $this->MaxMessageSize;
        }

        /**
         * @param int $MaxMessageSize
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setMaxMessageSize($MaxMessageSize)
        {
                $this->MaxMessageSize = $MaxMessageSize;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getDeliveryRestricted()
        {
                return $this->DeliveryRestricted;
        }

        /**
         * @param boolean $DeliveryRestricted
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setDeliveryRestricted($DeliveryRestricted)
        {
                $this->DeliveryRestricted = $DeliveryRestricted;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsModerated()
        {
                return $this->IsModerated;
        }

        /**
         * @param boolean $IsModerated
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setIsModerated($IsModerated)
        {
                $this->IsModerated = $IsModerated;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getInvalidRecipient()
        {
                return $this->InvalidRecipient;
        }

        /**
         * @param boolean $InvalidRecipient
         * @return \UUP\Exchange\Types\MailTips
         */
        public function setInvalidRecipient($InvalidRecipient)
        {
                $this->InvalidRecipient = $InvalidRecipient;
                return $this;
        }

}
