<?php

namespace UUP\Exchange\Types;

class RuleOperationErrorType
{

        /**
         * @var int $OperationIndex
         */
        protected $OperationIndex = null;
        /**
         * @var ArrayOfRuleValidationErrorsType $ValidationErrors
         */
        protected $ValidationErrors = null;

        /**
         * @param int $OperationIndex
         * @param ArrayOfRuleValidationErrorsType $ValidationErrors
         */
        public function __construct($OperationIndex = null, $ValidationErrors = null)
        {
                $this->OperationIndex = $OperationIndex;
                $this->ValidationErrors = $ValidationErrors;
        }

        /**
         * @return int
         */
        public function getOperationIndex()
        {
                return $this->OperationIndex;
        }

        /**
         * @param int $OperationIndex
         * @return \UUP\Exchange\Types\RuleOperationErrorType
         */
        public function setOperationIndex($OperationIndex)
        {
                $this->OperationIndex = $OperationIndex;
                return $this;
        }

        /**
         * @return ArrayOfRuleValidationErrorsType
         */
        public function getValidationErrors()
        {
                return $this->ValidationErrors;
        }

        /**
         * @param ArrayOfRuleValidationErrorsType $ValidationErrors
         * @return \UUP\Exchange\Types\RuleOperationErrorType
         */
        public function setValidationErrors($ValidationErrors)
        {
                $this->ValidationErrors = $ValidationErrors;
                return $this;
        }

}
