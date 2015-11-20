<?php

namespace UUP\Exchange\Types;

class FolderInfoResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfFoldersType $Folders
         */
        protected $Folders = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return ArrayOfFoldersType
         */
        public function getFolders()
        {
                return $this->Folders;
        }

        /**
         * @param ArrayOfFoldersType $Folders
         * @return \UUP\Exchange\Types\FolderInfoResponseMessageType
         */
        public function setFolders($Folders)
        {
                $this->Folders = $Folders;
                return $this;
        }

}
