<?php

namespace UUP\Exchange\Types;

class SetUserOofSettingsRequest extends BaseRequestType
{

        /**
         * @var EmailAddress $Mailbox
         */
        protected $Mailbox = null;
        /**
         * @var UserOofSettings $UserOofSettings
         */
        protected $UserOofSettings = null;

        /**
         * @param EmailAddress $Mailbox
         * @param UserOofSettings $UserOofSettings
         */
        public function __construct($Mailbox = null, $UserOofSettings = null)
        {
                $this->Mailbox = $Mailbox;
                $this->UserOofSettings = $UserOofSettings;
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
         * @return \UUP\Exchange\Types\SetUserOofSettingsRequest
         */
        public function setMailbox($Mailbox)
        {
                $this->Mailbox = $Mailbox;
                return $this;
        }

        /**
         * @return UserOofSettings
         */
        public function getUserOofSettings()
        {
                return $this->UserOofSettings;
        }

        /**
         * @param UserOofSettings $UserOofSettings
         * @return \UUP\Exchange\Types\SetUserOofSettingsRequest
         */
        public function setUserOofSettings($UserOofSettings)
        {
                $this->UserOofSettings = $UserOofSettings;
                return $this;
        }

}
