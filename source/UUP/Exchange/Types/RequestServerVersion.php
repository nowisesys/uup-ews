<?php

namespace UUP\Exchange\Types;

class RequestServerVersion
{

        /**
         * @var ExchangeVersionType $Version
         */
        protected $Version = null;

        /**
         * @param ExchangeVersionType $Version
         */
        public function __construct($Version = null)
        {
                $this->Version = $Version;
        }

        /**
         * @return ExchangeVersionType
         */
        public function getVersion()
        {
                return $this->Version;
        }

        /**
         * @param ExchangeVersionType $Version
         * @return \UUP\Exchange\Types\RequestServerVersion
         */
        public function setVersion($Version)
        {
                $this->Version = $Version;
                return $this;
        }

}
