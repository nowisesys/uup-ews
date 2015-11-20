<?php

namespace UUP\Exchange\Types;

class BaseObjectChangedEventType extends BaseNotificationEventType
{

        /**
         * @var \DateTime $TimeStamp
         */
        protected $TimeStamp = null;
        /**
         * @var FolderIdType $FolderId
         */
        protected $FolderId = null;
        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;
        /**
         * @var FolderIdType $ParentFolderId
         */
        protected $ParentFolderId = null;

        /**
         * @param \DateTime $TimeStamp
         * @param FolderIdType $FolderId
         * @param ItemIdType $ItemId
         * @param FolderIdType $ParentFolderId
         */
        public function __construct(\DateTime $TimeStamp = null, $FolderId = null, $ItemId = null, $ParentFolderId = null)
        {
                parent::__construct();
                $this->TimeStamp = $TimeStamp ? $TimeStamp->format(\DateTime::ATOM) : null;
                $this->FolderId = $FolderId;
                $this->ItemId = $ItemId;
                $this->ParentFolderId = $ParentFolderId;
        }

        /**
         * @return \DateTime
         */
        public function getTimeStamp()
        {
                if ($this->TimeStamp == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->TimeStamp);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $TimeStamp
         * @return \UUP\Exchange\Types\BaseObjectChangedEventType
         */
        public function setTimeStamp(\DateTime $TimeStamp)
        {
                $this->TimeStamp = $TimeStamp->format(\DateTime::ATOM);
                return $this;
        }

        /**
         * @return FolderIdType
         */
        public function getFolderId()
        {
                return $this->FolderId;
        }

        /**
         * @param FolderIdType $FolderId
         * @return \UUP\Exchange\Types\BaseObjectChangedEventType
         */
        public function setFolderId($FolderId)
        {
                $this->FolderId = $FolderId;
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
         * @return \UUP\Exchange\Types\BaseObjectChangedEventType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

        /**
         * @return FolderIdType
         */
        public function getParentFolderId()
        {
                return $this->ParentFolderId;
        }

        /**
         * @param FolderIdType $ParentFolderId
         * @return \UUP\Exchange\Types\BaseObjectChangedEventType
         */
        public function setParentFolderId($ParentFolderId)
        {
                $this->ParentFolderId = $ParentFolderId;
                return $this;
        }

}
