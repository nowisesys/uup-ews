<?php

namespace UUP\Exchange\Types;

class FolderType extends BaseFolderType
{

        /**
         * @var PermissionSetType $PermissionSet
         */
        protected $PermissionSet = null;
        /**
         * @var int $UnreadCount
         */
        protected $UnreadCount = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return PermissionSetType
         */
        public function getPermissionSet()
        {
                return $this->PermissionSet;
        }

        /**
         * @param PermissionSetType $PermissionSet
         * @return \UUP\Exchange\Types\FolderType
         */
        public function setPermissionSet($PermissionSet)
        {
                $this->PermissionSet = $PermissionSet;
                return $this;
        }

        /**
         * @return int
         */
        public function getUnreadCount()
        {
                return $this->UnreadCount;
        }

        /**
         * @param int $UnreadCount
         * @return \UUP\Exchange\Types\FolderType
         */
        public function setUnreadCount($UnreadCount)
        {
                $this->UnreadCount = $UnreadCount;
                return $this;
        }

}
