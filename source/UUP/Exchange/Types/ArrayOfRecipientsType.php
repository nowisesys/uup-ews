<?php

namespace UUP\Exchange\Types;

class ArrayOfRecipientsType
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
         * @return \UUP\Exchange\Types\ArrayOfRecipientsType
         */
        public function setMailbox($Mailbox)
        {
                $this->Mailbox = $Mailbox;
                return $this;
        }

}
