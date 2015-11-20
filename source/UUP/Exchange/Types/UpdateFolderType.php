<?php

namespace UUP\Exchange\Types;

class UpdateFolderType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfFolderChangesType $FolderChanges
         */
        protected $FolderChanges = null;

        /**
         * @param NonEmptyArrayOfFolderChangesType $FolderChanges
         */
        public function __construct($FolderChanges = null)
        {
                $this->FolderChanges = $FolderChanges;
        }

        /**
         * @return NonEmptyArrayOfFolderChangesType
         */
        public function getFolderChanges()
        {
                return $this->FolderChanges;
        }

        /**
         * @param NonEmptyArrayOfFolderChangesType $FolderChanges
         * @return \UUP\Exchange\Types\UpdateFolderType
         */
        public function setFolderChanges($FolderChanges)
        {
                $this->FolderChanges = $FolderChanges;
                return $this;
        }

}
