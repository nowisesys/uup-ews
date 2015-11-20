<?php

namespace UUP\Exchange\Types;

class MessageTrackingReportType
{

        /**
         * @var EmailAddressType $Sender
         */
        protected $Sender = null;
        /**
         * @var EmailAddressType $PurportedSender
         */
        protected $PurportedSender = null;
        /**
         * @var string $Subject
         */
        protected $Subject = null;
        /**
         * @var \DateTime $SubmitTime
         */
        protected $SubmitTime = null;
        /**
         * @var ArrayOfEmailAddressesType $OriginalRecipients
         */
        protected $OriginalRecipients = null;
        /**
         * @var ArrayOfRecipientTrackingEventType $RecipientTrackingEvents
         */
        protected $RecipientTrackingEvents = null;
        /**
         * @var ArrayOfTrackingPropertiesType $Properties
         */
        protected $Properties = null;

        /**
         * @param ArrayOfRecipientTrackingEventType $RecipientTrackingEvents
         */
        public function __construct($RecipientTrackingEvents = null)
        {
                $this->RecipientTrackingEvents = $RecipientTrackingEvents;
        }

        /**
         * @return EmailAddressType
         */
        public function getSender()
        {
                return $this->Sender;
        }

        /**
         * @param EmailAddressType $Sender
         * @return \UUP\Exchange\Types\MessageTrackingReportType
         */
        public function setSender($Sender)
        {
                $this->Sender = $Sender;
                return $this;
        }

        /**
         * @return EmailAddressType
         */
        public function getPurportedSender()
        {
                return $this->PurportedSender;
        }

        /**
         * @param EmailAddressType $PurportedSender
         * @return \UUP\Exchange\Types\MessageTrackingReportType
         */
        public function setPurportedSender($PurportedSender)
        {
                $this->PurportedSender = $PurportedSender;
                return $this;
        }

        /**
         * @return string
         */
        public function getSubject()
        {
                return $this->Subject;
        }

        /**
         * @param string $Subject
         * @return \UUP\Exchange\Types\MessageTrackingReportType
         */
        public function setSubject($Subject)
        {
                $this->Subject = $Subject;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getSubmitTime()
        {
                if ($this->SubmitTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->SubmitTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $SubmitTime
         * @return \UUP\Exchange\Types\MessageTrackingReportType
         */
        public function setSubmitTime(\DateTime $SubmitTime = null)
        {
                if ($SubmitTime == null) {
                        $this->SubmitTime = null;
                } else {
                        $this->SubmitTime = $SubmitTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return ArrayOfEmailAddressesType
         */
        public function getOriginalRecipients()
        {
                return $this->OriginalRecipients;
        }

        /**
         * @param ArrayOfEmailAddressesType $OriginalRecipients
         * @return \UUP\Exchange\Types\MessageTrackingReportType
         */
        public function setOriginalRecipients($OriginalRecipients)
        {
                $this->OriginalRecipients = $OriginalRecipients;
                return $this;
        }

        /**
         * @return ArrayOfRecipientTrackingEventType
         */
        public function getRecipientTrackingEvents()
        {
                return $this->RecipientTrackingEvents;
        }

        /**
         * @param ArrayOfRecipientTrackingEventType $RecipientTrackingEvents
         * @return \UUP\Exchange\Types\MessageTrackingReportType
         */
        public function setRecipientTrackingEvents($RecipientTrackingEvents)
        {
                $this->RecipientTrackingEvents = $RecipientTrackingEvents;
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
         * @return \UUP\Exchange\Types\MessageTrackingReportType
         */
        public function setProperties($Properties)
        {
                $this->Properties = $Properties;
                return $this;
        }

}
