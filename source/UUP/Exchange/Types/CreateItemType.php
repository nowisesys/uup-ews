<?php

namespace UUP\Exchange\Types;

class CreateItemType extends BaseRequestType
{

        /**
         * @var TargetFolderIdType $SavedItemFolderId
         */
        protected $SavedItemFolderId = null;
        /**
         * @var NonEmptyArrayOfAllItemsType $Items
         */
        protected $Items = null;
        /**
         * @var MessageDispositionType $MessageDisposition
         */
        protected $MessageDisposition = null;
        /**
         * @var CalendarItemCreateOrDeleteOperationType $SendMeetingInvitations
         */
        protected $SendMeetingInvitations = null;

        /**
         * @param NonEmptyArrayOfAllItemsType $Items
         * @param MessageDispositionType $MessageDisposition
         * @param CalendarItemCreateOrDeleteOperationType $SendMeetingInvitations
         */
        public function __construct($Items = null, $MessageDisposition = null, $SendMeetingInvitations = null)
        {
                $this->Items = $Items;
                $this->MessageDisposition = $MessageDisposition;
                $this->SendMeetingInvitations = $SendMeetingInvitations;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getSavedItemFolderId()
        {
                return $this->SavedItemFolderId;
        }

        /**
         * @param TargetFolderIdType $SavedItemFolderId
         * @return \UUP\Exchange\Types\CreateItemType
         */
        public function setSavedItemFolderId($SavedItemFolderId)
        {
                $this->SavedItemFolderId = $SavedItemFolderId;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfAllItemsType
         */
        public function getItems()
        {
                return $this->Items;
        }

        /**
         * @param NonEmptyArrayOfAllItemsType $Items
         * @return \UUP\Exchange\Types\CreateItemType
         */
        public function setItems($Items)
        {
                $this->Items = $Items;
                return $this;
        }

        /**
         * @return MessageDispositionType
         */
        public function getMessageDisposition()
        {
                return $this->MessageDisposition;
        }

        /**
         * @param MessageDispositionType $MessageDisposition
         * @return \UUP\Exchange\Types\CreateItemType
         */
        public function setMessageDisposition($MessageDisposition)
        {
                $this->MessageDisposition = $MessageDisposition;
                return $this;
        }

        /**
         * @return CalendarItemCreateOrDeleteOperationType
         */
        public function getSendMeetingInvitations()
        {
                return $this->SendMeetingInvitations;
        }

        /**
         * @param CalendarItemCreateOrDeleteOperationType $SendMeetingInvitations
         * @return \UUP\Exchange\Types\CreateItemType
         */
        public function setSendMeetingInvitations($SendMeetingInvitations)
        {
                $this->SendMeetingInvitations = $SendMeetingInvitations;
                return $this;
        }

}
