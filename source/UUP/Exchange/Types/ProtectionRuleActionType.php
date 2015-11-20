<?php

namespace UUP\Exchange\Types;

class ProtectionRuleActionType
{

        /**
         * @var ProtectionRuleArgumentType[] $Argument
         */
        protected $Argument = null;
        /**
         * @var ProtectionRuleActionKindType $Name
         */
        protected $Name = null;

        /**
         * @param ProtectionRuleActionKindType $Name
         */
        public function __construct($Name = null)
        {
                $this->Name = $Name;
        }

        /**
         * @return ProtectionRuleArgumentType[]
         */
        public function getArgument()
        {
                return $this->Argument;
        }

        /**
         * @param ProtectionRuleArgumentType[] $Argument
         * @return \UUP\Exchange\Types\ProtectionRuleActionType
         */
        public function setArgument(array $Argument = null)
        {
                $this->Argument = $Argument;
                return $this;
        }

        /**
         * @return ProtectionRuleActionKindType
         */
        public function getName()
        {
                return $this->Name;
        }

        /**
         * @param ProtectionRuleActionKindType $Name
         * @return \UUP\Exchange\Types\ProtectionRuleActionType
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

}
