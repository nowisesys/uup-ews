<?php

namespace UUP\Exchange\Types;

class ArrayOfSmtpAddressType
{

        /**
         * @var NonEmptyStringType $SmtpAddress
         */
        protected $SmtpAddress = null;

        /**
         * @param NonEmptyStringType $SmtpAddress
         */
        public function __construct($SmtpAddress = null)
        {
                $this->SmtpAddress = $SmtpAddress;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getSmtpAddress()
        {
                return $this->SmtpAddress;
        }

        /**
         * @param NonEmptyStringType $SmtpAddress
         * @return \UUP\Exchange\Types\ArrayOfSmtpAddressType
         */
        public function setSmtpAddress($SmtpAddress)
        {
                $this->SmtpAddress = $SmtpAddress;
                return $this;
        }

}
