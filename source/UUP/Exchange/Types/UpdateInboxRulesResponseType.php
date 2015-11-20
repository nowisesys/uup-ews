<?php

namespace UUP\Exchange\Types;

class UpdateInboxRulesResponseType extends ResponseMessageType
{

        /**
         * @var ArrayOfRuleOperationErrorsType $RuleOperationErrors
         */
        protected $RuleOperationErrors = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return ArrayOfRuleOperationErrorsType
         */
        public function getRuleOperationErrors()
        {
                return $this->RuleOperationErrors;
        }

        /**
         * @param ArrayOfRuleOperationErrorsType $RuleOperationErrors
         * @return \UUP\Exchange\Types\UpdateInboxRulesResponseType
         */
        public function setRuleOperationErrors($RuleOperationErrors)
        {
                $this->RuleOperationErrors = $RuleOperationErrors;
                return $this;
        }

}
