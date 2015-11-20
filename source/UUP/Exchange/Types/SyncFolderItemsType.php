<?php

namespace UUP\Exchange\Types;

class SyncFolderItemsType extends BaseRequestType
{

        /**
         * @var ItemResponseShapeType $ItemShape
         */
        protected $ItemShape = null;
        /**
         * @var TargetFolderIdType $SyncFolderId
         */
        protected $SyncFolderId = null;
        /**
         * @var string $SyncState
         */
        protected $SyncState = null;
        /**
         * @var ArrayOfBaseItemIdsType $Ignore
         */
        protected $Ignore = null;
        /**
         * @var MaxSyncChangesReturnedType $MaxChangesReturned
         */
        protected $MaxChangesReturned = null;
        /**
         * @var SyncFolderItemsScopeType $SyncScope
         */
        protected $SyncScope = null;

        /**
         * @param ItemResponseShapeType $ItemShape
         * @param TargetFolderIdType $SyncFolderId
         * @param MaxSyncChangesReturnedType $MaxChangesReturned
         */
        public function __construct($ItemShape = null, $SyncFolderId = null, $MaxChangesReturned = null)
        {
                $this->ItemShape = $ItemShape;
                $this->SyncFolderId = $SyncFolderId;
                $this->MaxChangesReturned = $MaxChangesReturned;
        }

        /**
         * @return ItemResponseShapeType
         */
        public function getItemShape()
        {
                return $this->ItemShape;
        }

        /**
         * @param ItemResponseShapeType $ItemShape
         * @return \UUP\Exchange\Types\SyncFolderItemsType
         */
        public function setItemShape($ItemShape)
        {
                $this->ItemShape = $ItemShape;
                return $this;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getSyncFolderId()
        {
                return $this->SyncFolderId;
        }

        /**
         * @param TargetFolderIdType $SyncFolderId
         * @return \UUP\Exchange\Types\SyncFolderItemsType
         */
        public function setSyncFolderId($SyncFolderId)
        {
                $this->SyncFolderId = $SyncFolderId;
                return $this;
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
         * @return \UUP\Exchange\Types\SyncFolderItemsType
         */
        public function setSyncState($SyncState)
        {
                $this->SyncState = $SyncState;
                return $this;
        }

        /**
         * @return ArrayOfBaseItemIdsType
         */
        public function getIgnore()
        {
                return $this->Ignore;
        }

        /**
         * @param ArrayOfBaseItemIdsType $Ignore
         * @return \UUP\Exchange\Types\SyncFolderItemsType
         */
        public function setIgnore($Ignore)
        {
                $this->Ignore = $Ignore;
                return $this;
        }

        /**
         * @return MaxSyncChangesReturnedType
         */
        public function getMaxChangesReturned()
        {
                return $this->MaxChangesReturned;
        }

        /**
         * @param MaxSyncChangesReturnedType $MaxChangesReturned
         * @return \UUP\Exchange\Types\SyncFolderItemsType
         */
        public function setMaxChangesReturned($MaxChangesReturned)
        {
                $this->MaxChangesReturned = $MaxChangesReturned;
                return $this;
        }

        /**
         * @return SyncFolderItemsScopeType
         */
        public function getSyncScope()
        {
                return $this->SyncScope;
        }

        /**
         * @param SyncFolderItemsScopeType $SyncScope
         * @return \UUP\Exchange\Types\SyncFolderItemsType
         */
        public function setSyncScope($SyncScope)
        {
                $this->SyncScope = $SyncScope;
                return $this;
        }

}
