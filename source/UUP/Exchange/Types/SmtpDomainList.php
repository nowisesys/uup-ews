<?php

namespace UUP\Exchange\Types;

class SmtpDomainList
{

        /**
         * @var SmtpDomain[] $Domain
         */
        protected $Domain = null;

        public function __construct()
        {
                
        }

        /**
         * @return SmtpDomain[]
         */
        public function getDomain()
        {
                return $this->Domain;
        }

        /**
         * @param SmtpDomain[] $Domain
         * @return \UUP\Exchange\Types\SmtpDomainList
         */
        public function setDomain(array $Domain = null)
        {
                $this->Domain = $Domain;
                return $this;
        }

}
