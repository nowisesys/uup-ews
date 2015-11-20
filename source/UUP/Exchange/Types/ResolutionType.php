<?php

namespace UUP\Exchange\Types;

class ResolutionType
{

        /**
         * @var EmailAddressType $Mailbox
         */
        protected $Mailbox = null;
        /**
         * @var ContactItemType $Contact
         */
        protected $Contact = null;

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
         * @return \UUP\Exchange\Types\ResolutionType
         */
        public function setMailbox($Mailbox)
        {
                $this->Mailbox = $Mailbox;
                return $this;
        }

        /**
         * @return ContactItemType
         */
        public function getContact()
        {
                return $this->Contact;
        }

        /**
         * @param ContactItemType $Contact
         * @return \UUP\Exchange\Types\ResolutionType
         */
        public function setContact($Contact)
        {
                $this->Contact = $Contact;
                return $this;
        }

}
