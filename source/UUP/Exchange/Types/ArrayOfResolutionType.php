<?php

namespace UUP\Exchange\Types;

class ArrayOfResolutionType
{

        /**
         * @var ResolutionType $Resolution
         */
        protected $Resolution = null;
        /**
         * @var int $IndexedPagingOffset
         */
        protected $IndexedPagingOffset = null;
        /**
         * @var int $NumeratorOffset
         */
        protected $NumeratorOffset = null;
        /**
         * @var int $AbsoluteDenominator
         */
        protected $AbsoluteDenominator = null;
        /**
         * @var boolean $IncludesLastItemInRange
         */
        protected $IncludesLastItemInRange = null;
        /**
         * @var int $TotalItemsInView
         */
        protected $TotalItemsInView = null;

        /**
         * @param int $IndexedPagingOffset
         * @param int $NumeratorOffset
         * @param int $AbsoluteDenominator
         * @param boolean $IncludesLastItemInRange
         * @param int $TotalItemsInView
         */
        public function __construct($IndexedPagingOffset = null, $NumeratorOffset = null, $AbsoluteDenominator = null, $IncludesLastItemInRange = null, $TotalItemsInView = null)
        {
                $this->IndexedPagingOffset = $IndexedPagingOffset;
                $this->NumeratorOffset = $NumeratorOffset;
                $this->AbsoluteDenominator = $AbsoluteDenominator;
                $this->IncludesLastItemInRange = $IncludesLastItemInRange;
                $this->TotalItemsInView = $TotalItemsInView;
        }

        /**
         * @return ResolutionType
         */
        public function getResolution()
        {
                return $this->Resolution;
        }

        /**
         * @param ResolutionType $Resolution
         * @return \UUP\Exchange\Types\ArrayOfResolutionType
         */
        public function setResolution($Resolution)
        {
                $this->Resolution = $Resolution;
                return $this;
        }

        /**
         * @return int
         */
        public function getIndexedPagingOffset()
        {
                return $this->IndexedPagingOffset;
        }

        /**
         * @param int $IndexedPagingOffset
         * @return \UUP\Exchange\Types\ArrayOfResolutionType
         */
        public function setIndexedPagingOffset($IndexedPagingOffset)
        {
                $this->IndexedPagingOffset = $IndexedPagingOffset;
                return $this;
        }

        /**
         * @return int
         */
        public function getNumeratorOffset()
        {
                return $this->NumeratorOffset;
        }

        /**
         * @param int $NumeratorOffset
         * @return \UUP\Exchange\Types\ArrayOfResolutionType
         */
        public function setNumeratorOffset($NumeratorOffset)
        {
                $this->NumeratorOffset = $NumeratorOffset;
                return $this;
        }

        /**
         * @return int
         */
        public function getAbsoluteDenominator()
        {
                return $this->AbsoluteDenominator;
        }

        /**
         * @param int $AbsoluteDenominator
         * @return \UUP\Exchange\Types\ArrayOfResolutionType
         */
        public function setAbsoluteDenominator($AbsoluteDenominator)
        {
                $this->AbsoluteDenominator = $AbsoluteDenominator;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIncludesLastItemInRange()
        {
                return $this->IncludesLastItemInRange;
        }

        /**
         * @param boolean $IncludesLastItemInRange
         * @return \UUP\Exchange\Types\ArrayOfResolutionType
         */
        public function setIncludesLastItemInRange($IncludesLastItemInRange)
        {
                $this->IncludesLastItemInRange = $IncludesLastItemInRange;
                return $this;
        }

        /**
         * @return int
         */
        public function getTotalItemsInView()
        {
                return $this->TotalItemsInView;
        }

        /**
         * @param int $TotalItemsInView
         * @return \UUP\Exchange\Types\ArrayOfResolutionType
         */
        public function setTotalItemsInView($TotalItemsInView)
        {
                $this->TotalItemsInView = $TotalItemsInView;
                return $this;
        }

}
