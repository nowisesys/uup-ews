<?php

namespace UUP\Exchange\Types;

class ConversationType
{

        /**
         * @var ItemIdType $ConversationId
         */
        protected $ConversationId = null;
        /**
         * @var string $ConversationTopic
         */
        protected $ConversationTopic = null;
        /**
         * @var ArrayOfStringsType $UniqueRecipients
         */
        protected $UniqueRecipients = null;
        /**
         * @var ArrayOfStringsType $GlobalUniqueRecipients
         */
        protected $GlobalUniqueRecipients = null;
        /**
         * @var ArrayOfStringsType $UniqueUnreadSenders
         */
        protected $UniqueUnreadSenders = null;
        /**
         * @var ArrayOfStringsType $GlobalUniqueUnreadSenders
         */
        protected $GlobalUniqueUnreadSenders = null;
        /**
         * @var ArrayOfStringsType $UniqueSenders
         */
        protected $UniqueSenders = null;
        /**
         * @var ArrayOfStringsType $GlobalUniqueSenders
         */
        protected $GlobalUniqueSenders = null;
        /**
         * @var \DateTime $LastDeliveryTime
         */
        protected $LastDeliveryTime = null;
        /**
         * @var \DateTime $GlobalLastDeliveryTime
         */
        protected $GlobalLastDeliveryTime = null;
        /**
         * @var ArrayOfStringsType $Categories
         */
        protected $Categories = null;
        /**
         * @var ArrayOfStringsType $GlobalCategories
         */
        protected $GlobalCategories = null;
        /**
         * @var FlagStatusType $FlagStatus
         */
        protected $FlagStatus = null;
        /**
         * @var FlagStatusType $GlobalFlagStatus
         */
        protected $GlobalFlagStatus = null;
        /**
         * @var boolean $HasAttachments
         */
        protected $HasAttachments = null;
        /**
         * @var boolean $GlobalHasAttachments
         */
        protected $GlobalHasAttachments = null;
        /**
         * @var int $MessageCount
         */
        protected $MessageCount = null;
        /**
         * @var int $GlobalMessageCount
         */
        protected $GlobalMessageCount = null;
        /**
         * @var int $UnreadCount
         */
        protected $UnreadCount = null;
        /**
         * @var int $GlobalUnreadCount
         */
        protected $GlobalUnreadCount = null;
        /**
         * @var int $Size
         */
        protected $Size = null;
        /**
         * @var int $GlobalSize
         */
        protected $GlobalSize = null;
        /**
         * @var ArrayOfItemClassType $ItemClasses
         */
        protected $ItemClasses = null;
        /**
         * @var ArrayOfItemClassType $GlobalItemClasses
         */
        protected $GlobalItemClasses = null;
        /**
         * @var ImportanceChoicesType $Importance
         */
        protected $Importance = null;
        /**
         * @var ImportanceChoicesType $GlobalImportance
         */
        protected $GlobalImportance = null;
        /**
         * @var NonEmptyArrayOfBaseItemIdsType $ItemIds
         */
        protected $ItemIds = null;
        /**
         * @var NonEmptyArrayOfBaseItemIdsType $GlobalItemIds
         */
        protected $GlobalItemIds = null;

        public function __construct()
        {
                
        }

        /**
         * @return ItemIdType
         */
        public function getConversationId()
        {
                return $this->ConversationId;
        }

