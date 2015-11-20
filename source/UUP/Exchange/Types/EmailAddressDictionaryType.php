<?php

namespace UUP\Exchange\Types;

class EmailAddressDictionaryType
{

        /**
         * @var EmailAddressDictionaryEntryType[] $Entry
         */
        protected $Entry = null;

        /**
         * @param EmailAddressDictionaryEntryType[] $Entry
         */
        public function __construct(array $Entry = null)
        {
                $this->Entry = $Entry;
        }

        /**
         * @return EmailAddressDictionaryEntryType[]
         */
        public function getEntry()
        {
                return $this->Entry;
        }

        /**
         * @param EmailAddressDictionaryEntryType[] $Entry
         * @return \UUP\Exchange\Types\EmailAddressDictionaryType
         */
        public function setEntry(array $Entry)
        {
                $this->Entry = $Entry;
                return $this;
        }

}
