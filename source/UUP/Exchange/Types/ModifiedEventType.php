<?php

namespace UUP\Exchange\Types;

class ModifiedEventType extends BaseObjectChangedEventType
{

        /**
         * @var int $UnreadCount
         */
        protected $UnreadCount = null;

        /**
         * @param \DateTime $TimeStamp
         * @param FolderIdType $FolderId
         * @param ItemIdType $ItemId
         * @param FolderIdType $ParentFolderId
         */
        public function __construct(\DateTime $TimeStamp = null, $FolderId = null, $ItemId = null, $ParentFolderId = null)
        {
                parent::__construct($TimeStamp, $FolderId, $ItemId, $ParentFolderId);
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
         * @return \UUP\Exchange\Types\ModifiedEventType
         */
        public function setUnreadCount($UnreadCount)
        {
                $this->UnreadCount = $UnreadCount;
                return $this;
        }

}
