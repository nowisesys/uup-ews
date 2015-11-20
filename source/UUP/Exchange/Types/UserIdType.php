<?php

namespace UUP\Exchange\Types;

class UserIdType
{

        /**
         * @var string $SID
         */
        protected $SID = null;
        /**
         * @var string $PrimarySmtpAddress
         */
        protected $PrimarySmtpAddress = null;
        /**
         * @var string $DisplayName
         */
        protected $DisplayName = null;
        /**
         * @var DistinguishedUserType $DistinguishedUser
         */
        protected $DistinguishedUser = null;
        /**
         * @var string $ExternalUserIdentity
         */
        protected $ExternalUserIdentity = null;

        public function __construct()
        {
                
        }

        /**
         * @return string
         */
        public function getSID()
        {
                return $this->SID;
        }

        /**
         * @param string $SID
         * @return \UUP\Exchange\Types\UserIdType
         */
        public function setSID($SID)
        {
                $this->SID = $SID;
                return $this;
        }

        /**
         * @return string
         */
        public function getPrimarySmtpAddress()
        {
                return $this->PrimarySmtpAddress;
        }

        /**
         * @param string $PrimarySmtpAddress
         * @return \UUP\Exchange\Types\UserIdType
         */
        public function setPrimarySmtpAddress($PrimarySmtpAddress)
        {
                $this->PrimarySmtpAddress = $PrimarySmtpAddress;
                return $this;
        }

        /**
         * @return string
         */
        public function getDisplayName()
        {
                return $this->DisplayName;
        }

        /**
         * @param string $DisplayName
         * @return \UUP\Exchange\Types\UserIdType
         */
        public function setDisplayName($DisplayName)
        {
                $this->DisplayName = $DisplayName;
                return $this;
        }

        /**
         * @return DistinguishedUserType
         */
        public function getDistinguishedUser()
        {
                return $this->DistinguishedUser;
        }

        /**
         * @param DistinguishedUserType $DistinguishedUser
         * @return \UUP\Exchange\Types\UserIdType
         */
        public function setDistinguishedUser($DistinguishedUser)
        {
                $this->DistinguishedUser = $DistinguishedUser;
                return $this;
        }

        /**
         * @return string
         */
        public function getExternalUserIdentity()
        {
                return $this->ExternalUserIdentity;
        }

        /**
         * @param string $ExternalUserIdentity
         * @return \UUP\Exchange\Types\UserIdType
         */
        public function setExternalUserIdentity($ExternalUserIdentity)
        {
                $this->ExternalUserIdentity = $ExternalUserIdentity;
                return $this;
        }

}
