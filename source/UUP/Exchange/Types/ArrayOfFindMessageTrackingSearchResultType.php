<?php

namespace UUP\Exchange\Types;

class ArrayOfFindMessageTrackingSearchResultType
{

        /**
         * @var FindMessageTrackingSearchResultType $MessageTrackingSearchResult
         */
        protected $MessageTrackingSearchResult = null;

        /**
         * @param FindMessageTrackingSearchResultType $MessageTrackingSearchResult
         */
        public function __construct($MessageTrackingSearchResult = null)
        {
                $this->MessageTrackingSearchResult = $MessageTrackingSearchResult;
        }

        /**
         * @return FindMessageTrackingSearchResultType
         */
        public function getMessageTrackingSearchResult()
        {
                return $this->MessageTrackingSearchResult;
        }

        /**
         * @param FindMessageTrackingSearchResultType $MessageTrackingSearchResult
         * @return \UUP\Exchange\Types\ArrayOfFindMessageTrackingSearchResultType
         */
        public function setMessageTrackingSearchResult($MessageTrackingSearchResult)
        {
                $this->MessageTrackingSearchResult = $MessageTrackingSearchResult;
                return $this;
        }

}
