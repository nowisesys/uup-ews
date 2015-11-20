<?php

namespace UUP\Exchange\Types;

class AttendeeType
{

        /**
         * @var EmailAddressType $Mailbox
         */
        protected $Mailbox = null;
        /**
         * @var ResponseTypeType $ResponseType
         */
        protected $ResponseType = null;
        /**
         * @var \DateTime $LastResponseTime
         */
        protected $LastResponseTime = null;

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
         * @return \UUP\Exchange\Types\AttendeeType
         */
        public function setMailbox($Mailbox)
        {
                $this->Mailbox = $Mailbox;
                return $this;
        }

        /**
         * @return ResponseTypeType
         */
        public function getResponseType()
        {
                return $this->ResponseType;
        }

        /**
         * @param ResponseTypeType $ResponseType
         * @return \UUP\Exchange\Types\AttendeeType
         */
        public function setResponseType($ResponseType)
        {
                $this->ResponseType = $ResponseType;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getLastResponseTime()
        {
                if ($this->LastResponseTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->LastResponseTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $LastResponseTime
         * @return \UUP\Exchange\Types\AttendeeType
         */
        public function setLastResponseTime(\DateTime $LastResponseTime = null)
        {
                if ($LastResponseTime == null) {
                        $this->LastResponseTime = null;
                } else {
                        $this->LastResponseTime = $LastResponseTime->format(\DateTime::ATOM);
                }
                return $this;
        }

}
