<?php

namespace UUP\Exchange\Types;

class UploadItemType
{

        /**
         * @var FolderIdType $ParentFolderId
         */
        protected $ParentFolderId = null;
        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;
        /**
         * @var base64Binary $Data
         */
        protected $Data = null;
        /**
         * @var CreateActionType $CreateAction
         */
        protected $CreateAction = null;
        /**
         * @var boolean $IsAssociated
         */
        protected $IsAssociated = null;

        /**
         * @param FolderIdType $ParentFolderId
         * @param base64Binary $Data
         * @param CreateActionType $CreateAction
         * @param boolean $IsAssociated
         */
        public function __construct($ParentFolderId = null, $Data = null, $CreateAction = null, $IsAssociated = null)
        {
                $this->ParentFolderId = $ParentFolderId;
                $this->Data = $Data;
                $this->CreateAction = $CreateAction;
                $this->IsAssociated = $IsAssociated;
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
         * @return \UUP\Exchange\Types\UploadItemType
         */
        public function setParentFolderId($ParentFolderId)
        {
                $this->ParentFolderId = $ParentFolderId;
                return $this;
        }

        /**
         * @return ItemIdType
         */
        public function getItemId()
        {
                return $this->ItemId;
        }

        /**
         * @param ItemIdType $ItemId
         * @return \UUP\Exchange\Types\UploadItemType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

        /**
         * @return base64Binary
         */
        public function getData()
        {
                return $this->Data;
        }

        /**
         * @param base64Binary $Data
         * @return \UUP\Exchange\Types\UploadItemType
         */
        public function setData($Data)
        {
                $this->Data = $Data;
                return $this;
        }

        /**
         * @return CreateActionType
         */
        public function getCreateAction()
        {
                return $this->CreateAction;
        }

        /**
         * @param CreateActionType $CreateAction
         * @return \UUP\Exchange\Types\UploadItemType
         */
        public function setCreateAction($CreateAction)
        {
                $this->CreateAction = $CreateAction;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsAssociated()
        {
                return $this->IsAssociated;
        }

        /**
         * @param boolean $IsAssociated
         * @return \UUP\Exchange\Types\UploadItemType
         */
        public function setIsAssociated($IsAssociated)
        {
                $this->IsAssociated = $IsAssociated;
                return $this;
        }

}
