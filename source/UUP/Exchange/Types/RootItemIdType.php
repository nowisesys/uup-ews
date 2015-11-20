<?php

namespace UUP\Exchange\Types;

class RootItemIdType extends BaseItemIdType
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
         * @param string $RootItemId
         * @param string $RootItemChangeKey
         */
        public function __construct($RootItemId = null, $RootItemChangeKey = null)
        {
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
         * @return \UUP\Exchange\Types\RootItemIdType
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
         * @return \UUP\Exchange\Types\RootItemIdType
         */
        public function setRootItemChangeKey($RootItemChangeKey)
        {
                $this->RootItemChangeKey = $RootItemChangeKey;
                return $this;
        }

}
