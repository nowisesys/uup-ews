<?php

namespace UUP\Exchange\Types;

class ManagedFolderInformationType
{

        /**
         * @var boolean $CanDelete
         */
        protected $CanDelete = null;
        /**
         * @var boolean $CanRenameOrMove
         */
        protected $CanRenameOrMove = null;
        /**
         * @var boolean $MustDisplayComment
         */
        protected $MustDisplayComment = null;
        /**
         * @var boolean $HasQuota
         */
        protected $HasQuota = null;
        /**
         * @var boolean $IsManagedFoldersRoot
         */
        protected $IsManagedFoldersRoot = null;
        /**
         * @var string $ManagedFolderId
         */
        protected $ManagedFolderId = null;
        /**
         * @var string $Comment
         */
        protected $Comment = null;
        /**
         * @var int $StorageQuota
         */
        protected $StorageQuota = null;
        /**
         * @var int $FolderSize
         */
        protected $FolderSize = null;
        /**
         * @var string $HomePage
         */
        protected $HomePage = null;

        public function __construct()
        {
                
        }

        /**
         * @return boolean
         */
        public function getCanDelete()
        {
                return $this->CanDelete;
        }

        /**
         * @param boolean $CanDelete
         * @return \UUP\Exchange\Types\ManagedFolderInformationType
         */
        public function setCanDelete($CanDelete)
        {
                $this->CanDelete = $CanDelete;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getCanRenameOrMove()
        {
                return $this->CanRenameOrMove;
        }

        /**
         * @param boolean $CanRenameOrMove
         * @return \UUP\Exchange\Types\ManagedFolderInformationType
         */
        public function setCanRenameOrMove($CanRenameOrMove)
        {
                $this->CanRenameOrMove = $CanRenameOrMove;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getMustDisplayComment()
        {
                return $this->MustDisplayComment;
        }

        /**
         * @param boolean $MustDisplayComment
         * @return \UUP\Exchange\Types\ManagedFolderInformationType
         */
        public function setMustDisplayComment($MustDisplayComment)
        {
                $this->MustDisplayComment = $MustDisplayComment;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getHasQuota()
        {
                return $this->HasQuota;
        }

        /**
         * @param boolean $HasQuota
         * @return \UUP\Exchange\Types\ManagedFolderInformationType
         */
        public function setHasQuota($HasQuota)
        {
                $this->HasQuota = $HasQuota;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsManagedFoldersRoot()
        {
                return $this->IsManagedFoldersRoot;
        }

        /**
         * @param boolean $IsManagedFoldersRoot
         * @return \UUP\Exchange\Types\ManagedFolderInformationType
         */
        public function setIsManagedFoldersRoot($IsManagedFoldersRoot)
        {
                $this->IsManagedFoldersRoot = $IsManagedFoldersRoot;
                return $this;
        }

        /**
         * @return string
         */
        public function getManagedFolderId()
        {
                return $this->ManagedFolderId;
        }

        /**
         * @param string $ManagedFolderId
         * @return \UUP\Exchange\Types\ManagedFolderInformationType
         */
        public function setManagedFolderId($ManagedFolderId)
        {
                $this->ManagedFolderId = $ManagedFolderId;
                return $this;
        }

        /**
         * @return string
         */
        public function getComment()
        {
                return $this->Comment;
        }

        /**
         * @param string $Comment
         * @return \UUP\Exchange\Types\ManagedFolderInformationType
         */
        public function setComment($Comment)
        {
                $this->Comment = $Comment;
                return $this;
        }

        /**
         * @return int
         */
        public function getStorageQuota()
        {
                return $this->StorageQuota;
        }

        /**
         * @param int $StorageQuota
         * @return \UUP\Exchange\Types\ManagedFolderInformationType
         */
        public function setStorageQuota($StorageQuota)
        {
                $this->StorageQuota = $StorageQuota;
                return $this;
        }

        /**
         * @return int
         */
        public function getFolderSize()
        {
                return $this->FolderSize;
        }

        /**
         * @param int $FolderSize
         * @return \UUP\Exchange\Types\ManagedFolderInformationType
         */
        public function setFolderSize($FolderSize)
        {
                $this->FolderSize = $FolderSize;
                return $this;
        }

        /**
         * @return string
         */
        public function getHomePage()
        {
                return $this->HomePage;
        }

        /**
         * @param string $HomePage
         * @return \UUP\Exchange\Types\ManagedFolderInformationType
         */
        public function setHomePage($HomePage)
        {
                $this->HomePage = $HomePage;
                return $this;
        }

}
