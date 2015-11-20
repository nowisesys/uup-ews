<?php

namespace UUP\Exchange\Types;

class AttachmentInfoResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfAttachmentsType $Attachments
         */
        protected $Attachments = null;

        /**
         * @param ResponseClassType $ResponseClass
         * @param ArrayOfAttachmentsType $Attachments
         */
        public function __construct($ResponseClass = null, $Attachments = null)
        {
                parent::__construct($ResponseClass);
                $this->Attachments = $Attachments;
        }

        /**
         * @return ArrayOfAttachmentsType
         */
        public function getAttachments()
        {
                return $this->Attachments;
        }

        /**
         * @param ArrayOfAttachmentsType $Attachments
         * @return \UUP\Exchange\Types\AttachmentInfoResponseMessageType
         */
        public function setAttachments($Attachments)
        {
                $this->Attachments = $Attachments;
                return $this;
        }

}
