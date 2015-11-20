<?php

namespace UUP\Exchange\Types;

class ContactsFolderType extends BaseFolderType
{

        /**
         * @var PermissionReadAccessType $SharingEffectiveRights
         */
        protected $SharingEffectiveRights = null;
        /**
         * @var PermissionSetType $PermissionSet
         */
        protected $PermissionSet = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return PermissionReadAccessType
         */
        public function getSharingEffectiveRights()
        {
                return $this->SharingEffectiveRights;
        }

        /**
         * @param PermissionReadAccessType $SharingEffectiveRights
         * @return \UUP\Exchange\Types\ContactsFolderType
         */
        public function setSharingEffectiveRights($SharingEffectiveRights)
        {
                $this->SharingEffectiveRights = $SharingEffectiveRights;
                return $this;
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
         * @return \UUP\Exchange\Types\ContactsFolderType
         */
        public function setPermissionSet($PermissionSet)
        {
                $this->PermissionSet = $PermissionSet;
                return $this;
        }

}
