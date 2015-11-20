<?php

namespace UUP\Exchange\Types;

class ArrayOfMailboxData
{

        /**
         * @var MailboxData[] $MailboxData
         */
        protected $MailboxData = null;

        public function __construct()
        {
                
        }

        /**
         * @return MailboxData[]
         */
        public function getMailboxData()
        {
                return $this->MailboxData;
        }

        /**
         * @param MailboxData[] $MailboxData
         * @return \UUP\Exchange\Types\ArrayOfMailboxData
         */
        public function setMailboxData(array $MailboxData = null)
        {
                $this->MailboxData = $MailboxData;
                return $this;
        }

}
