<?php

namespace UUP\Exchange\Types;

class SyncFolderItemsChangesType
{

        /**
         * @var SyncFolderItemsCreateOrUpdateType $Create
         */
        protected $Create = null;
        /**
         * @var SyncFolderItemsCreateOrUpdateType $Update
         */
        protected $Update = null;
        /**
         * @var SyncFolderItemsDeleteType $Delete
         */
        protected $Delete = null;
        /**
         * @var SyncFolderItemsReadFlagType $ReadFlagChange
         */
        protected $ReadFlagChange = null;

        /**
         * @param SyncFolderItemsCreateOrUpdateType $Create
         * @param SyncFolderItemsCreateOrUpdateType $Update
         * @param SyncFolderItemsDeleteType $Delete
         * @param SyncFolderItemsReadFlagType $ReadFlagChange
         */
        public function __construct($Create = null, $Update = null, $Delete = null, $ReadFlagChange = null)
        {
                $this->Create = $Create;
                $this->Update = $Update;
                $this->Delete = $Delete;
                $this->ReadFlagChange = $ReadFlagChange;
        }

        /**
         * @return SyncFolderItemsCreateOrUpdateType
         */
        public function getCreate()
        {
                return $this->Create;
        }

        /**
         * @param SyncFolderItemsCreateOrUpdateType $Create
         * @return \UUP\Exchange\Types\SyncFolderItemsChangesType
         */
        public function setCreate($Create)
        {
                $this->Create = $Create;
                return $this;
        }

        /**
         * @return SyncFolderItemsCreateOrUpdateType
         */
        public function getUpdate()
        {
                return $this->Update;
        }

        /**
         * @param SyncFolderItemsCreateOrUpdateType $Update
         * @return \UUP\Exchange\Types\SyncFolderItemsChangesType
         */
        public function setUpdate($Update)
        {
                $this->Update = $Update;
                return $this;
        }

        /**
         * @return SyncFolderItemsDeleteType
         */
        public function getDelete()
        {
                return $this->Delete;
        }

        /**
         * @param SyncFolderItemsDeleteType $Delete
         * @return \UUP\Exchange\Types\SyncFolderItemsChangesType
         */
        public function setDelete($Delete)
        {
                $this->Delete = $Delete;
                return $this;
        }

        /**
         * @return SyncFolderItemsReadFlagType
         */
        public function getReadFlagChange()
        {
                return $this->ReadFlagChange;
        }

        /**
         * @param SyncFolderItemsReadFlagType $ReadFlagChange
         * @return \UUP\Exchange\Types\SyncFolderItemsChangesType
         */
        public function setReadFlagChange($ReadFlagChange)
        {
                $this->ReadFlagChange = $ReadFlagChange;
                return $this;
        }

}
