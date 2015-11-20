<?php

namespace UUP\Exchange\Types;

class ServiceConfigurationResponseMessageType extends ResponseMessageType
{

        /**
         * @var MailTipsServiceConfiguration $MailTipsConfiguration
         */
        protected $MailTipsConfiguration = null;
        /**
         * @var UnifiedMessageServiceConfiguration $UnifiedMessagingConfiguration
         */
        protected $UnifiedMessagingConfiguration = null;
        /**
         * @var ProtectionRulesServiceConfiguration $ProtectionRulesConfiguration
         */
        protected $ProtectionRulesConfiguration = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return MailTipsServiceConfiguration
         */
        public function getMailTipsConfiguration()
        {
                return $this->MailTipsConfiguration;
        }

        /**
         * @param MailTipsServiceConfiguration $MailTipsConfiguration
         * @return \UUP\Exchange\Types\ServiceConfigurationResponseMessageType
         */
        public function setMailTipsConfiguration($MailTipsConfiguration)
        {
                $this->MailTipsConfiguration = $MailTipsConfiguration;
                return $this;
        }

        /**
         * @return UnifiedMessageServiceConfiguration
         */
        public function getUnifiedMessagingConfiguration()
        {
                return $this->UnifiedMessagingConfiguration;
        }

        /**
         * @param UnifiedMessageServiceConfiguration $UnifiedMessagingConfiguration
         * @return \UUP\Exchange\Types\ServiceConfigurationResponseMessageType
         */
        public function setUnifiedMessagingConfiguration($UnifiedMessagingConfiguration)
        {
                $this->UnifiedMessagingConfiguration = $UnifiedMessagingConfiguration;
                return $this;
        }

        /**
         * @return ProtectionRulesServiceConfiguration
         */
        public function getProtectionRulesConfiguration()
        {
                return $this->ProtectionRulesConfiguration;
        }

        /**
         * @param ProtectionRulesServiceConfiguration $ProtectionRulesConfiguration
         * @return \UUP\Exchange\Types\ServiceConfigurationResponseMessageType
         */
        public function setProtectionRulesConfiguration($ProtectionRulesConfiguration)
        {
                $this->ProtectionRulesConfiguration = $ProtectionRulesConfiguration;
                return $this;
        }

}
