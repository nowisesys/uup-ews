<?php

namespace UUP\Exchange\Types;

class GetDelegateResponseMessageType extends BaseDelegateResponseMessageType
{

        /**
         * @var DeliverMeetingRequestsType $DeliverMeetingRequests
         */
        protected $DeliverMeetingRequests = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
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
         * @return \UUP\Exchange\Types\GetDelegateResponseMessageType
         */
        public function setDeliverMeetingRequests($DeliverMeetingRequests)
        {
                $this->DeliverMeetingRequests = $DeliverMeetingRequests;
                return $this;
        }

}
