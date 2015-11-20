<?php

namespace UUP\Exchange\Types;

class ArrayOfRulesType
{

        /**
         * @var RuleType[] $Rule
         */
        protected $Rule = null;

        public function __construct()
        {
                
        }

        /**
         * @return RuleType[]
         */
        public function getRule()
        {
                return $this->Rule;
        }

        /**
         * @param RuleType[] $Rule
         * @return \UUP\Exchange\Types\ArrayOfRulesType
         */
        public function setRule(array $Rule = null)
        {
                $this->Rule = $Rule;
                return $this;
        }

}
