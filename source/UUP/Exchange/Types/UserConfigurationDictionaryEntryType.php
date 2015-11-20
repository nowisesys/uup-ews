<?php

namespace UUP\Exchange\Types;

class UserConfigurationDictionaryEntryType
{

        /**
         * @var UserConfigurationDictionaryObjectType $DictionaryKey
         */
        protected $DictionaryKey = null;
        /**
         * @var UserConfigurationDictionaryObjectType $DictionaryValue
         */
        protected $DictionaryValue = null;

        /**
         * @param UserConfigurationDictionaryObjectType $DictionaryKey
         */
        public function __construct($DictionaryKey = null)
        {
                $this->DictionaryKey = $DictionaryKey;
        }

        /**
         * @return UserConfigurationDictionaryObjectType
         */
        public function getDictionaryKey()
        {
                return $this->DictionaryKey;
        }

        /**
         * @param UserConfigurationDictionaryObjectType $DictionaryKey
         * @return \UUP\Exchange\Types\UserConfigurationDictionaryEntryType
         */
        public function setDictionaryKey($DictionaryKey)
        {
                $this->DictionaryKey = $DictionaryKey;
                return $this;
        }

        /**
         * @return UserConfigurationDictionaryObjectType
         */
        public function getDictionaryValue()
        {
                return $this->DictionaryValue;
        }

        /**
         * @param UserConfigurationDictionaryObjectType $DictionaryValue
         * @return \UUP\Exchange\Types\UserConfigurationDictionaryEntryType
         */
        public function setDictionaryValue($DictionaryValue)
        {
                $this->DictionaryValue = $DictionaryValue;
                return $this;
        }

}
