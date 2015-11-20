<?php

namespace UUP\Exchange\Types;

class FindMessageTrackingReportResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfStringsType $Diagnostics
         */
        protected $Diagnostics = null;
        /**
         * @var ArrayOfFindMessageTrackingSearchResultType $MessageTrackingSearchResults
         */
        protected $MessageTrackingSearchResults = null;
        /**
         * @var string $ExecutedSearchScope
         */
        protected $ExecutedSearchScope = null;
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
         * @return ArrayOfStringsType
         */
        public function getDiagnostics()
        {
                return $this->Diagnostics;
        }

        /**
         * @param ArrayOfStringsType $Diagnostics
         * @return \UUP\Exchange\Types\FindMessageTrackingReportResponseMessageType
         */
        public function setDiagnostics($Diagnostics)
        {
                $this->Diagnostics = $Diagnostics;
                return $this;
        }

        /**
         * @return ArrayOfFindMessageTrackingSearchResultType
         */
        public function getMessageTrackingSearchResults()
        {
                return $this->MessageTrackingSearchResults;
        }

        /**
         * @param ArrayOfFindMessageTrackingSearchResultType $MessageTrackingSearchResults
         * @return \UUP\Exchange\Types\FindMessageTrackingReportResponseMessageType
         */
        public function setMessageTrackingSearchResults($MessageTrackingSearchResults)
        {
                $this->MessageTrackingSearchResults = $MessageTrackingSearchResults;
                return $this;
        }

        /**
         * @return string
         */
        public function getExecutedSearchScope()
        {
                return $this->ExecutedSearchScope;
        }

        /**
         * @param string $ExecutedSearchScope
         * @return \UUP\Exchange\Types\FindMessageTrackingReportResponseMessageType
         */
        public function setExecutedSearchScope($ExecutedSearchScope)
        {
                $this->ExecutedSearchScope = $ExecutedSearchScope;
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
         * @return \UUP\Exchange\Types\FindMessageTrackingReportResponseMessageType
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
         * @return \UUP\Exchange\Types\FindMessageTrackingReportResponseMessageType
         */
        public function setProperties($Properties)
        {
                $this->Properties = $Properties;
                return $this;
        }

}
