<?php

namespace UUP\Exchange\Types;

class RecipientTrackingEventType
{

        /**
         * @var \DateTime $Date
         */
        protected $Date = null;
        /**
         * @var EmailAddressType $Recipient
         */
        protected $Recipient = null;
        /**
         * @var string $DeliveryStatus
         */
        protected $DeliveryStatus = null;
        /**
         * @var string $EventDescription
         */
        protected $EventDescription = null;
        /**
         * @var ArrayOfStringsType $EventData
         */
        protected $EventData = null;
        /**
         * @var NonEmptyStringType $Server
         */
        protected $Server = null;
        /**
         * @var int $InternalId
         */
        protected $InternalId = null;
        /**
         * @var boolean $BccRecipient
         */
        protected $BccRecipient = null;
        /**
         * @var boolean $HiddenRecipient
         */
        protected $HiddenRecipient = null;
        /**
         * @var NonEmptyStringType $UniquePathId
         */
        protected $UniquePathId = null;
        /**
         * @var NonEmptyStringType $RootAddress
         */
        protected $RootAddress = null;
        /**
         * @var ArrayOfTrackingPropertiesType $Properties
         */
        protected $Properties = null;

        /**
         * @param \DateTime $Date
         * @param EmailAddressType $Recipient
         * @param string $DeliveryStatus
         * @param string $EventDescription
         * @param NonEmptyStringType $Server
         * @param int $InternalId
         */
        public function __construct(\DateTime $Date = null, $Recipient = null, $DeliveryStatus = null, $EventDescription = null, $Server = null, $InternalId = null)
        {
                $this->Date = $Date ? $Date->format(\DateTime::ATOM) : null;
                $this->Recipient = $Recipient;
                $this->DeliveryStatus = $DeliveryStatus;
                $this->EventDescription = $EventDescription;
                $this->Server = $Server;
                $this->InternalId = $InternalId;
        }

        /**
         * @return \DateTime
         */
        public function getDate()
        {
                if ($this->Date == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->Date);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $Date
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setDate(\DateTime $Date)
        {
                $this->Date = $Date->format(\DateTime::ATOM);
                return $this;
        }

        /**
         * @return EmailAddressType
         */
        public function getRecipient()
        {
                return $this->Recipient;
        }

        /**
         * @param EmailAddressType $Recipient
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setRecipient($Recipient)
        {
                $this->Recipient = $Recipient;
                return $this;
        }

        /**
         * @return string
         */
        public function getDeliveryStatus()
        {
                return $this->DeliveryStatus;
        }

        /**
         * @param string $DeliveryStatus
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setDeliveryStatus($DeliveryStatus)
        {
                $this->DeliveryStatus = $DeliveryStatus;
                return $this;
        }

        /**
         * @return string
         */
        public function getEventDescription()
        {
                return $this->EventDescription;
        }

        /**
         * @param string $EventDescription
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setEventDescription($EventDescription)
        {
                $this->EventDescription = $EventDescription;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getEventData()
        {
                return $this->EventData;
        }

        /**
         * @param ArrayOfStringsType $EventData
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setEventData($EventData)
        {
                $this->EventData = $EventData;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getServer()
        {
                return $this->Server;
        }

        /**
         * @param NonEmptyStringType $Server
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setServer($Server)
        {
                $this->Server = $Server;
                return $this;
        }

        /**
         * @return int
         */
        public function getInternalId()
        {
                return $this->InternalId;
        }

        /**
         * @param int $InternalId
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setInternalId($InternalId)
        {
                $this->InternalId = $InternalId;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getBccRecipient()
        {
                return $this->BccRecipient;
        }

        /**
         * @param boolean $BccRecipient
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setBccRecipient($BccRecipient)
        {
                $this->BccRecipient = $BccRecipient;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getHiddenRecipient()
        {
                return $this->HiddenRecipient;
        }

        /**
         * @param boolean $HiddenRecipient
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setHiddenRecipient($HiddenRecipient)
        {
                $this->HiddenRecipient = $HiddenRecipient;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getUniquePathId()
        {
                return $this->UniquePathId;
        }

        /**
         * @param NonEmptyStringType $UniquePathId
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setUniquePathId($UniquePathId)
        {
                $this->UniquePathId = $UniquePathId;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getRootAddress()
        {
                return $this->RootAddress;
        }

        /**
         * @param NonEmptyStringType $RootAddress
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setRootAddress($RootAddress)
        {
                $this->RootAddress = $RootAddress;
                return $this;
        }

        /**
         * @return ArrayOfTrackingPropertiesType
         */
        public function getProperties()
        {
                return $this->Properties;
        }

        /**
         * @param ArrayOfTrackingPropertiesType $Properties
         * @return \UUP\Exchange\Types\RecipientTrackingEventType
         */
        public function setProperties($Properties)
        {
                $this->Properties = $Properties;
                return $this;
        }

}
