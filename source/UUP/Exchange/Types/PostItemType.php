<?php

namespace UUP\Exchange\Types;

class PostItemType extends ItemType
{

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
         * @var \DateTime $PostedTime
         */
        protected $PostedTime = null;
        /**
         * @var string $References
         */
        protected $References = null;
        /**
         * @var SingleRecipientType $Sender
         */
        protected $Sender = null;

        public function __construct()
        {
                parent::__construct();
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
         * @return \UUP\Exchange\Types\PostItemType
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
         * @return \UUP\Exchange\Types\PostItemType
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
         * @return \UUP\Exchange\Types\PostItemType
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
         * @return \UUP\Exchange\Types\PostItemType
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
         * @return \UUP\Exchange\Types\PostItemType
         */
        public function setIsRead($IsRead)
        {
                $this->IsRead = $IsRead;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getPostedTime()
        {
                if ($this->PostedTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->PostedTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $PostedTime
         * @return \UUP\Exchange\Types\PostItemType
         */
        public function setPostedTime(\DateTime $PostedTime = null)
        {
                if ($PostedTime == null) {
                        $this->PostedTime = null;
                } else {
                        $this->PostedTime = $PostedTime->format(\DateTime::ATOM);
                }
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
         * @return \UUP\Exchange\Types\PostItemType
         */
        public function setReferences($References)
        {
                $this->References = $References;
                return $this;
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
         * @return \UUP\Exchange\Types\PostItemType
         */
        public function setSender($Sender)
        {
                $this->Sender = $Sender;
                return $this;
        }

}
