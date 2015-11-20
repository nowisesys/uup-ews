<?php

namespace UUP\Exchange\Types;

class AttachmentIdType extends RequestAttachmentIdType
{

        /**
         * @var string $RootItemId
         */
        protected $RootItemId = null;
        /**
         * @var string $RootItemChangeKey
         */
        protected $RootItemChangeKey = null;

        /**
         * @param string $Id
         * @param string $RootItemId
         * @param string $RootItemChangeKey
         */
        public function __construct($Id = null, $RootItemId = null, $RootItemChangeKey = null)
        {
                parent::__construct($Id);
                $this->RootItemId = $RootItemId;
                $this->RootItemChangeKey = $RootItemChangeKey;
        }

        /**
         * @return string
         */
        public function getRootItemId()
        {
                return $this->RootItemId;
        }

        /**
         * @param string $RootItemId
         * @return \UUP\Exchange\Types\AttachmentIdType
         */
        public function setRootItemId($RootItemId)
        {
                $this->RootItemId = $RootItemId;
                return $this;
        }

        /**
         * @return string
         */
        public function getRootItemChangeKey()
        {
                return $this->RootItemChangeKey;
        }

        /**
         * @param string $RootItemChangeKey
         * @return \UUP\Exchange\Types\AttachmentIdType
         */
        public function setRootItemChangeKey($RootItemChangeKey)
        {
                $this->RootItemChangeKey = $RootItemChangeKey;
                return $this;
        }

}
