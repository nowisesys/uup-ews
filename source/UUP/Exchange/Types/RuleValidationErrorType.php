<?php

namespace UUP\Exchange\Types;

class RuleValidationErrorType
{

        /**
         * @var RuleFieldURIType $FieldURI
         */
        protected $FieldURI = null;
        /**
         * @var RuleValidationErrorCodeType $ErrorCode
         */
        protected $ErrorCode = null;
        /**
         * @var string $ErrorMessage
         */
        protected $ErrorMessage = null;
        /**
         * @var string $FieldValue
         */
        protected $FieldValue = null;

        /**
         * @param RuleFieldURIType $FieldURI
         * @param RuleValidationErrorCodeType $ErrorCode
         * @param string $ErrorMessage
         * @param string $FieldValue
         */
        public function __construct($FieldURI = null, $ErrorCode = null, $ErrorMessage = null, $FieldValue = null)
        {
                $this->FieldURI = $FieldURI;
                $this->ErrorCode = $ErrorCode;
                $this->ErrorMessage = $ErrorMessage;
                $this->FieldValue = $FieldValue;
        }

        /**
         * @return RuleFieldURIType
         */
        public function getFieldURI()
        {
                return $this->FieldURI;
        }

        /**
         * @param RuleFieldURIType $FieldURI
         * @return \UUP\Exchange\Types\RuleValidationErrorType
         */
        public function setFieldURI($FieldURI)
        {
                $this->FieldURI = $FieldURI;
                return $this;
        }

        /**
         * @return RuleValidationErrorCodeType
         */
        public function getErrorCode()
        {
                return $this->ErrorCode;
        }

        /**
         * @param RuleValidationErrorCodeType $ErrorCode
         * @return \UUP\Exchange\Types\RuleValidationErrorType
         */
        public function setErrorCode($ErrorCode)
        {
                $this->ErrorCode = $ErrorCode;
                return $this;
        }

        /**
         * @return string
         */
        public function getErrorMessage()
        {
                return $this->ErrorMessage;
        }

        /**
         * @param string $ErrorMessage
         * @return \UUP\Exchange\Types\RuleValidationErrorType
         */
        public function setErrorMessage($ErrorMessage)
        {
                $this->ErrorMessage = $ErrorMessage;
                return $this;
        }

        /**
         * @return string
         */
        public function getFieldValue()
        {
                return $this->FieldValue;
        }

        /**
         * @param string $FieldValue
         * @return \UUP\Exchange\Types\RuleValidationErrorType
         */
        public function setFieldValue($FieldValue)
        {
                $this->FieldValue = $FieldValue;
                return $this;
        }

}
