<?php

namespace UUP\Exchange\Types;

class StreamingSubscriptionRequestType
{

        /**
         * @var NonEmptyArrayOfBaseFolderIdsType $FolderIds
         */
        protected $FolderIds = null;
        /**
         * @var NonEmptyArrayOfNotificationEventTypesType $EventTypes
         */
        protected $EventTypes = null;
        /**
         * @var boolean $SubscribeToAllFolders
         */
        protected $SubscribeToAllFolders = null;

        /**
         * @param NonEmptyArrayOfNotificationEventTypesType $EventTypes
         * @param boolean $SubscribeToAllFolders
         */
        public function __construct($EventTypes = null, $SubscribeToAllFolders = null)
        {
                $this->EventTypes = $EventTypes;
                $this->SubscribeToAllFolders = $SubscribeToAllFolders;
        }

        /**
         * @return NonEmptyArrayOfBaseFolderIdsType
         */
        public function getFolderIds()
        {
                return $this->FolderIds;
        }

        /**
         * @param NonEmptyArrayOfBaseFolderIdsType $FolderIds
         * @return \UUP\Exchange\Types\StreamingSubscriptionRequestType
         */
        public function setFolderIds($FolderIds)
        {
                $this->FolderIds = $FolderIds;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfNotificationEventTypesType
         */
        public function getEventTypes()
        {
                return $this->EventTypes;
        }

        /**
         * @param NonEmptyArrayOfNotificationEventTypesType $EventTypes
         * @return \UUP\Exchange\Types\StreamingSubscriptionRequestType
         */
        public function setEventTypes($EventTypes)
        {
                $this->EventTypes = $EventTypes;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getSubscribeToAllFolders()
        {
                return $this->SubscribeToAllFolders;
        }

        /**
         * @param boolean $SubscribeToAllFolders
         * @return \UUP\Exchange\Types\StreamingSubscriptionRequestType
         */
        public function setSubscribeToAllFolders($SubscribeToAllFolders)
        {
                $this->SubscribeToAllFolders = $SubscribeToAllFolders;
                return $this;
        }

}
