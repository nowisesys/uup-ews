<?php

namespace UUP\Exchange\Types;

class ArrayOfFreeBusyResponse
{

        /**
         * @var FreeBusyResponseType[] $FreeBusyResponse
         */
        protected $FreeBusyResponse = null;

        public function __construct()
        {
                
        }

        /**
         * @return FreeBusyResponseType[]
         */
        public function getFreeBusyResponse()
        {
                return $this->FreeBusyResponse;
        }

        /**
         * @param FreeBusyResponseType[] $FreeBusyResponse
         * @return \UUP\Exchange\Types\ArrayOfFreeBusyResponse
         */
        public function setFreeBusyResponse(array $FreeBusyResponse = null)
        {
                $this->FreeBusyResponse = $FreeBusyResponse;
                return $this;
        }

}
