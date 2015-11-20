<?php

namespace UUP\Exchange\Types;

class PhysicalAddressDictionaryType
{

        /**
         * @var PhysicalAddressDictionaryEntryType[] $Entry
         */
        protected $Entry = null;

        /**
         * @param PhysicalAddressDictionaryEntryType[] $Entry
         */
        public function __construct(array $Entry = null)
        {
                $this->Entry = $Entry;
        }

        /**
         * @return PhysicalAddressDictionaryEntryType[]
         */
        public function getEntry()
        {
                return $this->Entry;
        }

        /**
         * @param PhysicalAddressDictionaryEntryType[] $Entry
         * @return \UUP\Exchange\Types\PhysicalAddressDictionaryType
         */
        public function setEntry(array $Entry)
        {
                $this->Entry = $Entry;
                return $this;
        }

}
