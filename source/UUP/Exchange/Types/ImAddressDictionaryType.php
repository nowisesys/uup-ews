<?php

namespace UUP\Exchange\Types;

class ImAddressDictionaryType
{

        /**
         * @var ImAddressDictionaryEntryType[] $Entry
         */
        protected $Entry = null;

        /**
         * @param ImAddressDictionaryEntryType[] $Entry
         */
        public function __construct(array $Entry = null)
        {
                $this->Entry = $Entry;
        }

        /**
         * @return ImAddressDictionaryEntryType[]
         */
        public function getEntry()
        {
                return $this->Entry;
        }

        /**
         * @param ImAddressDictionaryEntryType[] $Entry
         * @return \UUP\Exchange\Types\ImAddressDictionaryType
         */
        public function setEntry(array $Entry)
        {
                $this->Entry = $Entry;
                return $this;
        }

}
