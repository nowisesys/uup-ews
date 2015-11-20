<?php

namespace UUP\Exchange\Types;

class RulePredicateSizeRangeType
{

        /**
         * @var int $MinimumSize
         */
        protected $MinimumSize = null;
        /**
         * @var int $MaximumSize
         */
        protected $MaximumSize = null;

        public function __construct()
        {
                
        }

        /**
         * @return int
         */
        public function getMinimumSize()
        {
                return $this->MinimumSize;
        }

        /**
         * @param int $MinimumSize
         * @return \UUP\Exchange\Types\RulePredicateSizeRangeType
         */
        public function setMinimumSize($MinimumSize)
        {
                $this->MinimumSize = $MinimumSize;
                return $this;
        }

        /**
         * @return int
         */
        public function getMaximumSize()
        {
                return $this->MaximumSize;
        }

        /**
         * @param int $MaximumSize
         * @return \UUP\Exchange\Types\RulePredicateSizeRangeType
         */
        public function setMaximumSize($MaximumSize)
        {
                $this->MaximumSize = $MaximumSize;
                return $this;
        }

}
