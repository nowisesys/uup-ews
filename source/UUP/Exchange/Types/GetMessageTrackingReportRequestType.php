<?php

namespace UUP\Exchange\Types;

class GetMessageTrackingReportRequestType extends BaseRequestType
{

        /**
         * @var NonEmptyStringType $Scope
         */
        protected $Scope = null;
        /**
         * @var MessageTrackingReportTemplateType $ReportTemplate
         */
        protected $ReportTemplate = null;
        /**
         * @var EmailAddressType $RecipientFilter
         */
        protected $RecipientFilter = null;
        /**
         * @var NonEmptyStringType $MessageTrackingReportId
         */
        protected $MessageTrackingReportId = null;
        /**
         * @var boolean $ReturnQueueEvents
         */
        protected $ReturnQueueEvents = null;
        /**
         * @var string $DiagnosticsLevel
         */
        protected $DiagnosticsLevel = null;
        /**
         * @var ArrayOfTrackingPropertiesType $Properties
         */
        protected $Properties = null;

        /**
         * @param NonEmptyStringType $Scope
         * @param MessageTrackingReportTemplateType $ReportTemplate
         * @param NonEmptyStringType $MessageTrackingReportId
         */
        public function __construct($Scope = null, $ReportTemplate = null, $MessageTrackingReportId = null)
        {
                $this->Scope = $Scope;
                $this->ReportTemplate = $ReportTemplate;
                $this->MessageTrackingReportId = $MessageTrackingReportId;
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
         * @return \UUP\Exchange\Types\GetMessageTrackingReportRequestType
         */
        public function setScope($Scope)
        {
                $this->Scope = $Scope;
                return $this;
        }

        /**
         * @return MessageTrackingReportTemplateType
         */
        public function getReportTemplate()
        {
                return $this->ReportTemplate;
        }

        /**
         * @param MessageTrackingReportTemplateType $ReportTemplate
         * @return \UUP\Exchange\Types\GetMessageTrackingReportRequestType
         */
        public function setReportTemplate($ReportTemplate)
        {
                $this->ReportTemplate = $ReportTemplate;
                return $this;
        }

        /**
         * @return EmailAddressType
         */
        public function getRecipientFilter()
        {
                return $this->RecipientFilter;
        }

        /**
         * @param EmailAddressType $RecipientFilter
         * @return \UUP\Exchange\Types\GetMessageTrackingReportRequestType
         */
        public function setRecipientFilter($RecipientFilter)
        {
                $this->RecipientFilter = $RecipientFilter;
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
         * @return \UUP\Exchange\Types\GetMessageTrackingReportRequestType
         */
        public function setMessageTrackingReportId($MessageTrackingReportId)
        {
                $this->MessageTrackingReportId = $MessageTrackingReportId;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getReturnQueueEvents()
        {
                return $this->ReturnQueueEvents;
        }

        /**
         * @param boolean $ReturnQueueEvents
         * @return \UUP\Exchange\Types\GetMessageTrackingReportRequestType
         */
        public function setReturnQueueEvents($ReturnQueueEvents)
        {
                $this->ReturnQueueEvents = $ReturnQueueEvents;
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
         * @return \UUP\Exchange\Types\GetMessageTrackingReportRequestType
         */
        public function setDiagnosticsLevel($DiagnosticsLevel)
        {
                $this->DiagnosticsLevel = $DiagnosticsLevel;
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
         * @return \UUP\Exchange\Types\GetMessageTrackingReportRequestType
         */
        public function setProperties($Properties)
        {
                $this->Properties = $Properties;
                return $this;
        }

}
