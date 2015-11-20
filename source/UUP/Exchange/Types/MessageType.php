<?php

namespace UUP\Exchange\Types;

class MessageType extends ItemType
{

        /**
         * @var SingleRecipientType $Sender
         */
        protected $Sender = null;
        /**
         * @var ArrayOfRecipientsType $ToRecipients
         */
        protected $ToRecipients = null;
        /**
         * @var ArrayOfRecipientsType $CcRecipients
         */
        protected $CcRecipients = null;
        /**
         * @var ArrayOfRecipientsType $BccRecipients
         */
        protected $BccRecipients = null;
        /**
         * @var boolean $IsReadReceiptRequested
         */
        protected $IsReadReceiptRequested = null;
        /**
         * @var boolean $IsDeliveryReceiptRequested
         */
        protected $IsDeliveryReceiptRequested = null;
        /**
         * @var base64Binary $ConversationIndex
         */
        protected $ConversationIndex = null;
        /**
         * @var string $ConversationTopic
         */
        protected $ConversationTopic = null;
        /**
         * @var SingleRecipientType $From
         */
        protected $From = null;
        /**
         * @var string $InternetMessageId
         */
        protected $InternetMessageId = null;
        /**
         * @var boolean $IsRead
         */
        protected $IsRead = null;
        /**
         * @var boolean $IsResponseRequested
         */
        protected $IsResponseRequested = null;
        /**
         * @var string $References
         */
        protected $References = null;
        /**
         * @var ArrayOfRecipientsType $ReplyTo
         */
        protected $ReplyTo = null;
        /**
         * @var SingleRecipientType $ReceivedBy
         */
        protected $ReceivedBy = null;
        /**
         * @var SingleRecipientType $ReceivedRepresenting
         */
        protected $ReceivedRepresenting = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return SingleRecipientType
         */
        public function getSender()
        {
                return $this->Sender;
        }

        /**
         * @param SingleRecipientType $Sender
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setSender($Sender)
        {
                $this->Sender = $Sender;
                return $this;
        }

        /**
         * @return ArrayOfRecipientsType
         */
        public function getToRecipients()
        {
                return $this->ToRecipients;
        }

        /**
         * @param ArrayOfRecipientsType $ToRecipients
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setToRecipients($ToRecipients)
        {
                $this->ToRecipients = $ToRecipients;
                return $this;
        }

        /**
         * @return ArrayOfRecipientsType
         */
        public function getCcRecipients()
        {
                return $this->CcRecipients;
        }

        /**
         * @param ArrayOfRecipientsType $CcRecipients
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setCcRecipients($CcRecipients)
        {
                $this->CcRecipients = $CcRecipients;
                return $this;
        }

        /**
         * @return ArrayOfRecipientsType
         */
        public function getBccRecipients()
        {
                return $this->BccRecipients;
        }

        /**
         * @param ArrayOfRecipientsType $BccRecipients
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setBccRecipients($BccRecipients)
        {
                $this->BccRecipients = $BccRecipients;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsReadReceiptRequested()
        {
                return $this->IsReadReceiptRequested;
        }

        /**
         * @param boolean $IsReadReceiptRequested
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setIsReadReceiptRequested($IsReadReceiptRequested)
        {
                $this->IsReadReceiptRequested = $IsReadReceiptRequested;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsDeliveryReceiptRequested()
        {
                return $this->IsDeliveryReceiptRequested;
        }

        /**
         * @param boolean $IsDeliveryReceiptRequested
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setIsDeliveryReceiptRequested($IsDeliveryReceiptRequested)
        {
                $this->IsDeliveryReceiptRequested = $IsDeliveryReceiptRequested;
                return $this;
        }

        /**
         * @return base64Binary
         */
        public function getConversationIndex()
        {
                return $this->ConversationIndex;
        }

        /**
         * @param base64Binary $ConversationIndex
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setConversationIndex($ConversationIndex)
        {
                $this->ConversationIndex = $ConversationIndex;
                return $this;
        }

        /**
         * @return string
         */
        public function getConversationTopic()
        {
                return $this->ConversationTopic;
        }

        /**
         * @param string $ConversationTopic
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setConversationTopic($ConversationTopic)
        {
                $this->ConversationTopic = $ConversationTopic;
                return $this;
        }

        /**
         * @return SingleRecipientType
         */
        public function getFrom()
        {
                return $this->From;
        }

        /**
         * @param SingleRecipientType $From
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setFrom($From)
        {
                $this->From = $From;
                return $this;
        }

        /**
         * @return string
         */
        public function getInternetMessageId()
        {
                return $this->InternetMessageId;
        }

        /**
         * @param string $InternetMessageId
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setInternetMessageId($InternetMessageId)
        {
                $this->InternetMessageId = $InternetMessageId;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsRead()
        {
                return $this->IsRead;
        }

        /**
         * @param boolean $IsRead
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setIsRead($IsRead)
        {
                $this->IsRead = $IsRead;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsResponseRequested()
        {
                return $this->IsResponseRequested;
        }

        /**
         * @param boolean $IsResponseRequested
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setIsResponseRequested($IsResponseRequested)
        {
                $this->IsResponseRequested = $IsResponseRequested;
                return $this;
        }

        /**
         * @return string
         */
        public function getReferences()
        {
                return $this->References;
        }

        /**
         * @param string $References
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setReferences($References)
        {
                $this->References = $References;
                return $this;
        }

        /**
         * @return ArrayOfRecipientsType
         */
        public function getReplyTo()
        {
                return $this->ReplyTo;
        }

        /**
         * @param ArrayOfRecipientsType $ReplyTo
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setReplyTo($ReplyTo)
        {
                $this->ReplyTo = $ReplyTo;
                return $this;
        }

        /**
         * @return SingleRecipientType
         */
        public function getReceivedBy()
        {
                return $this->ReceivedBy;
        }

        /**
         * @param SingleRecipientType $ReceivedBy
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setReceivedBy($ReceivedBy)
        {
                $this->ReceivedBy = $ReceivedBy;
                return $this;
        }

        /**
         * @return SingleRecipientType
         */
        public function getReceivedRepresenting()
        {
                return $this->ReceivedRepresenting;
        }

        /**
         * @param SingleRecipientType $ReceivedRepresenting
         * @return \UUP\Exchange\Types\MessageType
         */
        public function setReceivedRepresenting($ReceivedRepresenting)
        {
                $this->ReceivedRepresenting = $ReceivedRepresenting;
                return $this;
        }

}
