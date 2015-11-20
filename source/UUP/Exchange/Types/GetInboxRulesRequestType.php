<?php

namespace UUP\Exchange\Types;

class GetInboxRulesRequestType extends BaseRequestType
{

        /**
         * @var string $MailboxSmtpAddress
         */
        protected $MailboxSmtpAddress = null;

        public function __construct()
        {
                
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
         * @return \UUP\Exchange\Types\GetInboxRulesRequestType
         */
        public function setMailboxSmtpAddress($MailboxSmtpAddress)
        {
                $this->MailboxSmtpAddress = $MailboxSmtpAddress;
                return $this;
        }

}
