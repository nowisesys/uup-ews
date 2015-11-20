<?php

namespace UUP\Exchange\Types;

abstract class BasePermissionType
{

        /**
         * @var UserIdType $UserId
         */
        protected $UserId = null;
        /**
         * @var boolean $CanCreateItems
         */
        protected $CanCreateItems = null;
        /**
         * @var boolean $CanCreateSubFolders
         */
        protected $CanCreateSubFolders = null;
        /**
         * @var boolean $IsFolderOwner
         */
        protected $IsFolderOwner = null;
        /**
         * @var boolean $IsFolderVisible
         */
        protected $IsFolderVisible = null;
        /**
         * @var boolean $IsFolderContact
         */
        protected $IsFolderContact = null;
        /**
         * @var PermissionActionType $EditItems
         */
        protected $EditItems = null;
        /**
         * @var PermissionActionType $DeleteItems
         */
        protected $DeleteItems = null;

        /**
         * @param UserIdType $UserId
         */
        public function __construct($UserId = null)
        {
                $this->UserId = $UserId;
        }

        /**
         * @return UserIdType
         */
        public function getUserId()
        {
                return $this->UserId;
        }

        /**
         * @param UserIdType $UserId
         * @return \UUP\Exchange\Types\BasePermissionType
         */
        public function setUserId($UserId)
        {
                $this->UserId = $UserId;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getCanCreateItems()
        {
                return $this->CanCreateItems;
        }

        /**
         * @param boolean $CanCreateItems
         * @return \UUP\Exchange\Types\BasePermissionType
         */
        public function setCanCreateItems($CanCreateItems)
        {
                $this->CanCreateItems = $CanCreateItems;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getCanCreateSubFolders()
        {
                return $this->CanCreateSubFolders;
        }

        /**
         * @param boolean $CanCreateSubFolders
         * @return \UUP\Exchange\Types\BasePermissionType
         */
        public function setCanCreateSubFolders($CanCreateSubFolders)
        {
                $this->CanCreateSubFolders = $CanCreateSubFolders;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsFolderOwner()
        {
                return $this->IsFolderOwner;
        }

        /**
         * @param boolean $IsFolderOwner
         * @return \UUP\Exchange\Types\BasePermissionType
         */
        public function setIsFolderOwner($IsFolderOwner)
        {
                $this->IsFolderOwner = $IsFolderOwner;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsFolderVisible()
        {
                return $this->IsFolderVisible;
        }

        /**
         * @param boolean $IsFolderVisible
         * @return \UUP\Exchange\Types\BasePermissionType
         */
        public function setIsFolderVisible($IsFolderVisible)
        {
                $this->IsFolderVisible = $IsFolderVisible;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsFolderContact()
        {
                return $this->IsFolderContact;
        }

        /**
         * @param boolean $IsFolderContact
         * @return \UUP\Exchange\Types\BasePermissionType
         */
        public function setIsFolderContact($IsFolderContact)
        {
                $this->IsFolderContact = $IsFolderContact;
                return $this;
        }

        /**
         * @return PermissionActionType
         */
        public function getEditItems()
        {
                return $this->EditItems;
        }

        /**
         * @param PermissionActionType $EditItems
         * @return \UUP\Exchange\Types\BasePermissionType
         */
        public function setEditItems($EditItems)
        {
                $this->EditItems = $EditItems;
                return $this;
        }

        /**
         * @return PermissionActionType
         */
        public function getDeleteItems()
        {
                return $this->DeleteItems;
        }

        /**
         * @param PermissionActionType $DeleteItems
         * @return \UUP\Exchange\Types\BasePermissionType
         */
        public function setDeleteItems($DeleteItems)
        {
                $this->DeleteItems = $DeleteItems;
                return $this;
        }

}
