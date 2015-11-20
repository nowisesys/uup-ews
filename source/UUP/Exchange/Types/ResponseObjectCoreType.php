<?php

namespace UUP\Exchange\Types;

abstract class ResponseObjectCoreType extends MessageType
{

        /**
         * @var ItemIdType $ReferenceItemId
         */
        protected $ReferenceItemId = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return ItemIdType
         */
        public function getReferenceItemId()
        {
                return $this->ReferenceItemId;
        }

        /**
         * @param ItemIdType $ReferenceItemId
         * @return \UUP\Exchange\Types\ResponseObjectCoreType
         */
        public function setReferenceItemId($ReferenceItemId)
        {
                $this->ReferenceItemId = $ReferenceItemId;
                return $this;
        }

}