        /**
         * @param ItemIdType $ConversationId
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setConversationId($ConversationId)
        {
                $this->ConversationId = $ConversationId;
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
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setConversationTopic($ConversationTopic)
        {
                $this->ConversationTopic = $ConversationTopic;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getUniqueRecipients()
        {
                return $this->UniqueRecipients;
        }

        /**
         * @param ArrayOfStringsType $UniqueRecipients
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setUniqueRecipients($UniqueRecipients)
        {
                $this->UniqueRecipients = $UniqueRecipients;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getGlobalUniqueRecipients()
        {
                return $this->GlobalUniqueRecipients;
        }

        /**
         * @param ArrayOfStringsType $GlobalUniqueRecipients
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalUniqueRecipients($GlobalUniqueRecipients)
        {
                $this->GlobalUniqueRecipients = $GlobalUniqueRecipients;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getUniqueUnreadSenders()
        {
                return $this->UniqueUnreadSenders;
        }

        /**
         * @param ArrayOfStringsType $UniqueUnreadSenders
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setUniqueUnreadSenders($UniqueUnreadSenders)
        {
                $this->UniqueUnreadSenders = $UniqueUnreadSenders;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getGlobalUniqueUnreadSenders()
        {
                return $this->GlobalUniqueUnreadSenders;
        }

        /**
         * @param ArrayOfStringsType $GlobalUniqueUnreadSenders
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalUniqueUnreadSenders($GlobalUniqueUnreadSenders)
        {
                $this->GlobalUniqueUnreadSenders = $GlobalUniqueUnreadSenders;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getUniqueSenders()
        {
                return $this->UniqueSenders;
        }

        /**
         * @param ArrayOfStringsType $UniqueSenders
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setUniqueSenders($UniqueSenders)
        {
                $this->UniqueSenders = $UniqueSenders;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getGlobalUniqueSenders()
        {
                return $this->GlobalUniqueSenders;
        }

        /**
         * @param ArrayOfStringsType $GlobalUniqueSenders
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalUniqueSenders($GlobalUniqueSenders)
        {
                $this->GlobalUniqueSenders = $GlobalUniqueSenders;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getLastDeliveryTime()
        {
                if ($this->LastDeliveryTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->LastDeliveryTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $LastDeliveryTime
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setLastDeliveryTime(\DateTime $LastDeliveryTime = null)
        {
                if ($LastDeliveryTime == null) {
                        $this->LastDeliveryTime = null;
                } else {
                        $this->LastDeliveryTime = $LastDeliveryTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getGlobalLastDeliveryTime()
        {
                if ($this->GlobalLastDeliveryTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->GlobalLastDeliveryTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $GlobalLastDeliveryTime
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalLastDeliveryTime(\DateTime $GlobalLastDeliveryTime = null)
        {
                if ($GlobalLastDeliveryTime == null) {
                        $this->GlobalLastDeliveryTime = null;
                } else {
                        $this->GlobalLastDeliveryTime = $GlobalLastDeliveryTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getCategories()
        {
                return $this->Categories;
        }

        /**
         * @param ArrayOfStringsType $Categories
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setCategories($Categories)
        {
                $this->Categories = $Categories;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getGlobalCategories()
        {
                return $this->GlobalCategories;
        }

        /**
         * @param ArrayOfStringsType $GlobalCategories
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalCategories($GlobalCategories)
        {
                $this->GlobalCategories = $GlobalCategories;
                return $this;
        }

        /**
         * @return FlagStatusType
         */
        public function getFlagStatus()
        {
                return $this->FlagStatus;
        }

        /**
         * @param FlagStatusType $FlagStatus
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setFlagStatus($FlagStatus)
        {
                $this->FlagStatus = $FlagStatus;
                return $this;
        }

        /**
         * @return FlagStatusType
         */
        public function getGlobalFlagStatus()
        {
                return $this->GlobalFlagStatus;
        }

        /**
         * @param FlagStatusType $GlobalFlagStatus
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalFlagStatus($GlobalFlagStatus)
        {
                $this->GlobalFlagStatus = $GlobalFlagStatus;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getHasAttachments()
        {
                return $this->HasAttachments;
        }

        /**
         * @param boolean $HasAttachments
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setHasAttachments($HasAttachments)
        {
                $this->HasAttachments = $HasAttachments;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getGlobalHasAttachments()
        {
                return $this->GlobalHasAttachments;
        }

        /**
         * @param boolean $GlobalHasAttachments
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalHasAttachments($GlobalHasAttachments)
        {
                $this->GlobalHasAttachments = $GlobalHasAttachments;
                return $this;
        }

        /**
         * @return int
         */
        public function getMessageCount()
        {
                return $this->MessageCount;
        }

