<?php

namespace UUP\Exchange\Types;

class UserConfigurationDictionaryObjectType
{

        /**
         * @var UserConfigurationDictionaryObjectTypesType $Type
         */
        protected $Type = null;
        /**
         * @var string[] $Value
         */
        protected $Value = null;

        /**
         * @param UserConfigurationDictionaryObjectTypesType $Type
         * @param string[] $Value
         */
        public function __construct($Type = null, array $Value = null)
        {
                $this->Type = $Type;
                $this->Value = $Value;
        }

        /**
         * @return UserConfigurationDictionaryObjectTypesType
         */
        public function getType()
        {
                return $this->Type;
        }

        /**
         * @param UserConfigurationDictionaryObjectTypesType $Type
         * @return \UUP\Exchange\Types\UserConfigurationDictionaryObjectType
         */
        public function setType($Type)
        {
                $this->Type = $Type;
                return $this;
        }

        /**
         * @return string[]
         */
        public function getValue()
        {
                return $this->Value;
        }

        /**
         * @param string[] $Value
         * @return \UUP\Exchange\Types\UserConfigurationDictionaryObjectType
         */
        public function setValue(array $Value)
        {
                $this->Value = $Value;
                return $this;
        }

}
