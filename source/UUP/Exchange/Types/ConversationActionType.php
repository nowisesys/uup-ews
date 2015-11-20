<?php

namespace UUP\Exchange\Types;

class ConversationActionType
{

        /**
         * @var ConversationActionTypeType $Action
         */
        protected $Action = null;
        /**
         * @var ItemIdType $ConversationId
         */
        protected $ConversationId = null;
        /**
         * @var TargetFolderIdType $ContextFolderId
         */
        protected $ContextFolderId = null;
        /**
         * @var \DateTime $ConversationLastSyncTime
         */
        protected $ConversationLastSyncTime = null;
        /**
         * @var boolean $ProcessRightAway
         */
        protected $ProcessRightAway = null;
        /**
         * @var TargetFolderIdType $DestinationFolderId
         */
        protected $DestinationFolderId = null;
        /**
         * @var ArrayOfStringsType $Categories
         */
        protected $Categories = null;
        /**
         * @var boolean $EnableAlwaysDelete
         */
        protected $EnableAlwaysDelete = null;
        /**
         * @var boolean $IsRead
         */
        protected $IsRead = null;
        /**
         * @var DisposalType $DeleteType
         */
        protected $DeleteType = null;

        /**
         * @param ConversationActionTypeType $Action
         * @param ItemIdType $ConversationId
         */
        public function __construct($Action = null, $ConversationId = null)
        {
                $this->Action = $Action;
                $this->ConversationId = $ConversationId;
        }

        /**
         * @return ConversationActionTypeType
         */
        public function getAction()
        {
                return $this->Action;
        }

        /**
         * @param ConversationActionTypeType $Action
         * @return \UUP\Exchange\Types\ConversationActionType
         */
        public function setAction($Action)
        {
                $this->Action = $Action;
                return $this;
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
         * @return \UUP\Exchange\Types\ConversationActionType
         */
        public function setConversationId($ConversationId)
        {
                $this->ConversationId = $ConversationId;
                return $this;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getContextFolderId()
        {
                return $this->ContextFolderId;
        }

        /**
         * @param TargetFolderIdType $ContextFolderId
         * @return \UUP\Exchange\Types\ConversationActionType
         */
        public function setContextFolderId($ContextFolderId)
        {
                $this->ContextFolderId = $ContextFolderId;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getConversationLastSyncTime()
        {
                if ($this->ConversationLastSyncTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->ConversationLastSyncTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $ConversationLastSyncTime
         * @return \UUP\Exchange\Types\ConversationActionType
         */
        public function setConversationLastSyncTime(\DateTime $ConversationLastSyncTime = null)
        {
                if ($ConversationLastSyncTime == null) {
                        $this->ConversationLastSyncTime = null;
                } else {
                        $this->ConversationLastSyncTime = $ConversationLastSyncTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return boolean
         */
        public function getProcessRightAway()
        {
                return $this->ProcessRightAway;
        }

        /**
         * @param boolean $ProcessRightAway
         * @return \UUP\Exchange\Types\ConversationActionType
         */
        public function setProcessRightAway($ProcessRightAway)
        {
                $this->ProcessRightAway = $ProcessRightAway;
                return $this;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getDestinationFolderId()
        {
                return $this->DestinationFolderId;
        }

        /**
         * @param TargetFolderIdType $DestinationFolderId
         * @return \UUP\Exchange\Types\ConversationActionType
         */
        public function setDestinationFolderId($DestinationFolderId)
        {
                $this->DestinationFolderId = $DestinationFolderId;
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
         * @return \UUP\Exchange\Types\ConversationActionType
         */
        public function setCategories($Categories)
        {
                $this->Categories = $Categories;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getEnableAlwaysDelete()
        {
                return $this->EnableAlwaysDelete;
        }

        /**
         * @param boolean $EnableAlwaysDelete
         * @return \UUP\Exchange\Types\ConversationActionType
         */
        public function setEnableAlwaysDelete($EnableAlwaysDelete)
        {
                $this->EnableAlwaysDelete = $EnableAlwaysDelete;
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
         * @return \UUP\Exchange\Types\ConversationActionType
         */
        public function setIsRead($IsRead)
        {
                $this->IsRead = $IsRead;
                return $this;
        }

        /**
         * @return DisposalType
         */
        public function getDeleteType()
        {
                return $this->DeleteType;
        }

        /**
         * @param DisposalType $DeleteType
         * @return \UUP\Exchange\Types\ConversationActionType
         */
        public function setDeleteType($DeleteType)
        {
                $this->DeleteType = $DeleteType;
                return $this;
        }

}
