<?php

namespace UUP\Exchange\Types;

class SyncFolderHierarchyResponseMessageType extends ResponseMessageType
{

        /**
         * @var string $SyncState
         */
        protected $SyncState = null;
        /**
         * @var boolean $IncludesLastFolderInRange
         */
        protected $IncludesLastFolderInRange = null;
        /**
         * @var SyncFolderHierarchyChangesType $Changes
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
         * @return \UUP\Exchange\Types\SyncFolderHierarchyResponseMessageType
         */
        public function setSyncState($SyncState)
        {
                $this->SyncState = $SyncState;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIncludesLastFolderInRange()
        {
                return $this->IncludesLastFolderInRange;
        }

        /**
         * @param boolean $IncludesLastFolderInRange
         * @return \UUP\Exchange\Types\SyncFolderHierarchyResponseMessageType
         */
        public function setIncludesLastFolderInRange($IncludesLastFolderInRange)
        {
                $this->IncludesLastFolderInRange = $IncludesLastFolderInRange;
                return $this;
        }

        /**
         * @return SyncFolderHierarchyChangesType
         */
        public function getChanges()
        {
                return $this->Changes;
        }

        /**
         * @param SyncFolderHierarchyChangesType $Changes
         * @return \UUP\Exchange\Types\SyncFolderHierarchyResponseMessageType
         */
        public function setChanges($Changes)
        {
                $this->Changes = $Changes;
                return $this;
        }

}
