<?php

namespace UUP\Exchange\Types;

class GetEventsResponseMessageType extends ResponseMessageType
{

        /**
         * @var NotificationType $Notification
         */
        protected $Notification = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return NotificationType
         */
        public function getNotification()
        {
                return $this->Notification;
        }

        /**
         * @param NotificationType $Notification
         * @return \UUP\Exchange\Types\GetEventsResponseMessageType
         */
        public function setNotification($Notification)
        {
                $this->Notification = $Notification;
                return $this;
        }

}
