<?php

namespace UUP\Exchange\Types;

class InvalidRecipientType
{

        /**
         * @var NonEmptyStringType $SmtpAddress
         */
        protected $SmtpAddress = null;
        /**
         * @var InvalidRecipientResponseCodeType $ResponseCode
         */
        protected $ResponseCode = null;
        /**
         * @var string $MessageText
         */
        protected $MessageText = null;

        /**
         * @param NonEmptyStringType $SmtpAddress
         * @param InvalidRecipientResponseCodeType $ResponseCode
         */
        public function __construct($SmtpAddress = null, $ResponseCode = null)
        {
                $this->SmtpAddress = $SmtpAddress;
                $this->ResponseCode = $ResponseCode;
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
         * @return \UUP\Exchange\Types\InvalidRecipientType
         */
        public function setSmtpAddress($SmtpAddress)
        {
                $this->SmtpAddress = $SmtpAddress;
                return $this;
        }

        /**
         * @return InvalidRecipientResponseCodeType
         */
        public function getResponseCode()
        {
                return $this->ResponseCode;
        }

        /**
         * @param InvalidRecipientResponseCodeType $ResponseCode
         * @return \UUP\Exchange\Types\InvalidRecipientType
         */
        public function setResponseCode($ResponseCode)
        {
                $this->ResponseCode = $ResponseCode;
                return $this;
        }

        /**
         * @return string
         */
        public function getMessageText()
        {
                return $this->MessageText;
        }

        /**
         * @param string $MessageText
         * @return \UUP\Exchange\Types\InvalidRecipientType
         */
        public function setMessageText($MessageText)
        {
                $this->MessageText = $MessageText;
                return $this;
        }

}
