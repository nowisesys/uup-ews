<?php

namespace UUP\Exchange\Types;

class ArrayOfUnknownEntriesType
{

        /**
         * @var string $UnknownEntry
         */
        protected $UnknownEntry = null;

        /**
         * @param string $UnknownEntry
         */
        public function __construct($UnknownEntry = null)
        {
                $this->UnknownEntry = $UnknownEntry;
        }

        /**
         * @return string
         */
        public function getUnknownEntry()
        {
                return $this->UnknownEntry;
        }

        /**
         * @param string $UnknownEntry
         * @return \UUP\Exchange\Types\ArrayOfUnknownEntriesType
         */
        public function setUnknownEntry($UnknownEntry)
        {
                $this->UnknownEntry = $UnknownEntry;
                return $this;
        }

}
