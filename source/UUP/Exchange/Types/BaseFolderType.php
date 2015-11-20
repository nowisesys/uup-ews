<?php

namespace UUP\Exchange\Types;

abstract class BaseFolderType
{

        /**
         * @var FolderIdType $FolderId
         */
        protected $FolderId = null;
        /**
         * @var FolderIdType $ParentFolderId
         */
        protected $ParentFolderId = null;
        /**
         * @var string $FolderClass
         */
        protected $FolderClass = null;
        /**
         * @var string $DisplayName
         */
        protected $DisplayName = null;
        /**
         * @var int $TotalCount
         */
        protected $TotalCount = null;
        /**
         * @var int $ChildFolderCount
         */
        protected $ChildFolderCount = null;
        /**
         * @var ExtendedPropertyType[] $ExtendedProperty
         */
        protected $ExtendedProperty = null;
        /**
         * @var ManagedFolderInformationType $ManagedFolderInformation
         */
        protected $ManagedFolderInformation = null;
        /**
         * @var EffectiveRightsType $EffectiveRights
         */
        protected $EffectiveRights = null;

        public function __construct()
        {
                
        }

        /**
         * @return FolderIdType
         */
        public function getFolderId()
        {
                return $this->FolderId;
        }

        /**
         * @param FolderIdType $FolderId
         * @return \UUP\Exchange\Types\BaseFolderType
         */
        public function setFolderId($FolderId)
        {
                $this->FolderId = $FolderId;
                return $this;
        }

        /**
         * @return FolderIdType
         */
        public function getParentFolderId()
        {
                return $this->ParentFolderId;
        }

        /**
         * @param FolderIdType $ParentFolderId
         * @return \UUP\Exchange\Types\BaseFolderType
         */
        public function setParentFolderId($ParentFolderId)
        {
                $this->ParentFolderId = $ParentFolderId;
                return $this;
        }

        /**
         * @return string
         */
        public function getFolderClass()
        {
                return $this->FolderClass;
        }

        /**
         * @param string $FolderClass
         * @return \UUP\Exchange\Types\BaseFolderType
         */
        public function setFolderClass($FolderClass)
        {
                $this->FolderClass = $FolderClass;
                return $this;
        }

        /**
         * @return string
         */
        public function getDisplayName()
        {
                return $this->DisplayName;
        }

        /**
         * @param string $DisplayName
         * @return \UUP\Exchange\Types\BaseFolderType
         */
        public function setDisplayName($DisplayName)
        {
                $this->DisplayName = $DisplayName;
                return $this;
        }

        /**
         * @return int
         */
        public function getTotalCount()
        {
                return $this->TotalCount;
        }

        /**
         * @param int $TotalCount
         * @return \UUP\Exchange\Types\BaseFolderType
         */
        public function setTotalCount($TotalCount)
        {
                $this->TotalCount = $TotalCount;
                return $this;
        }

        /**
         * @return int
         */
        public function getChildFolderCount()
        {
                return $this->ChildFolderCount;
        }

        /**
         * @param int $ChildFolderCount
         * @return \UUP\Exchange\Types\BaseFolderType
         */
        public function setChildFolderCount($ChildFolderCount)
        {
                $this->ChildFolderCount = $ChildFolderCount;
                return $this;
        }

        /**
         * @return ExtendedPropertyType[]
         */
        public function getExtendedProperty()
        {
                return $this->ExtendedProperty;
        }

        /**
         * @param ExtendedPropertyType[] $ExtendedProperty
         * @return \UUP\Exchange\Types\BaseFolderType
         */
        public function setExtendedProperty(array $ExtendedProperty = null)
        {
                $this->ExtendedProperty = $ExtendedProperty;
                return $this;
        }

        /**
         * @return ManagedFolderInformationType
         */
        public function getManagedFolderInformation()
        {
                return $this->ManagedFolderInformation;
        }

        /**
         * @param ManagedFolderInformationType $ManagedFolderInformation
         * @return \UUP\Exchange\Types\BaseFolderType
         */
        public function setManagedFolderInformation($ManagedFolderInformation)
        {
                $this->ManagedFolderInformation = $ManagedFolderInformation;
                return $this;
        }

        /**
         * @return EffectiveRightsType
         */
        public function getEffectiveRights()
        {
                return $this->EffectiveRights;
        }

        /**
         * @param EffectiveRightsType $EffectiveRights
         * @return \UUP\Exchange\Types\BaseFolderType
         */
        public function setEffectiveRights($EffectiveRights)
        {
                $this->EffectiveRights = $EffectiveRights;
                return $this;
        }

}
