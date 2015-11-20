<?php

namespace UUP\Exchange\Types;

class SerializedSecurityContextType
{

        /**
         * @var string $UserSid
         */
        protected $UserSid = null;
        /**
         * @var NonEmptyArrayOfGroupIdentifiersType $GroupSids
         */
        protected $GroupSids = null;
        /**
         * @var NonEmptyArrayOfRestrictedGroupIdentifiersType $RestrictedGroupSids
         */
        protected $RestrictedGroupSids = null;
        /**
         * @var string $PrimarySmtpAddress
         */
        protected $PrimarySmtpAddress = null;

        /**
         * @param string $UserSid
         */
        public function __construct($UserSid = null)
        {
                $this->UserSid = $UserSid;
        }

        /**
         * @return string
         */
        public function getUserSid()
        {
                return $this->UserSid;
        }

        /**
         * @param string $UserSid
         * @return \UUP\Exchange\Types\SerializedSecurityContextType
         */
        public function setUserSid($UserSid)
        {
                $this->UserSid = $UserSid;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfGroupIdentifiersType
         */
        public function getGroupSids()
        {
                return $this->GroupSids;
        }

        /**
         * @param NonEmptyArrayOfGroupIdentifiersType $GroupSids
         * @return \UUP\Exchange\Types\SerializedSecurityContextType
         */
        public function setGroupSids($GroupSids)
        {
                $this->GroupSids = $GroupSids;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfRestrictedGroupIdentifiersType
         */
        public function getRestrictedGroupSids()
        {
                return $this->RestrictedGroupSids;
        }

        /**
         * @param NonEmptyArrayOfRestrictedGroupIdentifiersType $RestrictedGroupSids
         * @return \UUP\Exchange\Types\SerializedSecurityContextType
         */
        public function setRestrictedGroupSids($RestrictedGroupSids)
        {
                $this->RestrictedGroupSids = $RestrictedGroupSids;
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
         * @return \UUP\Exchange\Types\SerializedSecurityContextType
         */
        public function setPrimarySmtpAddress($PrimarySmtpAddress)
        {
                $this->PrimarySmtpAddress = $PrimarySmtpAddress;
                return $this;
        }

}
