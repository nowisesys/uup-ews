<?php

namespace UUP\Exchange\Types;

class CreateAttachmentType extends BaseRequestType
{

        /**
         * @var ItemIdType $ParentItemId
         */
        protected $ParentItemId = null;
        /**
         * @var NonEmptyArrayOfAttachmentsType $Attachments
         */
        protected $Attachments = null;

        /**
         * @param ItemIdType $ParentItemId
         * @param NonEmptyArrayOfAttachmentsType $Attachments
         */
        public function __construct($ParentItemId = null, $Attachments = null)
        {
                $this->ParentItemId = $ParentItemId;
                $this->Attachments = $Attachments;
        }

        /**
         * @return ItemIdType
         */
        public function getParentItemId()
        {
                return $this->ParentItemId;
        }

        /**
         * @param ItemIdType $ParentItemId
         * @return \UUP\Exchange\Types\CreateAttachmentType
         */
        public function setParentItemId($ParentItemId)
        {
                $this->ParentItemId = $ParentItemId;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfAttachmentsType
         */
        public function getAttachments()
        {
                return $this->Attachments;
        }

        /**
         * @param NonEmptyArrayOfAttachmentsType $Attachments
         * @return \UUP\Exchange\Types\CreateAttachmentType
         */
        public function setAttachments($Attachments)
        {
                $this->Attachments = $Attachments;
                return $this;
        }

}
