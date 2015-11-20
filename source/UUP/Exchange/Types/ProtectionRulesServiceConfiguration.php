<?php

namespace UUP\Exchange\Types;

class ProtectionRulesServiceConfiguration extends ServiceConfiguration
{

        /**
         * @var ArrayOfProtectionRulesType $Rules
         */
        protected $Rules = null;
        /**
         * @var SmtpDomainList $InternalDomains
         */
        protected $InternalDomains = null;
        /**
         * @var anonymous403 $RefreshInterval
         */
        protected $RefreshInterval = null;

        /**
         * @param ArrayOfProtectionRulesType $Rules
         * @param SmtpDomainList $InternalDomains
         * @param anonymous403 $RefreshInterval
         */
        public function __construct($Rules = null, $InternalDomains = null, $RefreshInterval = null)
        {
                $this->Rules = $Rules;
                $this->InternalDomains = $InternalDomains;
                $this->RefreshInterval = $RefreshInterval;
        }

        /**
         * @return ArrayOfProtectionRulesType
         */
        public function getRules()
        {
                return $this->Rules;
        }

        /**
         * @param ArrayOfProtectionRulesType $Rules
         * @return \UUP\Exchange\Types\ProtectionRulesServiceConfiguration
         */
        public function setRules($Rules)
        {
                $this->Rules = $Rules;
                return $this;
        }

        /**
         * @return SmtpDomainList
         */
        public function getInternalDomains()
        {
                return $this->InternalDomains;
        }

        /**
         * @param SmtpDomainList $InternalDomains
         * @return \UUP\Exchange\Types\ProtectionRulesServiceConfiguration
         */
        public function setInternalDomains($InternalDomains)
        {
                $this->InternalDomains = $InternalDomains;
                return $this;
        }

        /**
         * @return anonymous403
         */
        public function getRefreshInterval()
        {
                return $this->RefreshInterval;
        }

        /**
         * @param anonymous403 $RefreshInterval
         * @return \UUP\Exchange\Types\ProtectionRulesServiceConfiguration
         */
        public function setRefreshInterval($RefreshInterval)
        {
                $this->RefreshInterval = $RefreshInterval;
                return $this;
        }

}
