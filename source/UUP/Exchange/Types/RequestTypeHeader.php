<?php

namespace UUP\Exchange\Types;

class RequestTypeHeader
{

        /**
         * @var AvailabilityProxyRequestType $RequestType
         */
        protected $RequestType = null;

        /**
         * @param AvailabilityProxyRequestType $RequestType
         */
        public function __construct($RequestType = null)
        {
                $this->RequestType = $RequestType;
        }

        /**
         * @return AvailabilityProxyRequestType
         */
        public function getRequestType()
        {
                return $this->RequestType;
        }

        /**
         * @param AvailabilityProxyRequestType $RequestType
         * @return \UUP\Exchange\Types\RequestTypeHeader
         */
        public function setRequestType($RequestType)
        {
                $this->RequestType = $RequestType;
                return $this;
        }

}
