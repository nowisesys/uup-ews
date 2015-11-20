<?php

namespace UUP\Exchange\Types;

class SendNotificationResponseMessageType extends ResponseMessageType
{

        /**
         * @var NotificationType $Notification
         */
        protected $Notification = null;

        /**
         * @param ResponseClassType $ResponseClass
         * @param NotificationType $Notification
         */
        public function __construct($ResponseClass = null, $Notification = null)
        {
                parent::__construct($ResponseClass);
                $this->Notification = $Notification;
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
         * @return \UUP\Exchange\Types\SendNotificationResponseMessageType
         */
        public function setNotification($Notification)
        {
                $this->Notification = $Notification;
                return $this;
        }

}
