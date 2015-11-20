<?php

namespace UUP\Exchange\Types;

class ExchangeImpersonationType
{

        /**
         * @var ConnectingSIDType $ConnectingSID
         */
        protected $ConnectingSID = null;

        /**
         * @param ConnectingSIDType $ConnectingSID
         */
        public function __construct($ConnectingSID = null)
        {
                $this->ConnectingSID = $ConnectingSID;
        }

        /**
         * @return ConnectingSIDType
         */
        public function getConnectingSID()
        {
                return $this->ConnectingSID;
        }

        /**
         * @param ConnectingSIDType $ConnectingSID
         * @return \UUP\Exchange\Types\ExchangeImpersonationType
         */
        public function setConnectingSID($ConnectingSID)
        {
                $this->ConnectingSID = $ConnectingSID;
                return $this;
        }

}
