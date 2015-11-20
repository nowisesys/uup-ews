<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfRequestAttachmentIdsType
{

        /**
         * @var RequestAttachmentIdType $AttachmentId
         */
        protected $AttachmentId = null;

        /**
         * @param RequestAttachmentIdType $AttachmentId
         */
        public function __construct($AttachmentId = null)
        {
                $this->AttachmentId = $AttachmentId;
        }

        /**
         * @return RequestAttachmentIdType
         */
        public function getAttachmentId()
        {
                return $this->AttachmentId;
        }

        /**
         * @param RequestAttachmentIdType $AttachmentId
         * @return \UUP\Exchange\Types\NonEmptyArrayOfRequestAttachmentIdsType
         */
        public function setAttachmentId($AttachmentId)
        {
                $this->AttachmentId = $AttachmentId;
                return $this;
        }

}
