<?php

namespace UUP\Exchange\Types;

class DeleteRuleOperationType extends RuleOperationType
{

        /**
         * @var string $RuleId
         */
        protected $RuleId = null;

        /**
         * @param string $RuleId
         */
        public function __construct($RuleId = null)
        {
                $this->RuleId = $RuleId;
        }

        /**
         * @return string
         */
        public function getRuleId()
        {
                return $this->RuleId;
        }

        /**
         * @param string $RuleId
         * @return \UUP\Exchange\Types\DeleteRuleOperationType
         */
        public function setRuleId($RuleId)
        {
                $this->RuleId = $RuleId;
                return $this;
        }

}
