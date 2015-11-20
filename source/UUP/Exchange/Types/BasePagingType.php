<?php

namespace UUP\Exchange\Types;

abstract class BasePagingType
{

        /**
         * @var int $MaxEntriesReturned
         */
        protected $MaxEntriesReturned = null;

        /**
         * @param int $MaxEntriesReturned
         */
        public function __construct($MaxEntriesReturned = null)
        {
                $this->MaxEntriesReturned = $MaxEntriesReturned;
        }

        /**
         * @return int
         */
        public function getMaxEntriesReturned()
        {
                return $this->MaxEntriesReturned;
        }

        /**
         * @param int $MaxEntriesReturned
         * @return \UUP\Exchange\Types\BasePagingType
         */
        public function setMaxEntriesReturned($MaxEntriesReturned)
        {
                $this->MaxEntriesReturned = $MaxEntriesReturned;
                return $this;
        }

}
