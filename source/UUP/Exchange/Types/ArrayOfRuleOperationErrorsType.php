<?php

namespace UUP\Exchange\Types;

class ArrayOfRuleOperationErrorsType
{

        /**
         * @var RuleOperationErrorType[] $RuleOperationError
         */
        protected $RuleOperationError = null;

        /**
         * @param RuleOperationErrorType[] $RuleOperationError
         */
        public function __construct(array $RuleOperationError = null)
        {
                $this->RuleOperationError = $RuleOperationError;
        }

        /**
         * @return RuleOperationErrorType[]
         */
        public function getRuleOperationError()
        {
                return $this->RuleOperationError;
        }

        /**
         * @param RuleOperationErrorType[] $RuleOperationError
         * @return \UUP\Exchange\Types\ArrayOfRuleOperationErrorsType
         */
        public function setRuleOperationError(array $RuleOperationError)
        {
                $this->RuleOperationError = $RuleOperationError;
                return $this;
        }

}
