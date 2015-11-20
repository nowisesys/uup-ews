<?php

namespace UUP\Exchange\Types;

class SendNotificationResultType
{

        /**
         * @var SubscriptionStatusType $SubscriptionStatus
         */
        protected $SubscriptionStatus = null;

        /**
         * @param SubscriptionStatusType $SubscriptionStatus
         */
        public function __construct($SubscriptionStatus = null)
        {
                $this->SubscriptionStatus = $SubscriptionStatus;
        }

        /**
         * @return SubscriptionStatusType
         */
        public function getSubscriptionStatus()
        {
                return $this->SubscriptionStatus;
        }

        /**
         * @param SubscriptionStatusType $SubscriptionStatus
         * @return \UUP\Exchange\Types\SendNotificationResultType
         */
        public function setSubscriptionStatus($SubscriptionStatus)
        {
                $this->SubscriptionStatus = $SubscriptionStatus;
                return $this;
        }

}
