<?php

namespace UUP\Exchange\Types;

class UserConfigurationDictionaryType
{

        /**
         * @var UserConfigurationDictionaryEntryType[] $DictionaryEntry
         */
        protected $DictionaryEntry = null;

        public function __construct()
        {
                
        }

        /**
         * @return UserConfigurationDictionaryEntryType[]
         */
        public function getDictionaryEntry()
        {
                return $this->DictionaryEntry;
        }

        /**
         * @param UserConfigurationDictionaryEntryType[] $DictionaryEntry
         * @return \UUP\Exchange\Types\UserConfigurationDictionaryType
         */
        public function setDictionaryEntry(array $DictionaryEntry = null)
        {
                $this->DictionaryEntry = $DictionaryEntry;
                return $this;
        }

}
