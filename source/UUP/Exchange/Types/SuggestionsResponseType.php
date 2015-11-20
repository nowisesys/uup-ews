<?php

namespace UUP\Exchange\Types;

class SuggestionsResponseType
{

        /**
         * @var ResponseMessageType $ResponseMessage
         */
        protected $ResponseMessage = null;
        /**
         * @var ArrayOfSuggestionDayResult $SuggestionDayResultArray
         */
        protected $SuggestionDayResultArray = null;

        public function __construct()
        {
                
        }

        /**
         * @return ResponseMessageType
         */
        public function getResponseMessage()
        {
                return $this->ResponseMessage;
        }

        /**
         * @param ResponseMessageType $ResponseMessage
         * @return \UUP\Exchange\Types\SuggestionsResponseType
         */
        public function setResponseMessage($ResponseMessage)
        {
                $this->ResponseMessage = $ResponseMessage;
                return $this;
        }

        /**
         * @return ArrayOfSuggestionDayResult
         */
        public function getSuggestionDayResultArray()
        {
                return $this->SuggestionDayResultArray;
        }

        /**
         * @param ArrayOfSuggestionDayResult $SuggestionDayResultArray
         * @return \UUP\Exchange\Types\SuggestionsResponseType
         */
        public function setSuggestionDayResultArray($SuggestionDayResultArray)
        {
                $this->SuggestionDayResultArray = $SuggestionDayResultArray;
                return $this;
        }

}
