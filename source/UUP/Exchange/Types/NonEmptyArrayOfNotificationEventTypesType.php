<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfNotificationEventTypesType
{

        /**
         * @var NotificationEventTypeType $EventType
         */
        protected $EventType = null;

        /**
         * @param NotificationEventTypeType $EventType
         */
        public function __construct($EventType = null)
        {
                $this->EventType = $EventType;
        }

        /**
         * @return NotificationEventTypeType
         */
        public function getEventType()
        {
                return $this->EventType;
        }

        /**
         * @param NotificationEventTypeType $EventType
         * @return \UUP\Exchange\Types\NonEmptyArrayOfNotificationEventTypesType
         */
        public function setEventType($EventType)
        {
                $this->EventType = $EventType;
                return $this;
        }

}
