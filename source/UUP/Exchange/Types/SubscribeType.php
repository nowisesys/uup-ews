<?php

namespace UUP\Exchange\Types;

class SubscribeType extends BaseRequestType
{

        /**
         * @var PullSubscriptionRequestType $PullSubscriptionRequest
         */
        protected $PullSubscriptionRequest = null;
        /**
         * @var PushSubscriptionRequestType $PushSubscriptionRequest
         */
        protected $PushSubscriptionRequest = null;
        /**
         * @var StreamingSubscriptionRequestType $StreamingSubscriptionRequest
         */
        protected $StreamingSubscriptionRequest = null;

        /**
         * @param PullSubscriptionRequestType $PullSubscriptionRequest
         * @param PushSubscriptionRequestType $PushSubscriptionRequest
         * @param StreamingSubscriptionRequestType $StreamingSubscriptionRequest
         */
        public function __construct($PullSubscriptionRequest = null, $PushSubscriptionRequest = null, $StreamingSubscriptionRequest = null)
        {
                $this->PullSubscriptionRequest = $PullSubscriptionRequest;
                $this->PushSubscriptionRequest = $PushSubscriptionRequest;
                $this->StreamingSubscriptionRequest = $StreamingSubscriptionRequest;
        }

        /**
         * @return PullSubscriptionRequestType
         */
        public function getPullSubscriptionRequest()
        {
                return $this->PullSubscriptionRequest;
        }

        /**
         * @param PullSubscriptionRequestType $PullSubscriptionRequest
         * @return \UUP\Exchange\Types\SubscribeType
         */
        public function setPullSubscriptionRequest($PullSubscriptionRequest)
        {
                $this->PullSubscriptionRequest = $PullSubscriptionRequest;
                return $this;
        }

        /**
         * @return PushSubscriptionRequestType
         */
        public function getPushSubscriptionRequest()
        {
                return $this->PushSubscriptionRequest;
        }

        /**
         * @param PushSubscriptionRequestType $PushSubscriptionRequest
         * @return \UUP\Exchange\Types\SubscribeType
         */
        public function setPushSubscriptionRequest($PushSubscriptionRequest)
        {
                $this->PushSubscriptionRequest = $PushSubscriptionRequest;
                return $this;
        }

        /**
         * @return StreamingSubscriptionRequestType
         */
        public function getStreamingSubscriptionRequest()
        {
                return $this->StreamingSubscriptionRequest;
        }

        /**
         * @param StreamingSubscriptionRequestType $StreamingSubscriptionRequest
         * @return \UUP\Exchange\Types\SubscribeType
         */
        public function setStreamingSubscriptionRequest($StreamingSubscriptionRequest)
        {
                $this->StreamingSubscriptionRequest = $StreamingSubscriptionRequest;
                return $this;
        }

}
