<?php

namespace UUP\Exchange\Types;

class FindMessageTrackingSearchResultType
{

        /**
         * @var string $Subject
         */
        protected $Subject = null;
        /**
         * @var EmailAddressType $Sender
         */
        protected $Sender = null;
        /**
         * @var EmailAddressType $PurportedSender
         */
        protected $PurportedSender = null;
        /**
         * @var ArrayOfRecipientsType $Recipients
         */
        protected $Recipients = null;
        /**
         * @var \DateTime $SubmittedTime
         */
        protected $SubmittedTime = null;
        /**
         * @var NonEmptyStringType $MessageTrackingReportId
         */
        protected $MessageTrackingReportId = null;
        /**
         * @var NonEmptyStringType $PreviousHopServer
         */
        protected $PreviousHopServer = null;
        /**
         * @var NonEmptyStringType $FirstHopServer
         */
        protected $FirstHopServer = null;
        /**
         * @var ArrayOfTrackingPropertiesType $Properties
         */
        protected $Properties = null;

        /**
         * @param string $Subject
         * @param EmailAddressType $Sender
         * @param ArrayOfRecipientsType $Recipients
         * @param \DateTime $SubmittedTime
         * @param NonEmptyStringType $MessageTrackingReportId
         */
        public function __construct($Subject = null, $Sender = null, $Recipients = null, \DateTime $SubmittedTime = null, $MessageTrackingReportId = null)
        {
                $this->Subject = $Subject;
                $this->Sender = $Sender;
                $this->Recipients = $Recipients;
                $this->SubmittedTime = $SubmittedTime ? $SubmittedTime->format(\DateTime::ATOM) : null;
                $this->MessageTrackingReportId = $MessageTrackingReportId;
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
         * @return \UUP\Exchange\Types\FindMessageTrackingSearchResultType
         */
        public function setSubject($Subject)
        {
                $this->Subject = $Subject;
                return $this;
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
         * @return \UUP\Exchange\Types\FindMessageTrackingSearchResultType
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
         * @return \UUP\Exchange\Types\FindMessageTrackingSearchResultType
         */
        public function setPurportedSender($PurportedSender)
        {
                $this->PurportedSender = $PurportedSender;
                return $this;
        }

        /**
         * @return ArrayOfRecipientsType
         */
        public function getRecipients()
        {
                return $this->Recipients;
        }

        /**
         * @param ArrayOfRecipientsType $Recipients
         * @return \UUP\Exchange\Types\FindMessageTrackingSearchResultType
         */
        public function setRecipients($Recipients)
        {
                $this->Recipients = $Recipients;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getSubmittedTime()
        {
                if ($this->SubmittedTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->SubmittedTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $SubmittedTime
         * @return \UUP\Exchange\Types\FindMessageTrackingSearchResultType
         */
        public function setSubmittedTime(\DateTime $SubmittedTime)
        {
                $this->SubmittedTime = $SubmittedTime->format(\DateTime::ATOM);
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getMessageTrackingReportId()
        {
                return $this->MessageTrackingReportId;
        }

        /**
         * @param NonEmptyStringType $MessageTrackingReportId
         * @return \UUP\Exchange\Types\FindMessageTrackingSearchResultType
         */
        public function setMessageTrackingReportId($MessageTrackingReportId)
        {
                $this->MessageTrackingReportId = $MessageTrackingReportId;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getPreviousHopServer()
        {
                return $this->PreviousHopServer;
        }

        /**
         * @param NonEmptyStringType $PreviousHopServer
         * @return \UUP\Exchange\Types\FindMessageTrackingSearchResultType
         */
        public function setPreviousHopServer($PreviousHopServer)
        {
                $this->PreviousHopServer = $PreviousHopServer;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getFirstHopServer()
        {
                return $this->FirstHopServer;
        }

        /**
         * @param NonEmptyStringType $FirstHopServer
         * @return \UUP\Exchange\Types\FindMessageTrackingSearchResultType
         */
        public function setFirstHopServer($FirstHopServer)
        {
                $this->FirstHopServer = $FirstHopServer;
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
         * @return \UUP\Exchange\Types\FindMessageTrackingSearchResultType
         */
        public function setProperties($Properties)
        {
                $this->Properties = $Properties;
                return $this;
        }

}
