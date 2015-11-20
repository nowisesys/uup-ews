<?php

namespace UUP\Exchange\Types;

class GetUserOofSettingsRequest extends BaseRequestType
{

        /**
         * @var EmailAddress $Mailbox
         */
        protected $Mailbox = null;

        /**
         * @param EmailAddress $Mailbox
         */
        public function __construct($Mailbox = null)
        {
                $this->Mailbox = $Mailbox;
        }

        /**
         * @return EmailAddress
         */
        public function getMailbox()
        {
                return $this->Mailbox;
        }

        /**
         * @param EmailAddress $Mailbox
         * @return \UUP\Exchange\Types\GetUserOofSettingsRequest
         */
        public function setMailbox($Mailbox)
        {
                $this->Mailbox = $Mailbox;
                return $this;
        }

}
