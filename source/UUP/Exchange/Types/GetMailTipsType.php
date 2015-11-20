<?php

namespace UUP\Exchange\Types;

class GetMailTipsType extends BaseRequestType
{

        /**
         * @var EmailAddressType $SendingAs
         */
        protected $SendingAs = null;
        /**
         * @var ArrayOfRecipientsType $Recipients
         */
        protected $Recipients = null;
        /**
         * @var MailTipTypes $MailTipsRequested
         */
        protected $MailTipsRequested = null;

        /**
         * @param EmailAddressType $SendingAs
         * @param ArrayOfRecipientsType $Recipients
         * @param MailTipTypes $MailTipsRequested
         */
        public function __construct($SendingAs = null, $Recipients = null, $MailTipsRequested = null)
        {
                $this->SendingAs = $SendingAs;
                $this->Recipients = $Recipients;
                $this->MailTipsRequested = $MailTipsRequested;
        }

        /**
         * @return EmailAddressType
         */
        public function getSendingAs()
        {
                return $this->SendingAs;
        }

        /**
         * @param EmailAddressType $SendingAs
         * @return \UUP\Exchange\Types\GetMailTipsType
         */
        public function setSendingAs($SendingAs)
        {
                $this->SendingAs = $SendingAs;
                return $this;
        }

        /**
         * @return ArrayOfRecipientsType
         */
        public function getRecipients()
        {
                return $this->Recipients;
        }

        /**
         * @param ArrayOfRecipientsType $Recipients
         * @return \UUP\Exchange\Types\GetMailTipsType
         */
        public function setRecipients($Recipients)
        {
                $this->Recipients = $Recipients;
                return $this;
        }

        /**
         * @return MailTipTypes
         */
        public function getMailTipsRequested()
        {
                return $this->MailTipsRequested;
        }

        /**
         * @param MailTipTypes $MailTipsRequested
         * @return \UUP\Exchange\Types\GetMailTipsType
         */
        public function setMailTipsRequested($MailTipsRequested)
        {
                $this->MailTipsRequested = $MailTipsRequested;
                return $this;
        }

}
