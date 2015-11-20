<?php

namespace UUP\Exchange\Types;

class UserConfigurationNameType extends TargetFolderIdType
{

        /**
         * @var NonEmptyStringType $Name
         */
        protected $Name = null;

        /**
         * @param FolderIdType $FolderId
         * @param DistinguishedFolderIdType $DistinguishedFolderId
         * @param NonEmptyStringType $Name
         */
        public function __construct($FolderId = null, $DistinguishedFolderId = null, $Name = null)
        {
                parent::__construct($FolderId, $DistinguishedFolderId);
                $this->Name = $Name;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getName()
        {
                return $this->Name;
        }

        /**
         * @param NonEmptyStringType $Name
         * @return \UUP\Exchange\Types\UserConfigurationNameType
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

}
