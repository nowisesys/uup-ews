<?php

namespace UUP\Exchange\Types;

class UpdateItemType extends BaseRequestType
{

        /**
         * @var TargetFolderIdType $SavedItemFolderId
         */
        protected $SavedItemFolderId = null;
        /**
         * @var NonEmptyArrayOfItemChangesType $ItemChanges
         */
        protected $ItemChanges = null;
        /**
         * @var ConflictResolutionType $ConflictResolution
         */
        protected $ConflictResolution = null;
        /**
         * @var MessageDispositionType $MessageDisposition
         */
        protected $MessageDisposition = null;
        /**
         * @var CalendarItemUpdateOperationType $SendMeetingInvitationsOrCancellations
         */
        protected $SendMeetingInvitationsOrCancellations = null;

        /**
         * @param NonEmptyArrayOfItemChangesType $ItemChanges
         * @param ConflictResolutionType $ConflictResolution
         * @param MessageDispositionType $MessageDisposition
         * @param CalendarItemUpdateOperationType $SendMeetingInvitationsOrCancellations
         */
        public function __construct($ItemChanges = null, $ConflictResolution = null, $MessageDisposition = null, $SendMeetingInvitationsOrCancellations = null)
        {
                $this->ItemChanges = $ItemChanges;
                $this->ConflictResolution = $ConflictResolution;
                $this->MessageDisposition = $MessageDisposition;
                $this->SendMeetingInvitationsOrCancellations = $SendMeetingInvitationsOrCancellations;
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
         * @return \UUP\Exchange\Types\UpdateItemType
         */
        public function setSavedItemFolderId($SavedItemFolderId)
        {
                $this->SavedItemFolderId = $SavedItemFolderId;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfItemChangesType
         */
        public function getItemChanges()
        {
                return $this->ItemChanges;
        }

        /**
         * @param NonEmptyArrayOfItemChangesType $ItemChanges
         * @return \UUP\Exchange\Types\UpdateItemType
         */
        public function setItemChanges($ItemChanges)
        {
                $this->ItemChanges = $ItemChanges;
                return $this;
        }

        /**
         * @return ConflictResolutionType
         */
        public function getConflictResolution()
        {
                return $this->ConflictResolution;
        }

        /**
         * @param ConflictResolutionType $ConflictResolution
         * @return \UUP\Exchange\Types\UpdateItemType
         */
        public function setConflictResolution($ConflictResolution)
        {
                $this->ConflictResolution = $ConflictResolution;
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
         * @return \UUP\Exchange\Types\UpdateItemType
         */
        public function setMessageDisposition($MessageDisposition)
        {
                $this->MessageDisposition = $MessageDisposition;
                return $this;
        }

        /**
         * @return CalendarItemUpdateOperationType
         */
        public function getSendMeetingInvitationsOrCancellations()
        {
                return $this->SendMeetingInvitationsOrCancellations;
        }

        /**
         * @param CalendarItemUpdateOperationType $SendMeetingInvitationsOrCancellations
         * @return \UUP\Exchange\Types\UpdateItemType
         */
        public function setSendMeetingInvitationsOrCancellations($SendMeetingInvitationsOrCancellations)
        {
                $this->SendMeetingInvitationsOrCancellations = $SendMeetingInvitationsOrCancellations;
                return $this;
        }

}
