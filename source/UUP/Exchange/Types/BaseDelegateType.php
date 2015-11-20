<?php

namespace UUP\Exchange\Types;

abstract class BaseDelegateType extends BaseRequestType
{

        /**
         * @var EmailAddressType $Mailbox
         */
        protected $Mailbox = null;

        /**
         * @param EmailAddressType $Mailbox
         */
        public function __construct($Mailbox = null)
        {
                $this->Mailbox = $Mailbox;
        }

        /**
         * @return EmailAddressType
         */
        public function getMailbox()
        {
                return $this->Mailbox;
        }

        /**
         * @param EmailAddressType $Mailbox
         * @return \UUP\Exchange\Types\BaseDelegateType
         */
        public function setMailbox($Mailbox)
        {
                $this->Mailbox = $Mailbox;
                return $this;
        }

}
