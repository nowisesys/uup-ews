<?php

namespace UUP\Exchange\Types;

class MemberType
{

        /**
         * @var EmailAddressType $Mailbox
         */
        protected $Mailbox = null;
        /**
         * @var MemberStatusType $Status
         */
        protected $Status = null;
        /**
         * @var string $Key
         */
        protected $Key = null;

        /**
         * @param string $Key
         */
        public function __construct($Key = null)
        {
                $this->Key = $Key;
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
         * @return \UUP\Exchange\Types\MemberType
         */
        public function setMailbox($Mailbox)
        {
                $this->Mailbox = $Mailbox;
                return $this;
        }

        /**
         * @return MemberStatusType
         */
        public function getStatus()
        {
                return $this->Status;
        }

        /**
         * @param MemberStatusType $Status
         * @return \UUP\Exchange\Types\MemberType
         */
        public function setStatus($Status)
        {
                $this->Status = $Status;
                return $this;
        }

        /**
         * @return string
         */
        public function getKey()
        {
                return $this->Key;
        }

        /**
         * @param string $Key
         * @return \UUP\Exchange\Types\MemberType
         */
        public function setKey($Key)
        {
                $this->Key = $Key;
                return $this;
        }

}
