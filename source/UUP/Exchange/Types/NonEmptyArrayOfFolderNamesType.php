<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfFolderNamesType
{

        /**
         * @var string[] $FolderName
         */
        protected $FolderName = null;

        /**
         * @param string[] $FolderName
         */
        public function __construct(array $FolderName = null)
        {
                $this->FolderName = $FolderName;
        }

        /**
         * @return string[]
         */
        public function getFolderName()
        {
                return $this->FolderName;
        }

        /**
         * @param string[] $FolderName
         * @return \UUP\Exchange\Types\NonEmptyArrayOfFolderNamesType
         */
        public function setFolderName(array $FolderName)
        {
                $this->FolderName = $FolderName;
                return $this;
        }

}
