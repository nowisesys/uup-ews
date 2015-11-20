<?php

namespace UUP\Exchange\Types;

class ArrayOfRuleValidationErrorsType
{

        /**
         * @var RuleValidationErrorType[] $Error
         */
        protected $Error = null;

        /**
         * @param RuleValidationErrorType[] $Error
         */
        public function __construct(array $Error = null)
        {
                $this->Error = $Error;
        }

        /**
         * @return RuleValidationErrorType[]
         */
        public function getError()
        {
                return $this->Error;
        }

        /**
         * @param RuleValidationErrorType[] $Error
         * @return \UUP\Exchange\Types\ArrayOfRuleValidationErrorsType
         */
        public function setError(array $Error)
        {
                $this->Error = $Error;
                return $this;
        }

}
