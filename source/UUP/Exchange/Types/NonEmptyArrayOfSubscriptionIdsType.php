<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfSubscriptionIdsType
{

        /**
         * @var SubscriptionIdType[] $SubscriptionId
         */
        protected $SubscriptionId = null;

        /**
         * @param SubscriptionIdType[] $SubscriptionId
         */
        public function __construct(array $SubscriptionId = null)
        {
                $this->SubscriptionId = $SubscriptionId;
        }

        /**
         * @return SubscriptionIdType[]
         */
        public function getSubscriptionId()
        {
                return $this->SubscriptionId;
        }

        /**
         * @param SubscriptionIdType[] $SubscriptionId
         * @return \UUP\Exchange\Types\NonEmptyArrayOfSubscriptionIdsType
         */
        public function setSubscriptionId(array $SubscriptionId)
        {
                $this->SubscriptionId = $SubscriptionId;
                return $this;
        }

}
