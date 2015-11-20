<?php

namespace UUP\Exchange\Types;

class ArrayOfProtectionRulesType
{

        /**
         * @var ProtectionRuleType[] $Rule
         */
        protected $Rule = null;

        public function __construct()
        {
                
        }

        /**
         * @return ProtectionRuleType[]
         */
        public function getRule()
        {
                return $this->Rule;
        }

        /**
         * @param ProtectionRuleType[] $Rule
         * @return \UUP\Exchange\Types\ArrayOfProtectionRulesType
         */
        public function setRule(array $Rule = null)
        {
                $this->Rule = $Rule;
                return $this;
        }

}
