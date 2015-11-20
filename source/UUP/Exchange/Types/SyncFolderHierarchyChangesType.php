<?php

namespace UUP\Exchange\Types;

class SyncFolderHierarchyChangesType
{

        /**
         * @var SyncFolderHierarchyCreateOrUpdateType $Create
         */
        protected $Create = null;
        /**
         * @var SyncFolderHierarchyCreateOrUpdateType $Update
         */
        protected $Update = null;
        /**
         * @var SyncFolderHierarchyDeleteType $Delete
         */
        protected $Delete = null;

        /**
         * @param SyncFolderHierarchyCreateOrUpdateType $Create
         * @param SyncFolderHierarchyCreateOrUpdateType $Update
         * @param SyncFolderHierarchyDeleteType $Delete
         */
        public function __construct($Create = null, $Update = null, $Delete = null)
        {
                $this->Create = $Create;
                $this->Update = $Update;
                $this->Delete = $Delete;
        }

        /**
         * @return SyncFolderHierarchyCreateOrUpdateType
         */
        public function getCreate()
        {
                return $this->Create;
        }

        /**
         * @param SyncFolderHierarchyCreateOrUpdateType $Create
         * @return \UUP\Exchange\Types\SyncFolderHierarchyChangesType
         */
        public function setCreate($Create)
        {
                $this->Create = $Create;
                return $this;
        }

        /**
         * @return SyncFolderHierarchyCreateOrUpdateType
         */
        public function getUpdate()
        {
                return $this->Update;
        }

        /**
         * @param SyncFolderHierarchyCreateOrUpdateType $Update
         * @return \UUP\Exchange\Types\SyncFolderHierarchyChangesType
         */
        public function setUpdate($Update)
        {
                $this->Update = $Update;
                return $this;
        }

        /**
         * @return SyncFolderHierarchyDeleteType
         */
        public function getDelete()
        {
                return $this->Delete;
        }

        /**
         * @param SyncFolderHierarchyDeleteType $Delete
         * @return \UUP\Exchange\Types\SyncFolderHierarchyChangesType
         */
        public function setDelete($Delete)
        {
                $this->Delete = $Delete;
                return $this;
        }

}
