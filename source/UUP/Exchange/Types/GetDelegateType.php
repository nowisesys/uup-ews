<?php

namespace UUP\Exchange\Types;

class GetDelegateType extends BaseDelegateType
{

        /**
         * @var ArrayOfUserIdType $UserIds
         */
        protected $UserIds = null;
        /**
         * @var boolean $IncludePermissions
         */
        protected $IncludePermissions = null;

        /**
         * @param EmailAddressType $Mailbox
         * @param boolean $IncludePermissions
         */
        public function __construct($Mailbox = null, $IncludePermissions = null)
        {
                parent::__construct($Mailbox);
                $this->IncludePermissions = $IncludePermissions;
        }

        /**
         * @return ArrayOfUserIdType
         */
        public function getUserIds()
        {
                return $this->UserIds;
        }

        /**
         * @param ArrayOfUserIdType $UserIds
         * @return \UUP\Exchange\Types\GetDelegateType
         */
        public function setUserIds($UserIds)
        {
                $this->UserIds = $UserIds;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIncludePermissions()
        {
                return $this->IncludePermissions;
        }

        /**
         * @param boolean $IncludePermissions
         * @return \UUP\Exchange\Types\GetDelegateType
         */
        public function setIncludePermissions($IncludePermissions)
        {
                $this->IncludePermissions = $IncludePermissions;
                return $this;
        }

}
