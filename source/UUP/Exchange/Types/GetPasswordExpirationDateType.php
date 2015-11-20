<?php

namespace UUP\Exchange\Types;

class GetPasswordExpirationDateType extends BaseRequestType
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
         * @return \UUP\Exchange\Types\GetPasswordExpirationDateType
         */
        public function setMailboxSmtpAddress($MailboxSmtpAddress)
        {
                $this->MailboxSmtpAddress = $MailboxSmtpAddress;
                return $this;
        }

}
