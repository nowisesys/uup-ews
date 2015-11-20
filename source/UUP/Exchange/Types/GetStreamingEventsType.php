<?php

namespace UUP\Exchange\Types;

class GetStreamingEventsType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfSubscriptionIdsType $SubscriptionIds
         */
        protected $SubscriptionIds = null;
        /**
         * @var StreamingSubscriptionConnectionTimeoutType $ConnectionTimeout
         */
        protected $ConnectionTimeout = null;

        /**
         * @param NonEmptyArrayOfSubscriptionIdsType $SubscriptionIds
         * @param StreamingSubscriptionConnectionTimeoutType $ConnectionTimeout
         */
        public function __construct($SubscriptionIds = null, $ConnectionTimeout = null)
        {
                $this->SubscriptionIds = $SubscriptionIds;
                $this->ConnectionTimeout = $ConnectionTimeout;
        }

        /**
         * @return NonEmptyArrayOfSubscriptionIdsType
         */
        public function getSubscriptionIds()
        {
                return $this->SubscriptionIds;
        }

        /**
         * @param NonEmptyArrayOfSubscriptionIdsType $SubscriptionIds
         * @return \UUP\Exchange\Types\GetStreamingEventsType
         */
        public function setSubscriptionIds($SubscriptionIds)
        {
                $this->SubscriptionIds = $SubscriptionIds;
                return $this;
        }

        /**
         * @return StreamingSubscriptionConnectionTimeoutType
         */
        public function getConnectionTimeout()
        {
                return $this->ConnectionTimeout;
        }

        /**
         * @param StreamingSubscriptionConnectionTimeoutType $ConnectionTimeout
         * @return \UUP\Exchange\Types\GetStreamingEventsType
         */
        public function setConnectionTimeout($ConnectionTimeout)
        {
                $this->ConnectionTimeout = $ConnectionTimeout;
                return $this;
        }

}
