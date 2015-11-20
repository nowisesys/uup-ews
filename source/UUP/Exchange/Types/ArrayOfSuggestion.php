<?php

namespace UUP\Exchange\Types;

class ArrayOfSuggestion
{

        /**
         * @var Suggestion[] $Suggestion
         */
        protected $Suggestion = null;

        public function __construct()
        {
                
        }

        /**
         * @return Suggestion[]
         */
        public function getSuggestion()
        {
                return $this->Suggestion;
        }

        /**
         * @param Suggestion[] $Suggestion
         * @return \UUP\Exchange\Types\ArrayOfSuggestion
         */
        public function setSuggestion(array $Suggestion = null)
        {
                $this->Suggestion = $Suggestion;
                return $this;
        }

}
