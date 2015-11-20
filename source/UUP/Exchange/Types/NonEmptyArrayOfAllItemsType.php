<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfAllItemsType
{

        /**
         * @var ItemType $Item
         */
        protected $Item = null;
        /**
         * @var MessageType $Message
         */
        protected $Message = null;
        /**
         * @var CalendarItemType $CalendarItem
         */
        protected $CalendarItem = null;
        /**
         * @var ContactItemType $Contact
         */
        protected $Contact = null;
        /**
         * @var DistributionListType $DistributionList
         */
        protected $DistributionList = null;
        /**
         * @var MeetingMessageType $MeetingMessage
         */
        protected $MeetingMessage = null;
        /**
         * @var MeetingRequestMessageType $MeetingRequest
         */
        protected $MeetingRequest = null;
        /**
         * @var MeetingResponseMessageType $MeetingResponse
         */
        protected $MeetingResponse = null;
        /**
         * @var MeetingCancellationMessageType $MeetingCancellation
         */
        protected $MeetingCancellation = null;
        /**
         * @var TaskType $Task
         */
        protected $Task = null;
        /**
         * @var PostItemType $PostItem
         */
        protected $PostItem = null;
        /**
         * @var ReplyToItemType $ReplyToItem
         */
        protected $ReplyToItem = null;
        /**
         * @var ForwardItemType $ForwardItem
         */
        protected $ForwardItem = null;
        /**
         * @var ReplyAllToItemType $ReplyAllToItem
         */
        protected $ReplyAllToItem = null;
        /**
         * @var AcceptItemType $AcceptItem
         */
        protected $AcceptItem = null;
        /**
         * @var TentativelyAcceptItemType $TentativelyAcceptItem
         */
        protected $TentativelyAcceptItem = null;
        /**
         * @var DeclineItemType $DeclineItem
         */
        protected $DeclineItem = null;
        /**
         * @var CancelCalendarItemType $CancelCalendarItem
         */
        protected $CancelCalendarItem = null;
        /**
         * @var RemoveItemType $RemoveItem
         */
        protected $RemoveItem = null;
        /**
         * @var SuppressReadReceiptType $SuppressReadReceipt
         */
        protected $SuppressReadReceipt = null;
        /**
         * @var PostReplyItemType $PostReplyItem
         */
        protected $PostReplyItem = null;
        /**
         * @var AcceptSharingInvitationType $AcceptSharingInvitation
         */
        protected $AcceptSharingInvitation = null;

        /**
         * @param ItemType $Item
         * @param MessageType $Message
         * @param CalendarItemType $CalendarItem
         * @param ContactItemType $Contact
         * @param DistributionListType $DistributionList
         * @param MeetingMessageType $MeetingMessage
         * @param MeetingRequestMessageType $MeetingRequest
         * @param MeetingResponseMessageType $MeetingResponse
         * @param MeetingCancellationMessageType $MeetingCancellation
         * @param TaskType $Task
         * @param PostItemType $PostItem
         * @param ReplyToItemType $ReplyToItem
         * @param ForwardItemType $ForwardItem
         * @param ReplyAllToItemType $ReplyAllToItem
         * @param AcceptItemType $AcceptItem
         * @param TentativelyAcceptItemType $TentativelyAcceptItem
         * @param DeclineItemType $DeclineItem
         * @param CancelCalendarItemType $CancelCalendarItem
         * @param RemoveItemType $RemoveItem
         * @param SuppressReadReceiptType $SuppressReadReceipt
         * @param PostReplyItemType $PostReplyItem
         * @param AcceptSharingInvitationType $AcceptSharingInvitation
         */
        public function __construct($Item = null, $Message = null, $CalendarItem = null, $Contact = null, $DistributionList = null, $MeetingMessage = null, $MeetingRequest = null, $MeetingResponse = null, $MeetingCancellation = null, $Task = null, $PostItem = null, $ReplyToItem = null, $ForwardItem = null, $ReplyAllToItem = null, $AcceptItem = null, $TentativelyAcceptItem = null, $DeclineItem = null, $CancelCalendarItem = null, $RemoveItem = null, $SuppressReadReceipt = null, $PostReplyItem = null, $AcceptSharingInvitation = null)
        {
                $this->Item = $Item;
                $this->Message = $Message;
                $this->CalendarItem = $CalendarItem;
                $this->Contact = $Contact;
                $this->DistributionList = $DistributionList;
                $this->MeetingMessage = $MeetingMessage;
                $this->MeetingRequest = $MeetingRequest;
                $this->MeetingResponse = $MeetingResponse;
                $this->MeetingCancellation = $MeetingCancellation;
                $this->Task = $Task;
                $this->PostItem = $PostItem;
                $this->ReplyToItem = $ReplyToItem;
                $this->ForwardItem = $ForwardItem;
                $this->ReplyAllToItem = $ReplyAllToItem;
                $this->AcceptItem = $AcceptItem;
                $this->TentativelyAcceptItem = $TentativelyAcceptItem;
                $this->DeclineItem = $DeclineItem;
                $this->CancelCalendarItem = $CancelCalendarItem;
                $this->RemoveItem = $RemoveItem;
                $this->SuppressReadReceipt = $SuppressReadReceipt;
                $this->PostReplyItem = $PostReplyItem;
                $this->AcceptSharingInvitation = $AcceptSharingInvitation;
        }

        /**
         * @return ItemType
         */
        public function getItem()
        {
                return $this->Item;
        }

        /**
         * @param ItemType $Item
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setItem($Item)
        {
                $this->Item = $Item;
                return $this;
        }

        /**
         * @return MessageType
         */
        public function getMessage()
        {
                return $this->Message;
        }

        /**
         * @param MessageType $Message
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setMessage($Message)
        {
                $this->Message = $Message;
                return $this;
        }

        /**
         * @return CalendarItemType
         */
        public function getCalendarItem()
        {
                return $this->CalendarItem;
        }

        /**
         * @param CalendarItemType $CalendarItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setCalendarItem($CalendarItem)
        {
                $this->CalendarItem = $CalendarItem;
                return $this;
        }

        /**
         * @return ContactItemType
         */
        public function getContact()
        {
                return $this->Contact;
        }

        /**
         * @param ContactItemType $Contact
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setContact($Contact)
        {
                $this->Contact = $Contact;
                return $this;
        }

        /**
         * @return DistributionListType
         */
        public function getDistributionList()
        {
                return $this->DistributionList;
        }

        /**
         * @param DistributionListType $DistributionList
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setDistributionList($DistributionList)
        {
                $this->DistributionList = $DistributionList;
                return $this;
        }

        /**
         * @return MeetingMessageType
         */
        public function getMeetingMessage()
        {
                return $this->MeetingMessage;
        }

        /**
         * @param MeetingMessageType $MeetingMessage
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setMeetingMessage($MeetingMessage)
        {
                $this->MeetingMessage = $MeetingMessage;
                return $this;
        }

        /**
         * @return MeetingRequestMessageType
         */
        public function getMeetingRequest()
        {
                return $this->MeetingRequest;
        }

        /**
         * @param MeetingRequestMessageType $MeetingRequest
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setMeetingRequest($MeetingRequest)
        {
                $this->MeetingRequest = $MeetingRequest;
                return $this;
        }

        /**
         * @return MeetingResponseMessageType
         */
        public function getMeetingResponse()
        {
                return $this->MeetingResponse;
        }

        /**
         * @param MeetingResponseMessageType $MeetingResponse
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setMeetingResponse($MeetingResponse)
        {
                $this->MeetingResponse = $MeetingResponse;
                return $this;
        }

        /**
         * @return MeetingCancellationMessageType
         */
        public function getMeetingCancellation()
        {
                return $this->MeetingCancellation;
        }

        /**
         * @param MeetingCancellationMessageType $MeetingCancellation
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setMeetingCancellation($MeetingCancellation)
        {
                $this->MeetingCancellation = $MeetingCancellation;
                return $this;
        }

        /**
         * @return TaskType
         */
        public function getTask()
        {
                return $this->Task;
        }

        /**
         * @param TaskType $Task
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setTask($Task)
        {
                $this->Task = $Task;
                return $this;
        }

        /**
         * @return PostItemType
         */
        public function getPostItem()
        {
                return $this->PostItem;
        }

        /**
         * @param PostItemType $PostItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setPostItem($PostItem)
        {
                $this->PostItem = $PostItem;
                return $this;
        }

        /**
         * @return ReplyToItemType
         */
        public function getReplyToItem()
        {
                return $this->ReplyToItem;
        }

        /**
         * @param ReplyToItemType $ReplyToItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setReplyToItem($ReplyToItem)
        {
                $this->ReplyToItem = $ReplyToItem;
                return $this;
        }

        /**
         * @return ForwardItemType
         */
        public function getForwardItem()
        {
                return $this->ForwardItem;
        }

        /**
         * @param ForwardItemType $ForwardItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setForwardItem($ForwardItem)
        {
                $this->ForwardItem = $ForwardItem;
                return $this;
        }

        /**
         * @return ReplyAllToItemType
         */
        public function getReplyAllToItem()
        {
                return $this->ReplyAllToItem;
        }

        /**
         * @param ReplyAllToItemType $ReplyAllToItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setReplyAllToItem($ReplyAllToItem)
        {
                $this->ReplyAllToItem = $ReplyAllToItem;
                return $this;
        }

        /**
         * @return AcceptItemType
         */
        public function getAcceptItem()
        {
                return $this->AcceptItem;
        }

        /**
         * @param AcceptItemType $AcceptItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setAcceptItem($AcceptItem)
        {
                $this->AcceptItem = $AcceptItem;
                return $this;
        }

        /**
         * @return TentativelyAcceptItemType
         */
        public function getTentativelyAcceptItem()
        {
                return $this->TentativelyAcceptItem;
        }

        /**
         * @param TentativelyAcceptItemType $TentativelyAcceptItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setTentativelyAcceptItem($TentativelyAcceptItem)
        {
                $this->TentativelyAcceptItem = $TentativelyAcceptItem;
                return $this;
        }

        /**
         * @return DeclineItemType
         */
        public function getDeclineItem()
        {
                return $this->DeclineItem;
        }

        /**
         * @param DeclineItemType $DeclineItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setDeclineItem($DeclineItem)
        {
                $this->DeclineItem = $DeclineItem;
                return $this;
        }

        /**
         * @return CancelCalendarItemType
         */
        public function getCancelCalendarItem()
        {
                return $this->CancelCalendarItem;
        }

        /**
         * @param CancelCalendarItemType $CancelCalendarItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setCancelCalendarItem($CancelCalendarItem)
        {
                $this->CancelCalendarItem = $CancelCalendarItem;
                return $this;
        }

        /**
         * @return RemoveItemType
         */
        public function getRemoveItem()
        {
                return $this->RemoveItem;
        }

        /**
         * @param RemoveItemType $RemoveItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setRemoveItem($RemoveItem)
        {
                $this->RemoveItem = $RemoveItem;
                return $this;
        }

        /**
         * @return SuppressReadReceiptType
         */
        public function getSuppressReadReceipt()
        {
                return $this->SuppressReadReceipt;
        }

        /**
         * @param SuppressReadReceiptType $SuppressReadReceipt
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setSuppressReadReceipt($SuppressReadReceipt)
        {
                $this->SuppressReadReceipt = $SuppressReadReceipt;
                return $this;
        }

        /**
         * @return PostReplyItemType
         */
        public function getPostReplyItem()
        {
                return $this->PostReplyItem;
        }

        /**
         * @param PostReplyItemType $PostReplyItem
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setPostReplyItem($PostReplyItem)
        {
                $this->PostReplyItem = $PostReplyItem;
                return $this;
        }

        /**
         * @return AcceptSharingInvitationType
         */
        public function getAcceptSharingInvitation()
        {
                return $this->AcceptSharingInvitation;
        }

        /**
         * @param AcceptSharingInvitationType $AcceptSharingInvitation
         * @return \UUP\Exchange\Types\NonEmptyArrayOfAllItemsType
         */
        public function setAcceptSharingInvitation($AcceptSharingInvitation)
        {
                $this->AcceptSharingInvitation = $AcceptSharingInvitation;
                return $this;
        }

}
