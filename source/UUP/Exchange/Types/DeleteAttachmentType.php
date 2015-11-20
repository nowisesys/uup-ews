<?php

namespace UUP\Exchange\Types;

class DeleteAttachmentType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfRequestAttachmentIdsType $AttachmentIds
         */
        protected $AttachmentIds = null;

        /**
         * @param NonEmptyArrayOfRequestAttachmentIdsType $AttachmentIds
         */
        public function __construct($AttachmentIds = null)
        {
                $this->AttachmentIds = $AttachmentIds;
        }

        /**
         * @return NonEmptyArrayOfRequestAttachmentIdsType
         */
        public function getAttachmentIds()
        {
                return $this->AttachmentIds;
        }

        /**
         * @param NonEmptyArrayOfRequestAttachmentIdsType $AttachmentIds
         * @return \UUP\Exchange\Types\DeleteAttachmentType
         */
        public function setAttachmentIds($AttachmentIds)
        {
                $this->AttachmentIds = $AttachmentIds;
                return $this;
        }

}
