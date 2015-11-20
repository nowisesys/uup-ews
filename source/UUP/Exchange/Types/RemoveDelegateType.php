<?php

namespace UUP\Exchange\Types;

class RemoveDelegateType extends BaseDelegateType
{

        /**
         * @var ArrayOfUserIdType $UserIds
         */
        protected $UserIds = null;

        /**
         * @param EmailAddressType $Mailbox
         * @param ArrayOfUserIdType $UserIds
         */
        public function __construct($Mailbox = null, $UserIds = null)
        {
                parent::__construct($Mailbox);
                $this->UserIds = $UserIds;
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
         * @return \UUP\Exchange\Types\RemoveDelegateType
         */
        public function setUserIds($UserIds)
        {
                $this->UserIds = $UserIds;
                return $this;
        }

}
