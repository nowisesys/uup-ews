<?php

namespace UUP\Exchange\Types;

class ArrayOfPermissionsType
{

        /**
         * @var PermissionType $Permission
         */
        protected $Permission = null;

        /**
         * @param PermissionType $Permission
         */
        public function __construct($Permission = null)
        {
                $this->Permission = $Permission;
        }

        /**
         * @return PermissionType
         */
        public function getPermission()
        {
                return $this->Permission;
        }

        /**
         * @param PermissionType $Permission
         * @return \UUP\Exchange\Types\ArrayOfPermissionsType
         */
        public function setPermission($Permission)
        {
                $this->Permission = $Permission;
                return $this;
        }

}
