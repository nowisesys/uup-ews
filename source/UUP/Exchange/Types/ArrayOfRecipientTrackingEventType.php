<?php

namespace UUP\Exchange\Types;

class ArrayOfRecipientTrackingEventType
{

        /**
         * @var RecipientTrackingEventType $RecipientTrackingEvent
         */
        protected $RecipientTrackingEvent = null;

        /**
         * @param RecipientTrackingEventType $RecipientTrackingEvent
         */
        public function __construct($RecipientTrackingEvent = null)
        {
                $this->RecipientTrackingEvent = $RecipientTrackingEvent;
        }

        /**
         * @return RecipientTrackingEventType
         */
        public function getRecipientTrackingEvent()
        {
                return $this->RecipientTrackingEvent;
        }

        /**
         * @param RecipientTrackingEventType $RecipientTrackingEvent
         * @return \UUP\Exchange\Types\ArrayOfRecipientTrackingEventType
         */
        public function setRecipientTrackingEvent($RecipientTrackingEvent)
        {
                $this->RecipientTrackingEvent = $RecipientTrackingEvent;
                return $this;
        }

}
