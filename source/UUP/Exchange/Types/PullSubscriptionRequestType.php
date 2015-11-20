<?php

namespace UUP\Exchange\Types;

class PullSubscriptionRequestType extends BaseSubscriptionRequestType
{

        /**
         * @var SubscriptionTimeoutType $Timeout
         */
        protected $Timeout = null;

        /**
         * @param NonEmptyArrayOfNotificationEventTypesType $EventTypes
         * @param boolean $SubscribeToAllFolders
         * @param SubscriptionTimeoutType $Timeout
         */
        public function __construct($EventTypes = null, $SubscribeToAllFolders = null, $Timeout = null)
        {
                parent::__construct($EventTypes, $SubscribeToAllFolders);
                $this->Timeout = $Timeout;
        }

        /**
         * @return SubscriptionTimeoutType
         */
        public function getTimeout()
        {
                return $this->Timeout;
        }

        /**
         * @param SubscriptionTimeoutType $Timeout
         * @return \UUP\Exchange\Types\PullSubscriptionRequestType
         */
        public function setTimeout($Timeout)
        {
                $this->Timeout = $Timeout;
                return $this;
        }

}
