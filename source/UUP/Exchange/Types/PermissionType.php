<?php

namespace UUP\Exchange\Types;

class PermissionType extends BasePermissionType
{

        /**
         * @var PermissionReadAccessType $ReadItems
         */
        protected $ReadItems = null;
        /**
         * @var PermissionLevelType $PermissionLevel
         */
        protected $PermissionLevel = null;

        /**
         * @param UserIdType $UserId
         * @param PermissionLevelType $PermissionLevel
         */
        public function __construct($UserId = null, $PermissionLevel = null)
        {
                parent::__construct($UserId);
                $this->PermissionLevel = $PermissionLevel;
        }

        /**
         * @return PermissionReadAccessType
         */
        public function getReadItems()
        {
                return $this->ReadItems;
        }

        /**
         * @param PermissionReadAccessType $ReadItems
         * @return \UUP\Exchange\Types\PermissionType
         */
        public function setReadItems($ReadItems)
        {
                $this->ReadItems = $ReadItems;
                return $this;
        }

        /**
         * @return PermissionLevelType
         */
        public function getPermissionLevel()
        {
                return $this->PermissionLevel;
        }

        /**
         * @param PermissionLevelType $PermissionLevel
         * @return \UUP\Exchange\Types\PermissionType
         */
        public function setPermissionLevel($PermissionLevel)
        {
                $this->PermissionLevel = $PermissionLevel;
                return $this;
        }

}
