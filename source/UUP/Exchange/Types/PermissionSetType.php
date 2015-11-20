<?php

namespace UUP\Exchange\Types;

class PermissionSetType
{

        /**
         * @var ArrayOfPermissionsType $Permissions
         */
        protected $Permissions = null;
        /**
         * @var ArrayOfUnknownEntriesType $UnknownEntries
         */
        protected $UnknownEntries = null;

        /**
         * @param ArrayOfPermissionsType $Permissions
         */
        public function __construct($Permissions = null)
        {
                $this->Permissions = $Permissions;
        }

        /**
         * @return ArrayOfPermissionsType
         */
        public function getPermissions()
        {
                return $this->Permissions;
        }

        /**
         * @param ArrayOfPermissionsType $Permissions
         * @return \UUP\Exchange\Types\PermissionSetType
         */
        public function setPermissions($Permissions)
        {
                $this->Permissions = $Permissions;
                return $this;
        }

        /**
         * @return ArrayOfUnknownEntriesType
         */
        public function getUnknownEntries()
        {
                return $this->UnknownEntries;
        }

        /**
         * @param ArrayOfUnknownEntriesType $UnknownEntries
         * @return \UUP\Exchange\Types\PermissionSetType
         */
        public function setUnknownEntries($UnknownEntries)
        {
                $this->UnknownEntries = $UnknownEntries;
                return $this;
        }

}
