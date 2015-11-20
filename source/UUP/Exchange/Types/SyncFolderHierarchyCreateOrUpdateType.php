<?php

namespace UUP\Exchange\Types;

class SyncFolderHierarchyCreateOrUpdateType
{

        /**
         * @var FolderType $Folder
         */
        protected $Folder = null;
        /**
         * @var CalendarFolderType $CalendarFolder
         */
        protected $CalendarFolder = null;
        /**
         * @var ContactsFolderType $ContactsFolder
         */
        protected $ContactsFolder = null;
        /**
         * @var SearchFolderType $SearchFolder
         */
        protected $SearchFolder = null;
        /**
         * @var TasksFolderType $TasksFolder
         */
        protected $TasksFolder = null;

        /**
         * @param FolderType $Folder
         * @param CalendarFolderType $CalendarFolder
         * @param ContactsFolderType $ContactsFolder
         * @param SearchFolderType $SearchFolder
         * @param TasksFolderType $TasksFolder
         */
        public function __construct($Folder = null, $CalendarFolder = null, $ContactsFolder = null, $SearchFolder = null, $TasksFolder = null)
        {
                $this->Folder = $Folder;
                $this->CalendarFolder = $CalendarFolder;
                $this->ContactsFolder = $ContactsFolder;
                $this->SearchFolder = $SearchFolder;
                $this->TasksFolder = $TasksFolder;
        }

        /**
         * @return FolderType
         */
        public function getFolder()
        {
                return $this->Folder;
        }

        /**
         * @param FolderType $Folder
         * @return \UUP\Exchange\Types\SyncFolderHierarchyCreateOrUpdateType
         */
        public function setFolder($Folder)
        {
                $this->Folder = $Folder;
                return $this;
        }

        /**
         * @return CalendarFolderType
         */
        public function getCalendarFolder()
        {
                return $this->CalendarFolder;
        }

        /**
         * @param CalendarFolderType $CalendarFolder
         * @return \UUP\Exchange\Types\SyncFolderHierarchyCreateOrUpdateType
         */
        public function setCalendarFolder($CalendarFolder)
        {
                $this->CalendarFolder = $CalendarFolder;
                return $this;
        }

        /**
         * @return ContactsFolderType
         */
        public function getContactsFolder()
        {
                return $this->ContactsFolder;
        }

        /**
         * @param ContactsFolderType $ContactsFolder
         * @return \UUP\Exchange\Types\SyncFolderHierarchyCreateOrUpdateType
         */
        public function setContactsFolder($ContactsFolder)
        {
                $this->ContactsFolder = $ContactsFolder;
                return $this;
        }

        /**
         * @return SearchFolderType
         */
        public function getSearchFolder()
        {
                return $this->SearchFolder;
        }

        /**
         * @param SearchFolderType $SearchFolder
         * @return \UUP\Exchange\Types\SyncFolderHierarchyCreateOrUpdateType
         */
        public function setSearchFolder($SearchFolder)
        {
                $this->SearchFolder = $SearchFolder;
                return $this;
        }

        /**
         * @return TasksFolderType
         */
        public function getTasksFolder()
        {
                return $this->TasksFolder;
        }

        /**
         * @param TasksFolderType $TasksFolder
         * @return \UUP\Exchange\Types\SyncFolderHierarchyCreateOrUpdateType
         */
        public function setTasksFolder($TasksFolder)
        {
                $this->TasksFolder = $TasksFolder;
                return $this;
        }

}
