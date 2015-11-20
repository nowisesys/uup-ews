<?php

namespace UUP\Exchange\Types;

class MailTipsServiceConfiguration extends ServiceConfiguration
{

        /**
         * @var boolean $MailTipsEnabled
         */
        protected $MailTipsEnabled = null;
        /**
         * @var int $MaxRecipientsPerGetMailTipsRequest
         */
        protected $MaxRecipientsPerGetMailTipsRequest = null;
        /**
         * @var int $MaxMessageSize
         */
        protected $MaxMessageSize = null;
        /**
         * @var int $LargeAudienceThreshold
         */
        protected $LargeAudienceThreshold = null;
        /**
         * @var boolean $ShowExternalRecipientCount
         */
        protected $ShowExternalRecipientCount = null;
        /**
         * @var SmtpDomainList $InternalDomains
         */
        protected $InternalDomains = null;

        /**
         * @param boolean $MailTipsEnabled
         * @param int $MaxRecipientsPerGetMailTipsRequest
         * @param int $MaxMessageSize
         * @param int $LargeAudienceThreshold
         * @param boolean $ShowExternalRecipientCount
         * @param SmtpDomainList $InternalDomains
         */
        public function __construct($MailTipsEnabled = null, $MaxRecipientsPerGetMailTipsRequest = null, $MaxMessageSize = null, $LargeAudienceThreshold = null, $ShowExternalRecipientCount = null, $InternalDomains = null)
        {
                $this->MailTipsEnabled = $MailTipsEnabled;
                $this->MaxRecipientsPerGetMailTipsRequest = $MaxRecipientsPerGetMailTipsRequest;
                $this->MaxMessageSize = $MaxMessageSize;
                $this->LargeAudienceThreshold = $LargeAudienceThreshold;
                $this->ShowExternalRecipientCount = $ShowExternalRecipientCount;
                $this->InternalDomains = $InternalDomains;
        }

        /**
         * @return boolean
         */
        public function getMailTipsEnabled()
        {
                return $this->MailTipsEnabled;
        }

        /**
         * @param boolean $MailTipsEnabled
         * @return \UUP\Exchange\Types\MailTipsServiceConfiguration
         */
        public function setMailTipsEnabled($MailTipsEnabled)
        {
                $this->MailTipsEnabled = $MailTipsEnabled;
                return $this;
        }

        /**
         * @return int
         */
        public function getMaxRecipientsPerGetMailTipsRequest()
        {
                return $this->MaxRecipientsPerGetMailTipsRequest;
        }

        /**
         * @param int $MaxRecipientsPerGetMailTipsRequest
         * @return \UUP\Exchange\Types\MailTipsServiceConfiguration
         */
        public function setMaxRecipientsPerGetMailTipsRequest($MaxRecipientsPerGetMailTipsRequest)
        {
                $this->MaxRecipientsPerGetMailTipsRequest = $MaxRecipientsPerGetMailTipsRequest;
                return $this;
        }

        /**
         * @return int
         */
        public function getMaxMessageSize()
        {
                return $this->MaxMessageSize;
        }

        /**
         * @param int $MaxMessageSize
         * @return \UUP\Exchange\Types\MailTipsServiceConfiguration
         */
        public function setMaxMessageSize($MaxMessageSize)
        {
                $this->MaxMessageSize = $MaxMessageSize;
                return $this;
        }

        /**
         * @return int
         */
        public function getLargeAudienceThreshold()
        {
                return $this->LargeAudienceThreshold;
        }

        /**
         * @param int $LargeAudienceThreshold
         * @return \UUP\Exchange\Types\MailTipsServiceConfiguration
         */
        public function setLargeAudienceThreshold($LargeAudienceThreshold)
        {
                $this->LargeAudienceThreshold = $LargeAudienceThreshold;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getShowExternalRecipientCount()
        {
                return $this->ShowExternalRecipientCount;
        }

        /**
         * @param boolean $ShowExternalRecipientCount
         * @return \UUP\Exchange\Types\MailTipsServiceConfiguration
         */
        public function setShowExternalRecipientCount($ShowExternalRecipientCount)
        {
                $this->ShowExternalRecipientCount = $ShowExternalRecipientCount;
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
         * @return \UUP\Exchange\Types\MailTipsServiceConfiguration
         */
        public function setInternalDomains($InternalDomains)
        {
                $this->InternalDomains = $InternalDomains;
                return $this;
        }

}
