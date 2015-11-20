<?php

namespace UUP\Exchange\Types;

class DeleteAttachmentResponseMessageType extends ResponseMessageType
{

        /**
         * @var RootItemIdType $RootItemId
         */
        protected $RootItemId = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return RootItemIdType
         */
        public function getRootItemId()
        {
                return $this->RootItemId;
        }

        /**
         * @param RootItemIdType $RootItemId
         * @return \UUP\Exchange\Types\DeleteAttachmentResponseMessageType
         */
        public function setRootItemId($RootItemId)
        {
                $this->RootItemId = $RootItemId;
                return $this;
        }

}
