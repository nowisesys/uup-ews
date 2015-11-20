<?php

namespace UUP\Exchange\Types;

class ConnectingSIDType
{

        /**
         * @var NonEmptyStringType $PrincipalName
         */
        protected $PrincipalName = null;
        /**
         * @var NonEmptyStringType $SID
         */
        protected $SID = null;
        /**
         * @var NonEmptyStringType $PrimarySmtpAddress
         */
        protected $PrimarySmtpAddress = null;
        /**
         * @var NonEmptyStringType $SmtpAddress
         */
        protected $SmtpAddress = null;

        /**
         * @param NonEmptyStringType $PrincipalName
         * @param NonEmptyStringType $SID
         * @param NonEmptyStringType $PrimarySmtpAddress
         * @param NonEmptyStringType $SmtpAddress
         */
        public function __construct($PrincipalName = null, $SID = null, $PrimarySmtpAddress = null, $SmtpAddress = null)
        {
                $this->PrincipalName = $PrincipalName;
                $this->SID = $SID;
                $this->PrimarySmtpAddress = $PrimarySmtpAddress;
                $this->SmtpAddress = $SmtpAddress;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getPrincipalName()
        {
                return $this->PrincipalName;
        }

        /**
         * @param NonEmptyStringType $PrincipalName
         * @return \UUP\Exchange\Types\ConnectingSIDType
         */
        public function setPrincipalName($PrincipalName)
        {
                $this->PrincipalName = $PrincipalName;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getSID()
        {
                return $this->SID;
        }

        /**
         * @param NonEmptyStringType $SID
         * @return \UUP\Exchange\Types\ConnectingSIDType
         */
        public function setSID($SID)
        {
                $this->SID = $SID;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getPrimarySmtpAddress()
        {
                return $this->PrimarySmtpAddress;
        }

        /**
         * @param NonEmptyStringType $PrimarySmtpAddress
         * @return \UUP\Exchange\Types\ConnectingSIDType
         */
        public function setPrimarySmtpAddress($PrimarySmtpAddress)
        {
                $this->PrimarySmtpAddress = $PrimarySmtpAddress;
                return $this;
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
         * @return \UUP\Exchange\Types\ConnectingSIDType
         */
        public function setSmtpAddress($SmtpAddress)
        {
                $this->SmtpAddress = $SmtpAddress;
                return $this;
        }

}
