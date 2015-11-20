<?php

namespace UUP\Exchange\Types;

class DelegateUserType
{

        /**
         * @var UserIdType $UserId
         */
        protected $UserId = null;
        /**
         * @var DelegatePermissionsType $DelegatePermissions
         */
        protected $DelegatePermissions = null;
        /**
         * @var boolean $ReceiveCopiesOfMeetingMessages
         */
        protected $ReceiveCopiesOfMeetingMessages = null;
        /**
         * @var boolean $ViewPrivateItems
         */
        protected $ViewPrivateItems = null;

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
         * @return \UUP\Exchange\Types\DelegateUserType
         */
        public function setUserId($UserId)
        {
                $this->UserId = $UserId;
                return $this;
        }

        /**
         * @return DelegatePermissionsType
         */
        public function getDelegatePermissions()
        {
                return $this->DelegatePermissions;
        }

        /**
         * @param DelegatePermissionsType $DelegatePermissions
         * @return \UUP\Exchange\Types\DelegateUserType
         */
        public function setDelegatePermissions($DelegatePermissions)
        {
                $this->DelegatePermissions = $DelegatePermissions;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getReceiveCopiesOfMeetingMessages()
        {
                return $this->ReceiveCopiesOfMeetingMessages;
        }

        /**
         * @param boolean $ReceiveCopiesOfMeetingMessages
         * @return \UUP\Exchange\Types\DelegateUserType
         */
        public function setReceiveCopiesOfMeetingMessages($ReceiveCopiesOfMeetingMessages)
        {
                $this->ReceiveCopiesOfMeetingMessages = $ReceiveCopiesOfMeetingMessages;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getViewPrivateItems()
        {
                return $this->ViewPrivateItems;
        }

        /**
         * @param boolean $ViewPrivateItems
         * @return \UUP\Exchange\Types\DelegateUserType
         */
        public function setViewPrivateItems($ViewPrivateItems)
        {
                $this->ViewPrivateItems = $ViewPrivateItems;
                return $this;
        }

}
