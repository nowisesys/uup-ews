<?php

namespace UUP\Exchange\Types;

class ProtectionRuleRecipientIsType
{

        /**
         * @var ProtectionRuleValueType[] $Value
         */
        protected $Value = null;

        /**
         * @param ProtectionRuleValueType[] $Value
         */
        public function __construct(array $Value = null)
        {
                $this->Value = $Value;
        }

        /**
         * @return ProtectionRuleValueType[]
         */
        public function getValue()
        {
                return $this->Value;
        }

        /**
         * @param ProtectionRuleValueType[] $Value
         * @return \UUP\Exchange\Types\ProtectionRuleRecipientIsType
         */
        public function setValue(array $Value)
        {
                $this->Value = $Value;
                return $this;
        }

}
