<?php

namespace UUP\Exchange\Types;

class ProtectionRuleArgumentType
{

        /**
         * @var anonymous418 $Value
         */
        protected $Value = null;

        /**
         * @param anonymous418 $Value
         */
        public function __construct($Value = null)
        {
                $this->Value = $Value;
        }

        /**
         * @return anonymous418
         */
        public function getValue()
        {
                return $this->Value;
        }

        /**
         * @param anonymous418 $Value
         * @return \UUP\Exchange\Types\ProtectionRuleArgumentType
         */
        public function setValue($Value)
        {
                $this->Value = $Value;
                return $this;
        }

}