        /**
         * @param int $MessageCount
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setMessageCount($MessageCount)
        {
                $this->MessageCount = $MessageCount;
                return $this;
        }

        /**
         * @return int
         */
        public function getGlobalMessageCount()
        {
                return $this->GlobalMessageCount;
        }

        /**
         * @param int $GlobalMessageCount
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalMessageCount($GlobalMessageCount)
        {
                $this->GlobalMessageCount = $GlobalMessageCount;
                return $this;
        }

        /**
         * @return int
         */
        public function getUnreadCount()
        {
                return $this->UnreadCount;
        }

        /**
         * @param int $UnreadCount
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setUnreadCount($UnreadCount)
        {
                $this->UnreadCount = $UnreadCount;
                return $this;
        }

        /**
         * @return int
         */
        public function getGlobalUnreadCount()
        {
                return $this->GlobalUnreadCount;
        }

        /**
         * @param int $GlobalUnreadCount
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalUnreadCount($GlobalUnreadCount)
        {
                $this->GlobalUnreadCount = $GlobalUnreadCount;
                return $this;
        }

        /**
         * @return int
         */
        public function getSize()
        {
                return $this->Size;
        }

        /**
         * @param int $Size
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setSize($Size)
        {
                $this->Size = $Size;
                return $this;
        }

        /**
         * @return int
         */
        public function getGlobalSize()
        {
                return $this->GlobalSize;
        }

        /**
         * @param int $GlobalSize
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalSize($GlobalSize)
        {
                $this->GlobalSize = $GlobalSize;
                return $this;
        }

        /**
         * @return ArrayOfItemClassType
         */
        public function getItemClasses()
        {
                return $this->ItemClasses;
        }

        /**
         * @param ArrayOfItemClassType $ItemClasses
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setItemClasses($ItemClasses)
        {
                $this->ItemClasses = $ItemClasses;
                return $this;
        }

        /**
         * @return ArrayOfItemClassType
         */
        public function getGlobalItemClasses()
        {
                return $this->GlobalItemClasses;
        }

        /**
         * @param ArrayOfItemClassType $GlobalItemClasses
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalItemClasses($GlobalItemClasses)
        {
                $this->GlobalItemClasses = $GlobalItemClasses;
                return $this;
        }

        /**
         * @return ImportanceChoicesType
         */
        public function getImportance()
        {
                return $this->Importance;
        }

        /**
         * @param ImportanceChoicesType $Importance
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setImportance($Importance)
        {
                $this->Importance = $Importance;
                return $this;
        }

        /**
         * @return ImportanceChoicesType
         */
        public function getGlobalImportance()
        {
                return $this->GlobalImportance;
        }

        /**
         * @param ImportanceChoicesType $GlobalImportance
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalImportance($GlobalImportance)
        {
                $this->GlobalImportance = $GlobalImportance;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfBaseItemIdsType
         */
        public function getItemIds()
        {
                return $this->ItemIds;
        }

        /**
         * @param NonEmptyArrayOfBaseItemIdsType $ItemIds
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setItemIds($ItemIds)
        {
                $this->ItemIds = $ItemIds;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfBaseItemIdsType
         */
        public function getGlobalItemIds()
        {
                return $this->GlobalItemIds;
        }

        /**
         * @param NonEmptyArrayOfBaseItemIdsType $GlobalItemIds
         * @return \UUP\Exchange\Types\ConversationType
         */
        public function setGlobalItemIds($GlobalItemIds)
        {
                $this->GlobalItemIds = $GlobalItemIds;
                return $this;
        }

}
