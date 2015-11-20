<?php

namespace UUP\Exchange\Types;

class FindItemResponseMessageType extends ResponseMessageType
{

        /**
         * @var FindItemParentType $RootFolder
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
         * @return FindItemParentType
         */
        public function getRootFolder()
        {
                return $this->RootFolder;
        }

        /**
         * @param FindItemParentType $RootFolder
         * @return \UUP\Exchange\Types\FindItemResponseMessageType
         */
        public function setRootFolder($RootFolder)
        {
                $this->RootFolder = $RootFolder;
                return $this;
        }

}
