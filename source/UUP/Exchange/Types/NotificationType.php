<?php

namespace UUP\Exchange\Types;

class NotificationType
{

        /**
         * @var SubscriptionIdType $SubscriptionId
         */
        protected $SubscriptionId = null;
        /**
         * @var WatermarkType $PreviousWatermark
         */
        protected $PreviousWatermark = null;
        /**
         * @var boolean $MoreEvents
         */
        protected $MoreEvents = null;
        /**
         * @var MovedCopiedEventType $CopiedEvent
         */
        protected $CopiedEvent = null;
        /**
         * @var BaseObjectChangedEventType $CreatedEvent
         */
        protected $CreatedEvent = null;
        /**
         * @var BaseObjectChangedEventType $DeletedEvent
         */
        protected $DeletedEvent = null;
        /**
         * @var ModifiedEventType $ModifiedEvent
         */
        protected $ModifiedEvent = null;
        /**
         * @var MovedCopiedEventType $MovedEvent
         */
        protected $MovedEvent = null;
        /**
         * @var BaseObjectChangedEventType $NewMailEvent
         */
        protected $NewMailEvent = null;
        /**
         * @var BaseNotificationEventType $StatusEvent
         */
        protected $StatusEvent = null;
        /**
         * @var BaseObjectChangedEventType $FreeBusyChangedEvent
         */
        protected $FreeBusyChangedEvent = null;

        /**
         * @param SubscriptionIdType $SubscriptionId
         * @param MovedCopiedEventType $CopiedEvent
         * @param BaseObjectChangedEventType $CreatedEvent
         * @param BaseObjectChangedEventType $DeletedEvent
         * @param ModifiedEventType $ModifiedEvent
         * @param MovedCopiedEventType $MovedEvent
         * @param BaseObjectChangedEventType $NewMailEvent
         * @param BaseNotificationEventType $StatusEvent
         * @param BaseObjectChangedEventType $FreeBusyChangedEvent
         */
        public function __construct($SubscriptionId = null, $CopiedEvent = null, $CreatedEvent = null, $DeletedEvent = null, $ModifiedEvent = null, $MovedEvent = null, $NewMailEvent = null, $StatusEvent = null, $FreeBusyChangedEvent = null)
        {
                $this->SubscriptionId = $SubscriptionId;
                $this->CopiedEvent = $CopiedEvent;
                $this->CreatedEvent = $CreatedEvent;
                $this->DeletedEvent = $DeletedEvent;
                $this->ModifiedEvent = $ModifiedEvent;
                $this->MovedEvent = $MovedEvent;
                $this->NewMailEvent = $NewMailEvent;
                $this->StatusEvent = $StatusEvent;
                $this->FreeBusyChangedEvent = $FreeBusyChangedEvent;
        }

        /**
         * @return SubscriptionIdType
         */
        public function getSubscriptionId()
        {
                return $this->SubscriptionId;
        }

        /**
         * @param SubscriptionIdType $SubscriptionId
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setSubscriptionId($SubscriptionId)
        {
                $this->SubscriptionId = $SubscriptionId;
                return $this;
        }

        /**
         * @return WatermarkType
         */
        public function getPreviousWatermark()
        {
                return $this->PreviousWatermark;
        }

        /**
         * @param WatermarkType $PreviousWatermark
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setPreviousWatermark($PreviousWatermark)
        {
                $this->PreviousWatermark = $PreviousWatermark;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getMoreEvents()
        {
                return $this->MoreEvents;
        }

        /**
         * @param boolean $MoreEvents
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setMoreEvents($MoreEvents)
        {
                $this->MoreEvents = $MoreEvents;
                return $this;
        }

        /**
         * @return MovedCopiedEventType
         */
        public function getCopiedEvent()
        {
                return $this->CopiedEvent;
        }

        /**
         * @param MovedCopiedEventType $CopiedEvent
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setCopiedEvent($CopiedEvent)
        {
                $this->CopiedEvent = $CopiedEvent;
                return $this;
        }

        /**
         * @return BaseObjectChangedEventType
         */
        public function getCreatedEvent()
        {
                return $this->CreatedEvent;
        }

        /**
         * @param BaseObjectChangedEventType $CreatedEvent
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setCreatedEvent($CreatedEvent)
        {
                $this->CreatedEvent = $CreatedEvent;
                return $this;
        }

        /**
         * @return BaseObjectChangedEventType
         */
        public function getDeletedEvent()
        {
                return $this->DeletedEvent;
        }

        /**
         * @param BaseObjectChangedEventType $DeletedEvent
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setDeletedEvent($DeletedEvent)
        {
                $this->DeletedEvent = $DeletedEvent;
                return $this;
        }

        /**
         * @return ModifiedEventType
         */
        public function getModifiedEvent()
        {
                return $this->ModifiedEvent;
        }

        /**
         * @param ModifiedEventType $ModifiedEvent
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setModifiedEvent($ModifiedEvent)
        {
                $this->ModifiedEvent = $ModifiedEvent;
                return $this;
        }

        /**
         * @return MovedCopiedEventType
         */
        public function getMovedEvent()
        {
                return $this->MovedEvent;
        }

        /**
         * @param MovedCopiedEventType $MovedEvent
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setMovedEvent($MovedEvent)
        {
                $this->MovedEvent = $MovedEvent;
                return $this;
        }

        /**
         * @return BaseObjectChangedEventType
         */
        public function getNewMailEvent()
        {
                return $this->NewMailEvent;
        }

        /**
         * @param BaseObjectChangedEventType $NewMailEvent
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setNewMailEvent($NewMailEvent)
        {
                $this->NewMailEvent = $NewMailEvent;
                return $this;
        }

        /**
         * @return BaseNotificationEventType
         */
        public function getStatusEvent()
        {
                return $this->StatusEvent;
        }

        /**
         * @param BaseNotificationEventType $StatusEvent
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setStatusEvent($StatusEvent)
        {
                $this->StatusEvent = $StatusEvent;
                return $this;
        }

        /**
         * @return BaseObjectChangedEventType
         */
        public function getFreeBusyChangedEvent()
        {
                return $this->FreeBusyChangedEvent;
        }

        /**
         * @param BaseObjectChangedEventType $FreeBusyChangedEvent
         * @return \UUP\Exchange\Types\NotificationType
         */
        public function setFreeBusyChangedEvent($FreeBusyChangedEvent)
        {
                $this->FreeBusyChangedEvent = $FreeBusyChangedEvent;
                return $this;
        }

}
