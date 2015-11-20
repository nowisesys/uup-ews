<?php

namespace UUP\Exchange\Types;

class ExpandDLResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfDLExpansionType $DLExpansion
         */
        protected $DLExpansion = null;
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
         * @param ResponseClassType $ResponseClass
         * @param int $IndexedPagingOffset
         * @param int $NumeratorOffset
         * @param int $AbsoluteDenominator
         * @param boolean $IncludesLastItemInRange
         * @param int $TotalItemsInView
         */
        public function __construct($ResponseClass = null, $IndexedPagingOffset = null, $NumeratorOffset = null, $AbsoluteDenominator = null, $IncludesLastItemInRange = null, $TotalItemsInView = null)
        {
                parent::__construct($ResponseClass);
                $this->IndexedPagingOffset = $IndexedPagingOffset;
                $this->NumeratorOffset = $NumeratorOffset;
                $this->AbsoluteDenominator = $AbsoluteDenominator;
                $this->IncludesLastItemInRange = $IncludesLastItemInRange;
                $this->TotalItemsInView = $TotalItemsInView;
        }

        /**
         * @return ArrayOfDLExpansionType
         */
        public function getDLExpansion()
        {
                return $this->DLExpansion;
        }

        /**
         * @param ArrayOfDLExpansionType $DLExpansion
         * @return \UUP\Exchange\Types\ExpandDLResponseMessageType
         */
        public function setDLExpansion($DLExpansion)
        {
                $this->DLExpansion = $DLExpansion;
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
         * @return \UUP\Exchange\Types\ExpandDLResponseMessageType
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
         * @return \UUP\Exchange\Types\ExpandDLResponseMessageType
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
         * @return \UUP\Exchange\Types\ExpandDLResponseMessageType
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
         * @return \UUP\Exchange\Types\ExpandDLResponseMessageType
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
         * @return \UUP\Exchange\Types\ExpandDLResponseMessageType
         */
        public function setTotalItemsInView($TotalItemsInView)
        {
                $this->TotalItemsInView = $TotalItemsInView;
                return $this;
        }

}
