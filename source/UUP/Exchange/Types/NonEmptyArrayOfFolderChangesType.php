<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfFolderChangesType
{

        /**
         * @var FolderChangeType[] $FolderChange
         */
        protected $FolderChange = null;

        /**
         * @param FolderChangeType[] $FolderChange
         */
        public function __construct(array $FolderChange = null)
        {
                $this->FolderChange = $FolderChange;
        }

        /**
         * @return FolderChangeType[]
         */
        public function getFolderChange()
        {
                return $this->FolderChange;
        }

        /**
         * @param FolderChangeType[] $FolderChange
         * @return \UUP\Exchange\Types\NonEmptyArrayOfFolderChangesType
         */
        public function setFolderChange(array $FolderChange)
        {
                $this->FolderChange = $FolderChange;
                return $this;
        }

}
