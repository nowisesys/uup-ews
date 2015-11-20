<?php

namespace UUP\Exchange\Types;

class AppendToItemFieldType extends ItemChangeDescriptionType
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
         * @param BasePathToElementType $Path
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
         */
        public function __construct($Path = null, $Item = null, $Message = null, $CalendarItem = null, $Contact = null, $DistributionList = null, $MeetingMessage = null, $MeetingRequest = null, $MeetingResponse = null, $MeetingCancellation = null, $Task = null, $PostItem = null)
        {
                parent::__construct($Path);
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
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
         * @return \UUP\Exchange\Types\AppendToItemFieldType
         */
        public function setPostItem($PostItem)
        {
                $this->PostItem = $PostItem;
                return $this;
        }

}
