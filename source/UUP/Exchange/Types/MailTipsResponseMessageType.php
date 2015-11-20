<?php

namespace UUP\Exchange\Types;

class MailTipsResponseMessageType extends ResponseMessageType
{

        /**
         * @var MailTips $MailTips
         */
        protected $MailTips = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return MailTips
         */
        public function getMailTips()
        {
                return $this->MailTips;
        }

        /**
         * @param MailTips $MailTips
         * @return \UUP\Exchange\Types\MailTipsResponseMessageType
         */
        public function setMailTips($MailTips)
        {
                $this->MailTips = $MailTips;
                return $this;
        }

}
