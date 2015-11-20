<?php

namespace UUP\Exchange\Types;

class GetUserAvailabilityResponseType
{

        /**
         * @var ArrayOfFreeBusyResponse $FreeBusyResponseArray
         */
        protected $FreeBusyResponseArray = null;
        /**
         * @var SuggestionsResponseType $SuggestionsResponse
         */
        protected $SuggestionsResponse = null;

        public function __construct()
        {
                
        }

        /**
         * @return ArrayOfFreeBusyResponse
         */
        public function getFreeBusyResponseArray()
        {
                return $this->FreeBusyResponseArray;
        }

        /**
         * @param ArrayOfFreeBusyResponse $FreeBusyResponseArray
         * @return \UUP\Exchange\Types\GetUserAvailabilityResponseType
         */
        public function setFreeBusyResponseArray($FreeBusyResponseArray)
        {
                $this->FreeBusyResponseArray = $FreeBusyResponseArray;
                return $this;
        }

        /**
         * @return SuggestionsResponseType
         */
        public function getSuggestionsResponse()
        {
                return $this->SuggestionsResponse;
        }

        /**
         * @param SuggestionsResponseType $SuggestionsResponse
         * @return \UUP\Exchange\Types\GetUserAvailabilityResponseType
         */
        public function setSuggestionsResponse($SuggestionsResponse)
        {
                $this->SuggestionsResponse = $SuggestionsResponse;
                return $this;
        }

}
