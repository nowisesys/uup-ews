<?php

namespace UUP\Exchange\Types;

class UpdateDelegateType extends BaseDelegateType
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
         */
        public function __construct($Mailbox = null)
        {
                parent::__construct($Mailbox);
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
         * @return \UUP\Exchange\Types\UpdateDelegateType
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
         * @return \UUP\Exchange\Types\UpdateDelegateType
         */
        public function setDeliverMeetingRequests($DeliverMeetingRequests)
        {
                $this->DeliverMeetingRequests = $DeliverMeetingRequests;
                return $this;
        }

}
