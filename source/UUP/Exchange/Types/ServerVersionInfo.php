<?php

namespace UUP\Exchange\Types;

class ServerVersionInfo
{

        /**
         * @var int $MajorVersion
         */
        protected $MajorVersion = null;
        /**
         * @var int $MinorVersion
         */
        protected $MinorVersion = null;
        /**
         * @var int $MajorBuildNumber
         */
        protected $MajorBuildNumber = null;
        /**
         * @var int $MinorBuildNumber
         */
        protected $MinorBuildNumber = null;
        /**
         * @var string $Version
         */
        protected $Version = null;

        /**
         * @param int $MajorVersion
         * @param int $MinorVersion
         * @param int $MajorBuildNumber
         * @param int $MinorBuildNumber
         * @param string $Version
         */
        public function __construct($MajorVersion = null, $MinorVersion = null, $MajorBuildNumber = null, $MinorBuildNumber = null, $Version = null)
        {
                $this->MajorVersion = $MajorVersion;
                $this->MinorVersion = $MinorVersion;
                $this->MajorBuildNumber = $MajorBuildNumber;
                $this->MinorBuildNumber = $MinorBuildNumber;
                $this->Version = $Version;
        }

        /**
         * @return int
         */
        public function getMajorVersion()
        {
                return $this->MajorVersion;
        }

        /**
         * @param int $MajorVersion
         * @return \UUP\Exchange\Types\ServerVersionInfo
         */
        public function setMajorVersion($MajorVersion)
        {
                $this->MajorVersion = $MajorVersion;
                return $this;
        }

        /**
         * @return int
         */
        public function getMinorVersion()
        {
                return $this->MinorVersion;
        }

        /**
         * @param int $MinorVersion
         * @return \UUP\Exchange\Types\ServerVersionInfo
         */
        public function setMinorVersion($MinorVersion)
        {
                $this->MinorVersion = $MinorVersion;
                return $this;
        }

        /**
         * @return int
         */
        public function getMajorBuildNumber()
        {
                return $this->MajorBuildNumber;
        }

        /**
         * @param int $MajorBuildNumber
         * @return \UUP\Exchange\Types\ServerVersionInfo
         */
        public function setMajorBuildNumber($MajorBuildNumber)
        {
                $this->MajorBuildNumber = $MajorBuildNumber;
                return $this;
        }

        /**
         * @return int
         */
        public function getMinorBuildNumber()
        {
                return $this->MinorBuildNumber;
        }

        /**
         * @param int $MinorBuildNumber
         * @return \UUP\Exchange\Types\ServerVersionInfo
         */
        public function setMinorBuildNumber($MinorBuildNumber)
        {
                $this->MinorBuildNumber = $MinorBuildNumber;
                return $this;
        }

        /**
         * @return string
         */
        public function getVersion()
        {
                return $this->Version;
        }

        /**
         * @param string $Version
         * @return \UUP\Exchange\Types\ServerVersionInfo
         */
        public function setVersion($Version)
        {
                $this->Version = $Version;
                return $this;
        }

}
