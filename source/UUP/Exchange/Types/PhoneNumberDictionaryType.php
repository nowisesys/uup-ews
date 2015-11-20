<?php

namespace UUP\Exchange\Types;

class PhoneNumberDictionaryType
{

        /**
         * @var PhoneNumberDictionaryEntryType[] $Entry
         */
        protected $Entry = null;

        /**
         * @param PhoneNumberDictionaryEntryType[] $Entry
         */
        public function __construct(array $Entry = null)
        {
                $this->Entry = $Entry;
        }

        /**
         * @return PhoneNumberDictionaryEntryType[]
         */
        public function getEntry()
        {
                return $this->Entry;
        }

        /**
         * @param PhoneNumberDictionaryEntryType[] $Entry
         * @return \UUP\Exchange\Types\PhoneNumberDictionaryType
         */
        public function setEntry(array $Entry)
        {
                $this->Entry = $Entry;
                return $this;
        }

}
