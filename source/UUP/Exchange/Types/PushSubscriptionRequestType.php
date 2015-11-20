<?php

namespace UUP\Exchange\Types;

class PushSubscriptionRequestType extends BaseSubscriptionRequestType
{

        /**
         * @var SubscriptionStatusFrequencyType $StatusFrequency
         */
        protected $StatusFrequency = null;
        /**
         * @var string $URL
         */
        protected $URL = null;

        /**
         * @param NonEmptyArrayOfNotificationEventTypesType $EventTypes
         * @param boolean $SubscribeToAllFolders
         * @param SubscriptionStatusFrequencyType $StatusFrequency
         * @param string $URL
         */
        public function __construct($EventTypes = null, $SubscribeToAllFolders = null, $StatusFrequency = null, $URL = null)
        {
                parent::__construct($EventTypes, $SubscribeToAllFolders);
                $this->StatusFrequency = $StatusFrequency;
                $this->URL = $URL;
        }

        /**
         * @return SubscriptionStatusFrequencyType
         */
        public function getStatusFrequency()
        {
                return $this->StatusFrequency;
        }

        /**
         * @param SubscriptionStatusFrequencyType $StatusFrequency
         * @return \UUP\Exchange\Types\PushSubscriptionRequestType
         */
        public function setStatusFrequency($StatusFrequency)
        {
                $this->StatusFrequency = $StatusFrequency;
                return $this;
        }

        /**
         * @return string
         */
        public function getURL()
        {
                return $this->URL;
        }

        /**
         * @param string $URL
         * @return \UUP\Exchange\Types\PushSubscriptionRequestType
         */
        public function setURL($URL)
        {
                $this->URL = $URL;
                return $this;
        }

}
