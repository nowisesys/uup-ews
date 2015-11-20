<?php

namespace UUP\Exchange\Types;

class UnsubscribeType extends BaseRequestType
{

        /**
         * @var SubscriptionIdType $SubscriptionId
         */
        protected $SubscriptionId = null;

        /**
         * @param SubscriptionIdType $SubscriptionId
         */
        public function __construct($SubscriptionId = null)
        {
                $this->SubscriptionId = $SubscriptionId;
        }

        /**
         * @return SubscriptionIdType
         */
        public function getSubscriptionId()
        {
                return $this->SubscriptionId;
        }

        /**
         * @param SubscriptionIdType $SubscriptionId
         * @return \UUP\Exchange\Types\UnsubscribeType
         */
        public function setSubscriptionId($SubscriptionId)
        {
                $this->SubscriptionId = $SubscriptionId;
                return $this;
        }

}
