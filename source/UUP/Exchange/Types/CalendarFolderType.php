<?php

namespace UUP\Exchange\Types;

class CalendarFolderType extends BaseFolderType
{

        /**
         * @var CalendarPermissionReadAccessType $SharingEffectiveRights
         */
        protected $SharingEffectiveRights = null;
        /**
         * @var CalendarPermissionSetType $PermissionSet
         */
        protected $PermissionSet = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return CalendarPermissionReadAccessType
         */
        public function getSharingEffectiveRights()
        {
                return $this->SharingEffectiveRights;
        }

        /**
         * @param CalendarPermissionReadAccessType $SharingEffectiveRights
         * @return \UUP\Exchange\Types\CalendarFolderType
         */
        public function setSharingEffectiveRights($SharingEffectiveRights)
        {
                $this->SharingEffectiveRights = $SharingEffectiveRights;
                return $this;
        }

        /**
         * @return CalendarPermissionSetType
         */
        public function getPermissionSet()
        {
                return $this->PermissionSet;
        }

        /**
         * @param CalendarPermissionSetType $PermissionSet
         * @return \UUP\Exchange\Types\CalendarFolderType
         */
        public function setPermissionSet($PermissionSet)
        {
                $this->PermissionSet = $PermissionSet;
                return $this;
        }

}
