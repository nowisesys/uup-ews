<?php

namespace UUP\Exchange\Types;

class AddDelegateType extends BaseDelegateType
{

        /**
         * @var ArrayOfDelegateUserType $DelegateUsers
         */
        protected $DelegateUsers = null;
        /**
         * @var DeliverMeetingRequestsType $DeliverMeetingRequests
         */
        protected $DeliverMeetingRequests = null;

        /**
         * @param EmailAddressType $Mailbox
         * @param ArrayOfDelegateUserType $DelegateUsers
         */
        public function __construct($Mailbox = null, $DelegateUsers = null)
        {
                parent::__construct($Mailbox);
                $this->DelegateUsers = $DelegateUsers;
        }

        /**
         * @return ArrayOfDelegateUserType
         */
        public function getDelegateUsers()
        {
                return $this->DelegateUsers;
        }

        /**
         * @param ArrayOfDelegateUserType $DelegateUsers
         * @return \UUP\Exchange\Types\AddDelegateType
         */
        public function setDelegateUsers($DelegateUsers)
        {
                $this->DelegateUsers = $DelegateUsers;
                return $this;
        }

        /**
         * @return DeliverMeetingRequestsType
         */
        public function getDeliverMeetingRequests()
        {
                return $this->DeliverMeetingRequests;
        }

        /**
         * @param DeliverMeetingRequestsType $DeliverMeetingRequests
         * @return \UUP\Exchange\Types\AddDelegateType
         */
        public function setDeliverMeetingRequests($DeliverMeetingRequests)
        {
                $this->DeliverMeetingRequests = $DeliverMeetingRequests;
                return $this;
        }

}
