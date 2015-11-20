<?php

namespace UUP\Exchange\Types;

class UpdateItemResponseMessageType extends ItemInfoResponseMessageType
{

        /**
         * @var ConflictResultsType $ConflictResults
         */
        protected $ConflictResults = null;

        /**
         * @param ResponseClassType $ResponseClass
         * @param ArrayOfRealItemsType $Items
         */
        public function __construct($ResponseClass = null, $Items = null)
        {
                parent::__construct($ResponseClass, $Items);
        }

        /**
         * @return ConflictResultsType
         */
        public function getConflictResults()
        {
                return $this->ConflictResults;
        }

        /**
         * @param ConflictResultsType $ConflictResults
         * @return \UUP\Exchange\Types\UpdateItemResponseMessageType
         */
        public function setConflictResults($ConflictResults)
        {
                $this->ConflictResults = $ConflictResults;
                return $this;
        }

}
