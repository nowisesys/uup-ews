<?php

namespace UUP\Exchange\Types;

class UpdateInboxRulesRequestType extends BaseRequestType
{

        /**
         * @var string $MailboxSmtpAddress
         */
        protected $MailboxSmtpAddress = null;
        /**
         * @var boolean $RemoveOutlookRuleBlob
         */
        protected $RemoveOutlookRuleBlob = null;
        /**
         * @var ArrayOfRuleOperationsType $Operations
         */
        protected $Operations = null;

        /**
         * @param ArrayOfRuleOperationsType $Operations
         */
        public function __construct($Operations = null)
        {
                $this->Operations = $Operations;
        }

        /**
         * @return string
         */
        public function getMailboxSmtpAddress()
        {
                return $this->MailboxSmtpAddress;
        }

        /**
         * @param string $MailboxSmtpAddress
         * @return \UUP\Exchange\Types\UpdateInboxRulesRequestType
         */
        public function setMailboxSmtpAddress($MailboxSmtpAddress)
        {
                $this->MailboxSmtpAddress = $MailboxSmtpAddress;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getRemoveOutlookRuleBlob()
        {
                return $this->RemoveOutlookRuleBlob;
        }

        /**
         * @param boolean $RemoveOutlookRuleBlob
         * @return \UUP\Exchange\Types\UpdateInboxRulesRequestType
         */
        public function setRemoveOutlookRuleBlob($RemoveOutlookRuleBlob)
        {
                $this->RemoveOutlookRuleBlob = $RemoveOutlookRuleBlob;
                return $this;
        }

        /**
         * @return ArrayOfRuleOperationsType
         */
        public function getOperations()
        {
                return $this->Operations;
        }

        /**
         * @param ArrayOfRuleOperationsType $Operations
         * @return \UUP\Exchange\Types\UpdateInboxRulesRequestType
         */
        public function setOperations($Operations)
        {
                $this->Operations = $Operations;
                return $this;
        }

}
