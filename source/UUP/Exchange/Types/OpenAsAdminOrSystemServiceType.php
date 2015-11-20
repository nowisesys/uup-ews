<?php

namespace UUP\Exchange\Types;

class OpenAsAdminOrSystemServiceType
{

        /**
         * @var ConnectingSIDType $ConnectingSID
         */
        protected $ConnectingSID = null;
        /**
         * @var SpecialLogonTypeType $LogonType
         */
        protected $LogonType = null;

        /**
         * @param ConnectingSIDType $ConnectingSID
         * @param SpecialLogonTypeType $LogonType
         */
        public function __construct($ConnectingSID = null, $LogonType = null)
        {
                $this->ConnectingSID = $ConnectingSID;
                $this->LogonType = $LogonType;
        }

        /**
         * @return ConnectingSIDType
         */
        public function getConnectingSID()
        {
                return $this->ConnectingSID;
        }

        /**
         * @param ConnectingSIDType $ConnectingSID
         * @return \UUP\Exchange\Types\OpenAsAdminOrSystemServiceType
         */
        public function setConnectingSID($ConnectingSID)
        {
                $this->ConnectingSID = $ConnectingSID;
                return $this;
        }

        /**
         * @return SpecialLogonTypeType
         */
        public function getLogonType()
        {
                return $this->LogonType;
        }

        /**
         * @param SpecialLogonTypeType $LogonType
         * @return \UUP\Exchange\Types\OpenAsAdminOrSystemServiceType
         */
        public function setLogonType($LogonType)
        {
                $this->LogonType = $LogonType;
                return $this;
        }

}
