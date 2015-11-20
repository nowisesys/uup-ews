<?php

namespace UUP\Exchange\Types;

class ConflictResultsType
{

        /**
         * @var int $Count
         */
        protected $Count = null;

        /**
         * @param int $Count
         */
        public function __construct($Count = null)
        {
                $this->Count = $Count;
        }

        /**
         * @return int
         */
        public function getCount()
        {
                return $this->Count;
        }

        /**
         * @param int $Count
         * @return \UUP\Exchange\Types\ConflictResultsType
         */
        public function setCount($Count)
        {
                $this->Count = $Count;
                return $this;
        }

}
