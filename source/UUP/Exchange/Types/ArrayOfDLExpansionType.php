<?php

namespace UUP\Exchange\Types;

class ArrayOfDLExpansionType
{

        /**
         * @var EmailAddressType[] $Mailbox
         */
        protected $Mailbox = null;
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
         * @return EmailAddressType[]
         */
        public function getMailbox()
        {
                return $this->Mailbox;
        }

        /**
         * @param EmailAddressType[] $Mailbox
         * @return \UUP\Exchange\Types\ArrayOfDLExpansionType
         */
        public function setMailbox(array $Mailbox = null)
        {
                $this->Mailbox = $Mailbox;
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
         * @return \UUP\Exchange\Types\ArrayOfDLExpansionType
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
         * @return \UUP\Exchange\Types\ArrayOfDLExpansionType
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
         * @return \UUP\Exchange\Types\ArrayOfDLExpansionType
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
         * @return \UUP\Exchange\Types\ArrayOfDLExpansionType
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
         * @return \UUP\Exchange\Types\ArrayOfDLExpansionType
         */
        public function setTotalItemsInView($TotalItemsInView)
        {
                $this->TotalItemsInView = $TotalItemsInView;
                return $this;
        }

}
