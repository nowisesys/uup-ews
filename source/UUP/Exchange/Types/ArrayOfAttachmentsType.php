<?php

namespace UUP\Exchange\Types;

class ArrayOfAttachmentsType
{

        /**
         * @var ItemAttachmentType $ItemAttachment
         */
        protected $ItemAttachment = null;
        /**
         * @var FileAttachmentType $FileAttachment
         */
        protected $FileAttachment = null;

        /**
         * @param ItemAttachmentType $ItemAttachment
         * @param FileAttachmentType $FileAttachment
         */
        public function __construct($ItemAttachment = null, $FileAttachment = null)
        {
                $this->ItemAttachment = $ItemAttachment;
                $this->FileAttachment = $FileAttachment;
        }

        /**
         * @return ItemAttachmentType
         */
        public function getItemAttachment()
        {
                return $this->ItemAttachment;
        }

        /**
         * @param ItemAttachmentType $ItemAttachment
         * @return \UUP\Exchange\Types\ArrayOfAttachmentsType
         */
        public function setItemAttachment($ItemAttachment)
        {
                $this->ItemAttachment = $ItemAttachment;
                return $this;
        }

        /**
         * @return FileAttachmentType
         */
        public function getFileAttachment()
        {
                return $this->FileAttachment;
        }

        /**
         * @param FileAttachmentType $FileAttachment
         * @return \UUP\Exchange\Types\ArrayOfAttachmentsType
         */
        public function setFileAttachment($FileAttachment)
        {
                $this->FileAttachment = $FileAttachment;
                return $this;
        }

}
