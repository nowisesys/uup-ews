<?php

namespace UUP\Exchange\Types;

class GetAttachmentType extends BaseRequestType
{

        /**
         * @var AttachmentResponseShapeType $AttachmentShape
         */
        protected $AttachmentShape = null;
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
         * @return AttachmentResponseShapeType
         */
        public function getAttachmentShape()
        {
                return $this->AttachmentShape;
        }

        /**
         * @param AttachmentResponseShapeType $AttachmentShape
         * @return \UUP\Exchange\Types\GetAttachmentType
         */
        public function setAttachmentShape($AttachmentShape)
        {
                $this->AttachmentShape = $AttachmentShape;
                return $this;
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
         * @return \UUP\Exchange\Types\GetAttachmentType
         */
        public function setAttachmentIds($AttachmentIds)
        {
                $this->AttachmentIds = $AttachmentIds;
                return $this;
        }

}
