<?php

namespace UUP\Exchange\Types;

class ReferenceItemResponseType
{

        /**
         * @var ItemIdType $ReferenceItemId
         */
        protected $ReferenceItemId = null;
        /**
         * @var string $ObjectName
         */
        protected $ObjectName = null;

        /**
         * @param string $ObjectName
         */
        public function __construct($ObjectName = null)
        {
                $this->ObjectName = $ObjectName;
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
         * @return \UUP\Exchange\Types\ReferenceItemResponseType
         */
        public function setReferenceItemId($ReferenceItemId)
        {
                $this->ReferenceItemId = $ReferenceItemId;
                return $this;
        }

        /**
         * @return string
         */
        public function getObjectName()
        {
                return $this->ObjectName;
        }

        /**
         * @param string $ObjectName
         * @return \UUP\Exchange\Types\ReferenceItemResponseType
         */
        public function setObjectName($ObjectName)
        {
                $this->ObjectName = $ObjectName;
                return $this;
        }

}
