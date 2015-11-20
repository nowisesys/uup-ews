<?php

namespace UUP\Exchange\Types;

class GetStreamingEventsResponseMessageType extends ResponseMessageType
{

        /**
         * @var NonEmptyArrayOfNotificationsType $Notifications
         */
        protected $Notifications = null;
        /**
         * @var NonEmptyArrayOfSubscriptionIdsType $ErrorSubscriptionIds
         */
        protected $ErrorSubscriptionIds = null;
        /**
         * @var ConnectionStatusType $ConnectionStatus
         */
        protected $ConnectionStatus = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return NonEmptyArrayOfNotificationsType
         */
        public function getNotifications()
        {
                return $this->Notifications;
        }

        /**
         * @param NonEmptyArrayOfNotificationsType $Notifications
         * @return \UUP\Exchange\Types\GetStreamingEventsResponseMessageType
         */
        public function setNotifications($Notifications)
        {
                $this->Notifications = $Notifications;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfSubscriptionIdsType
         */
        public function getErrorSubscriptionIds()
        {
                return $this->ErrorSubscriptionIds;
        }

        /**
         * @param NonEmptyArrayOfSubscriptionIdsType $ErrorSubscriptionIds
         * @return \UUP\Exchange\Types\GetStreamingEventsResponseMessageType
         */
        public function setErrorSubscriptionIds($ErrorSubscriptionIds)
        {
                $this->ErrorSubscriptionIds = $ErrorSubscriptionIds;
                return $this;
        }

        /**
         * @return ConnectionStatusType
         */
        public function getConnectionStatus()
        {
                return $this->ConnectionStatus;
        }

        /**
         * @param ConnectionStatusType $ConnectionStatus
         * @return \UUP\Exchange\Types\GetStreamingEventsResponseMessageType
         */
        public function setConnectionStatus($ConnectionStatus)
        {
                $this->ConnectionStatus = $ConnectionStatus;
                return $this;
        }

}
