<?php

namespace UUP\Exchange\Types;

class FindMessageTrackingReportRequestType extends BaseRequestType
{

        /**
         * @var NonEmptyStringType $Scope
         */
        protected $Scope = null;
        /**
         * @var NonEmptyStringType $Domain
         */
        protected $Domain = null;
        /**
         * @var EmailAddressType $Sender
         */
        protected $Sender = null;
        /**
         * @var EmailAddressType $PurportedSender
         */
        protected $PurportedSender = null;
        /**
         * @var EmailAddressType $Recipient
         */
        protected $Recipient = null;
        /**
         * @var string $Subject
         */
        protected $Subject = null;
        /**
         * @var \DateTime $StartDateTime
         */
        protected $StartDateTime = null;
        /**
         * @var \DateTime $EndDateTime
         */
        protected $EndDateTime = null;
        /**
         * @var NonEmptyStringType $MessageId
         */
        protected $MessageId = null;
        /**
         * @var EmailAddressType $FederatedDeliveryMailbox
         */
        protected $FederatedDeliveryMailbox = null;
        /**
         * @var string $DiagnosticsLevel
         */
        protected $DiagnosticsLevel = null;
        /**
         * @var string $ServerHint
         */
        protected $ServerHint = null;
        /**
         * @var ArrayOfTrackingPropertiesType $Properties
         */
        protected $Properties = null;

        /**
         * @param NonEmptyStringType $Scope
         * @param NonEmptyStringType $Domain
         */
        public function __construct($Scope = null, $Domain = null)
        {
                $this->Scope = $Scope;
                $this->Domain = $Domain;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getScope()
        {
                return $this->Scope;
        }

        /**
         * @param NonEmptyStringType $Scope
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setScope($Scope)
        {
                $this->Scope = $Scope;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getDomain()
        {
                return $this->Domain;
        }

        /**
         * @param NonEmptyStringType $Domain
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setDomain($Domain)
        {
                $this->Domain = $Domain;
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
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
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
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setPurportedSender($PurportedSender)
        {
                $this->PurportedSender = $PurportedSender;
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
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setRecipient($Recipient)
        {
                $this->Recipient = $Recipient;
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
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setSubject($Subject)
        {
                $this->Subject = $Subject;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getStartDateTime()
        {
                if ($this->StartDateTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->StartDateTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $StartDateTime
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setStartDateTime(\DateTime $StartDateTime = null)
        {
                if ($StartDateTime == null) {
                        $this->StartDateTime = null;
                } else {
                        $this->StartDateTime = $StartDateTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getEndDateTime()
        {
                if ($this->EndDateTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->EndDateTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $EndDateTime
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setEndDateTime(\DateTime $EndDateTime = null)
        {
                if ($EndDateTime == null) {
                        $this->EndDateTime = null;
                } else {
                        $this->EndDateTime = $EndDateTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getMessageId()
        {
                return $this->MessageId;
        }

        /**
         * @param NonEmptyStringType $MessageId
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setMessageId($MessageId)
        {
                $this->MessageId = $MessageId;
                return $this;
        }

        /**
         * @return EmailAddressType
         */
        public function getFederatedDeliveryMailbox()
        {
                return $this->FederatedDeliveryMailbox;
        }

        /**
         * @param EmailAddressType $FederatedDeliveryMailbox
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setFederatedDeliveryMailbox($FederatedDeliveryMailbox)
        {
                $this->FederatedDeliveryMailbox = $FederatedDeliveryMailbox;
                return $this;
        }

        /**
         * @return string
         */
        public function getDiagnosticsLevel()
        {
                return $this->DiagnosticsLevel;
        }

        /**
         * @param string $DiagnosticsLevel
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setDiagnosticsLevel($DiagnosticsLevel)
        {
                $this->DiagnosticsLevel = $DiagnosticsLevel;
                return $this;
        }

        /**
         * @return string
         */
        public function getServerHint()
        {
                return $this->ServerHint;
        }

        /**
         * @param string $ServerHint
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setServerHint($ServerHint)
        {
                $this->ServerHint = $ServerHint;
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
         * @return \UUP\Exchange\Types\FindMessageTrackingReportRequestType
         */
        public function setProperties($Properties)
        {
                $this->Properties = $Properties;
                return $this;
        }

}
