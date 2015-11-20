<?php

namespace UUP\Exchange\Types;

class DelegatePermissionsType
{

        /**
         * @var DelegateFolderPermissionLevelType $CalendarFolderPermissionLevel
         */
        protected $CalendarFolderPermissionLevel = null;
        /**
         * @var DelegateFolderPermissionLevelType $TasksFolderPermissionLevel
         */
        protected $TasksFolderPermissionLevel = null;
        /**
         * @var DelegateFolderPermissionLevelType $InboxFolderPermissionLevel
         */
        protected $InboxFolderPermissionLevel = null;
        /**
         * @var DelegateFolderPermissionLevelType $ContactsFolderPermissionLevel
         */
        protected $ContactsFolderPermissionLevel = null;
        /**
         * @var DelegateFolderPermissionLevelType $NotesFolderPermissionLevel
         */
        protected $NotesFolderPermissionLevel = null;
        /**
         * @var DelegateFolderPermissionLevelType $JournalFolderPermissionLevel
         */
        protected $JournalFolderPermissionLevel = null;

        public function __construct()
        {
                
        }

        /**
         * @return DelegateFolderPermissionLevelType
         */
        public function getCalendarFolderPermissionLevel()
        {
                return $this->CalendarFolderPermissionLevel;
        }

        /**
         * @param DelegateFolderPermissionLevelType $CalendarFolderPermissionLevel
         * @return \UUP\Exchange\Types\DelegatePermissionsType
         */
        public function setCalendarFolderPermissionLevel($CalendarFolderPermissionLevel)
        {
                $this->CalendarFolderPermissionLevel = $CalendarFolderPermissionLevel;
                return $this;
        }

        /**
         * @return DelegateFolderPermissionLevelType
         */
        public function getTasksFolderPermissionLevel()
        {
                return $this->TasksFolderPermissionLevel;
        }

        /**
         * @param DelegateFolderPermissionLevelType $TasksFolderPermissionLevel
         * @return \UUP\Exchange\Types\DelegatePermissionsType
         */
        public function setTasksFolderPermissionLevel($TasksFolderPermissionLevel)
        {
                $this->TasksFolderPermissionLevel = $TasksFolderPermissionLevel;
                return $this;
        }

        /**
         * @return DelegateFolderPermissionLevelType
         */
        public function getInboxFolderPermissionLevel()
        {
                return $this->InboxFolderPermissionLevel;
        }

        /**
         * @param DelegateFolderPermissionLevelType $InboxFolderPermissionLevel
         * @return \UUP\Exchange\Types\DelegatePermissionsType
         */
        public function setInboxFolderPermissionLevel($InboxFolderPermissionLevel)
        {
                $this->InboxFolderPermissionLevel = $InboxFolderPermissionLevel;
                return $this;
        }

        /**
         * @return DelegateFolderPermissionLevelType
         */
        public function getContactsFolderPermissionLevel()
        {
                return $this->ContactsFolderPermissionLevel;
        }

        /**
         * @param DelegateFolderPermissionLevelType $ContactsFolderPermissionLevel
         * @return \UUP\Exchange\Types\DelegatePermissionsType
         */
        public function setContactsFolderPermissionLevel($ContactsFolderPermissionLevel)
        {
                $this->ContactsFolderPermissionLevel = $ContactsFolderPermissionLevel;
                return $this;
        }

        /**
         * @return DelegateFolderPermissionLevelType
         */
        public function getNotesFolderPermissionLevel()
        {
                return $this->NotesFolderPermissionLevel;
        }

        /**
         * @param DelegateFolderPermissionLevelType $NotesFolderPermissionLevel
         * @return \UUP\Exchange\Types\DelegatePermissionsType
         */
        public function setNotesFolderPermissionLevel($NotesFolderPermissionLevel)
        {
                $this->NotesFolderPermissionLevel = $NotesFolderPermissionLevel;
                return $this;
        }

        /**
         * @return DelegateFolderPermissionLevelType
         */
        public function getJournalFolderPermissionLevel()
        {
                return $this->JournalFolderPermissionLevel;
        }

        /**
         * @param DelegateFolderPermissionLevelType $JournalFolderPermissionLevel
         * @return \UUP\Exchange\Types\DelegatePermissionsType
         */
        public function setJournalFolderPermissionLevel($JournalFolderPermissionLevel)
        {
                $this->JournalFolderPermissionLevel = $JournalFolderPermissionLevel;
                return $this;
        }

}
