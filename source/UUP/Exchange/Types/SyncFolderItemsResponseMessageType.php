<?php

namespace UUP\Exchange\Types;

class SyncFolderItemsResponseMessageType extends ResponseMessageType
{

        /**
         * @var string $SyncState
         */
        protected $SyncState = null;
        /**
         * @var boolean $IncludesLastItemInRange
         */
        protected $IncludesLastItemInRange = null;
        /**
         * @var SyncFolderItemsChangesType $Changes
         */
        protected $Changes = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return string
         */
        public function getSyncState()
        {
                return $this->SyncState;
        }

        /**
         * @param string $SyncState
         * @return \UUP\Exchange\Types\SyncFolderItemsResponseMessageType
         */
        public function setSyncState($SyncState)
        {
                $this->SyncState = $SyncState;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIncludesLastItemInRange()
        {
                return $this->IncludesLastItemInRange;
        }

        /**
         * @param boolean $IncludesLastItemInRange
         * @return \UUP\Exchange\Types\SyncFolderItemsResponseMessageType
         */
        public function setIncludesLastItemInRange($IncludesLastItemInRange)
        {
                $this->IncludesLastItemInRange = $IncludesLastItemInRange;
                return $this;
        }

        /**
         * @return SyncFolderItemsChangesType
         */
        public function getChanges()
        {
                return $this->Changes;
        }

        /**
         * @param SyncFolderItemsChangesType $Changes
         * @return \UUP\Exchange\Types\SyncFolderItemsResponseMessageType
         */
        public function setChanges($Changes)
        {
                $this->Changes = $Changes;
                return $this;
        }

}
