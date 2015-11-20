<?php

namespace UUP\Exchange\Types;

class ArrayOfMailTipsResponseMessageType
{

        /**
         * @var MailTipsResponseMessageType[] $MailTipsResponseMessageType
         */
        protected $MailTipsResponseMessageType = null;

        /**
         * @param MailTipsResponseMessageType[] $MailTipsResponseMessageType
         */
        public function __construct(array $MailTipsResponseMessageType = null)
        {
                $this->MailTipsResponseMessageType = $MailTipsResponseMessageType;
        }

        /**
         * @return MailTipsResponseMessageType[]
         */
        public function getMailTipsResponseMessageType()
        {
                return $this->MailTipsResponseMessageType;
        }

        /**
         * @param MailTipsResponseMessageType[] $MailTipsResponseMessageType
         * @return \UUP\Exchange\Types\ArrayOfMailTipsResponseMessageType
         */
        public function setMailTipsResponseMessageType(array $MailTipsResponseMessageType)
        {
                $this->MailTipsResponseMessageType = $MailTipsResponseMessageType;
                return $this;
        }

}
