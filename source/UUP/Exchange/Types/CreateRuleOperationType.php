<?php

namespace UUP\Exchange\Types;

class CreateRuleOperationType extends RuleOperationType
{

        /**
         * @var RuleType $Rule
         */
        protected $Rule = null;

        /**
         * @param RuleType $Rule
         */
        public function __construct($Rule = null)
        {
                $this->Rule = $Rule;
        }

        /**
         * @return RuleType
         */
        public function getRule()
        {
                return $this->Rule;
        }

        /**
         * @param RuleType $Rule
         * @return \UUP\Exchange\Types\CreateRuleOperationType
         */
        public function setRule($Rule)
        {
                $this->Rule = $Rule;
                return $this;
        }

}
