<?php

namespace UUP\Exchange\Types;

class FindItemParentType
{

        /**
         * @var ArrayOfRealItemsType $Items
         */
        protected $Items = null;
        /**
         * @var ArrayOfGroupedItemsType $Groups
         */
        protected $Groups = null;
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
         * @param ArrayOfRealItemsType $Items
         * @param ArrayOfGroupedItemsType $Groups
         * @param int $IndexedPagingOffset
         * @param int $NumeratorOffset
         * @param int $AbsoluteDenominator
         * @param boolean $IncludesLastItemInRange
         * @param int $TotalItemsInView
         */
        public function __construct($Items = null, $Groups = null, $IndexedPagingOffset = null, $NumeratorOffset = null, $AbsoluteDenominator = null, $IncludesLastItemInRange = null, $TotalItemsInView = null)
        {
                $this->Items = $Items;
                $this->Groups = $Groups;
                $this->IndexedPagingOffset = $IndexedPagingOffset;
                $this->NumeratorOffset = $NumeratorOffset;
                $this->AbsoluteDenominator = $AbsoluteDenominator;
                $this->IncludesLastItemInRange = $IncludesLastItemInRange;
                $this->TotalItemsInView = $TotalItemsInView;
        }

        /**
         * @return ArrayOfRealItemsType
         */
        public function getItems()
        {
                return $this->Items;
        }

        /**
         * @param ArrayOfRealItemsType $Items
         * @return \UUP\Exchange\Types\FindItemParentType
         */
        public function setItems($Items)
        {
                $this->Items = $Items;
                return $this;
        }

        /**
         * @return ArrayOfGroupedItemsType
         */
        public function getGroups()
        {
                return $this->Groups;
        }

        /**
         * @param ArrayOfGroupedItemsType $Groups
         * @return \UUP\Exchange\Types\FindItemParentType
         */
        public function setGroups($Groups)
        {
                $this->Groups = $Groups;
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
         * @return \UUP\Exchange\Types\FindItemParentType
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
         * @return \UUP\Exchange\Types\FindItemParentType
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
         * @return \UUP\Exchange\Types\FindItemParentType
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
         * @return \UUP\Exchange\Types\FindItemParentType
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
         * @return \UUP\Exchange\Types\FindItemParentType
         */
        public function setTotalItemsInView($TotalItemsInView)
        {
                $this->TotalItemsInView = $TotalItemsInView;
                return $this;
        }

}
