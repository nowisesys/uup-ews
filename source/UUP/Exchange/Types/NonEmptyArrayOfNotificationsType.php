<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfNotificationsType
{

        /**
         * @var NotificationType[] $Notification
         */
        protected $Notification = null;

        public function __construct()
        {
                
        }

        /**
         * @return NotificationType[]
         */
        public function getNotification()
        {
                return $this->Notification;
        }

        /**
         * @param NotificationType[] $Notification
         * @return \UUP\Exchange\Types\NonEmptyArrayOfNotificationsType
         */
        public function setNotification(array $Notification = null)
        {
                $this->Notification = $Notification;
                return $this;
        }

}
