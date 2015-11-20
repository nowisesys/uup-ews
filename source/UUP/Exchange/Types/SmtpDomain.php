<?php

namespace UUP\Exchange\Types;

class SmtpDomain
{

        /**
         * @var string $Name
         */
        protected $Name = null;
        /**
         * @var boolean $IncludeSubdomains
         */
        protected $IncludeSubdomains = null;

        /**
         * @param string $Name
         * @param boolean $IncludeSubdomains
         */
        public function __construct($Name = null, $IncludeSubdomains = null)
        {
                $this->Name = $Name;
                $this->IncludeSubdomains = $IncludeSubdomains;
        }

        /**
         * @return string
         */
        public function getName()
        {
                return $this->Name;
        }

        /**
         * @param string $Name
         * @return \UUP\Exchange\Types\SmtpDomain
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIncludeSubdomains()
        {
                return $this->IncludeSubdomains;
        }

        /**
         * @param boolean $IncludeSubdomains
         * @return \UUP\Exchange\Types\SmtpDomain
         */
        public function setIncludeSubdomains($IncludeSubdomains)
        {
                $this->IncludeSubdomains = $IncludeSubdomains;
                return $this;
        }

}
