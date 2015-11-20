<?php

namespace UUP\Exchange\Types;

class FractionalPageViewType extends BasePagingType
{

        /**
         * @var int $Numerator
         */
        protected $Numerator = null;
        /**
         * @var int $Denominator
         */
        protected $Denominator = null;

        /**
         * @param int $MaxEntriesReturned
         * @param int $Numerator
         * @param int $Denominator
         */
        public function __construct($MaxEntriesReturned = null, $Numerator = null, $Denominator = null)
        {
                parent::__construct($MaxEntriesReturned);
                $this->Numerator = $Numerator;
                $this->Denominator = $Denominator;
        }

        /**
         * @return int
         */
        public function getNumerator()
        {
                return $this->Numerator;
        }

        /**
         * @param int $Numerator
         * @return \UUP\Exchange\Types\FractionalPageViewType
         */
        public function setNumerator($Numerator)
        {
                $this->Numerator = $Numerator;
                return $this;
        }

        /**
         * @return int
         */
        public function getDenominator()
        {
                return $this->Denominator;
        }

        /**
         * @param int $Denominator
         * @return \UUP\Exchange\Types\FractionalPageViewType
         */
        public function setDenominator($Denominator)
        {
                $this->Denominator = $Denominator;
                return $this;
        }

}
