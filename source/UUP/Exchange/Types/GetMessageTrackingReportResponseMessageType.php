<?php

namespace UUP\Exchange\Types;

class GetMessageTrackingReportResponseMessageType extends ResponseMessageType
{

        /**
         * @var MessageTrackingReportType $MessageTrackingReport
         */
        protected $MessageTrackingReport = null;
        /**
         * @var ArrayOfStringsType $Diagnostics
         */
        protected $Diagnostics = null;
        /**
         * @var ArrayOfArraysOfTrackingPropertiesType $Errors
         */
        protected $Errors = null;
        /**
         * @var ArrayOfTrackingPropertiesType $Properties
         */
        protected $Properties = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return MessageTrackingReportType
         */
        public function getMessageTrackingReport()
        {
                return $this->MessageTrackingReport;
        }

        /**
         * @param MessageTrackingReportType $MessageTrackingReport
         * @return \UUP\Exchange\Types\GetMessageTrackingReportResponseMessageType
         */
        public function setMessageTrackingReport($MessageTrackingReport)
        {
                $this->MessageTrackingReport = $MessageTrackingReport;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getDiagnostics()
        {
                return $this->Diagnostics;
        }

        /**
         * @param ArrayOfStringsType $Diagnostics
         * @return \UUP\Exchange\Types\GetMessageTrackingReportResponseMessageType
         */
        public function setDiagnostics($Diagnostics)
        {
                $this->Diagnostics = $Diagnostics;
                return $this;
        }

        /**
         * @return ArrayOfArraysOfTrackingPropertiesType
         */
        public function getErrors()
        {
                return $this->Errors;
        }

        /**
         * @param ArrayOfArraysOfTrackingPropertiesType $Errors
         * @return \UUP\Exchange\Types\GetMessageTrackingReportResponseMessageType
         */
        public function setErrors($Errors)
        {
                $this->Errors = $Errors;
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
         * @return \UUP\Exchange\Types\GetMessageTrackingReportResponseMessageType
         */
        public function setProperties($Properties)
        {
                $this->Properties = $Properties;
                return $this;
        }

}
