<?php

namespace UUP\Exchange\Types;

class FindFolderResponseMessageType extends ResponseMessageType
{

        /**
         * @var FindFolderParentType $RootFolder
         */
        protected $RootFolder = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return FindFolderParentType
         */
        public function getRootFolder()
        {
                return $this->RootFolder;
        }

        /**
         * @param FindFolderParentType $RootFolder
         * @return \UUP\Exchange\Types\FindFolderResponseMessageType
         */
        public function setRootFolder($RootFolder)
        {
                $this->RootFolder = $RootFolder;
                return $this;
        }

}
