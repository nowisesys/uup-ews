<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfResponseObjectsType
{

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
         * @param AcceptItemType $AcceptItem
         * @param TentativelyAcceptItemType $TentativelyAcceptItem
         * @param DeclineItemType $DeclineItem
         * @param ReplyToItemType $ReplyToItem
         * @param ForwardItemType $ForwardItem
         * @param ReplyAllToItemType $ReplyAllToItem
         * @param CancelCalendarItemType $CancelCalendarItem
         * @param RemoveItemType $RemoveItem
         * @param SuppressReadReceiptType $SuppressReadReceipt
         * @param PostReplyItemType $PostReplyItem
         * @param AcceptSharingInvitationType $AcceptSharingInvitation
         */
        public function __construct($AcceptItem = null, $TentativelyAcceptItem = null, $DeclineItem = null, $ReplyToItem = null, $ForwardItem = null, $ReplyAllToItem = null, $CancelCalendarItem = null, $RemoveItem = null, $SuppressReadReceipt = null, $PostReplyItem = null, $AcceptSharingInvitation = null)
        {
                $this->AcceptItem = $AcceptItem;
                $this->TentativelyAcceptItem = $TentativelyAcceptItem;
                $this->DeclineItem = $DeclineItem;
                $this->ReplyToItem = $ReplyToItem;
                $this->ForwardItem = $ForwardItem;
                $this->ReplyAllToItem = $ReplyAllToItem;
                $this->CancelCalendarItem = $CancelCalendarItem;
                $this->RemoveItem = $RemoveItem;
                $this->SuppressReadReceipt = $SuppressReadReceipt;
                $this->PostReplyItem = $PostReplyItem;
                $this->AcceptSharingInvitation = $AcceptSharingInvitation;
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
         */
        public function setDeclineItem($DeclineItem)
        {
                $this->DeclineItem = $DeclineItem;
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
         */
        public function setReplyAllToItem($ReplyAllToItem)
        {
                $this->ReplyAllToItem = $ReplyAllToItem;
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
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
         * @return \UUP\Exchange\Types\NonEmptyArrayOfResponseObjectsType
         */
        public function setAcceptSharingInvitation($AcceptSharingInvitation)
        {
                $this->AcceptSharingInvitation = $AcceptSharingInvitation;
                return $this;
        }

}
