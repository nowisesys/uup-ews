<?php

namespace UUP\Exchange\Types;

class ArrayOfSuggestionDayResult
{

        /**
         * @var SuggestionDayResult[] $SuggestionDayResult
         */
        protected $SuggestionDayResult = null;

        public function __construct()
        {
                
        }

        /**
         * @return SuggestionDayResult[]
         */
        public function getSuggestionDayResult()
        {
                return $this->SuggestionDayResult;
        }

        /**
         * @param SuggestionDayResult[] $SuggestionDayResult
         * @return \UUP\Exchange\Types\ArrayOfSuggestionDayResult
         */
        public function setSuggestionDayResult(array $SuggestionDayResult = null)
        {
                $this->SuggestionDayResult = $SuggestionDayResult;
                return $this;
        }

}
