<?php

namespace UUP\Exchange\Types;

class CompleteNameType
{

        /**
         * @var string $Title
         */
        protected $Title = null;
        /**
         * @var string $FirstName
         */
        protected $FirstName = null;
        /**
         * @var string $MiddleName
         */
        protected $MiddleName = null;
        /**
         * @var string $LastName
         */
        protected $LastName = null;
        /**
         * @var string $Suffix
         */
        protected $Suffix = null;
        /**
         * @var string $Initials
         */
        protected $Initials = null;
        /**
         * @var string $FullName
         */
        protected $FullName = null;
        /**
         * @var string $Nickname
         */
        protected $Nickname = null;
        /**
         * @var string $YomiFirstName
         */
        protected $YomiFirstName = null;
        /**
         * @var string $YomiLastName
         */
        protected $YomiLastName = null;

        public function __construct()
        {
                
        }

        /**
         * @return string
         */
        public function getTitle()
        {
                return $this->Title;
        }

        /**
         * @param string $Title
         * @return \UUP\Exchange\Types\CompleteNameType
         */
        public function setTitle($Title)
        {
                $this->Title = $Title;
                return $this;
        }

        /**
         * @return string
         */
        public function getFirstName()
        {
                return $this->FirstName;
        }

        /**
         * @param string $FirstName
         * @return \UUP\Exchange\Types\CompleteNameType
         */
        public function setFirstName($FirstName)
        {
                $this->FirstName = $FirstName;
                return $this;
        }

        /**
         * @return string
         */
        public function getMiddleName()
        {
                return $this->MiddleName;
        }

        /**
         * @param string $MiddleName
         * @return \UUP\Exchange\Types\CompleteNameType
         */
        public function setMiddleName($MiddleName)
        {
                $this->MiddleName = $MiddleName;
                return $this;
        }

        /**
         * @return string
         */
        public function getLastName()
        {
                return $this->LastName;
        }

        /**
         * @param string $LastName
         * @return \UUP\Exchange\Types\CompleteNameType
         */
        public function setLastName($LastName)
        {
                $this->LastName = $LastName;
                return $this;
        }

        /**
         * @return string
         */
        public function getSuffix()
        {
                return $this->Suffix;
        }

        /**
         * @param string $Suffix
         * @return \UUP\Exchange\Types\CompleteNameType
         */
        public function setSuffix($Suffix)
        {
                $this->Suffix = $Suffix;
                return $this;
        }

        /**
         * @return string
         */
        public function getInitials()
        {
                return $this->Initials;
        }

        /**
         * @param string $Initials
         * @return \UUP\Exchange\Types\CompleteNameType
         */
        public function setInitials($Initials)
        {
                $this->Initials = $Initials;
                return $this;
        }

        /**
         * @return string
         */
        public function getFullName()
        {
                return $this->FullName;
        }

        /**
         * @param string $FullName
         * @return \UUP\Exchange\Types\CompleteNameType
         */
        public function setFullName($FullName)
        {
                $this->FullName = $FullName;
                return $this;
        }

        /**
         * @return string
         */
        public function getNickname()
        {
                return $this->Nickname;
        }

        /**
         * @param string $Nickname
         * @return \UUP\Exchange\Types\CompleteNameType
         */
        public function setNickname($Nickname)
        {
                $this->Nickname = $Nickname;
                return $this;
        }

        /**
         * @return string
         */
        public function getYomiFirstName()
        {
                return $this->YomiFirstName;
        }

        /**
         * @param string $YomiFirstName
         * @return \UUP\Exchange\Types\CompleteNameType
         */
        public function setYomiFirstName($YomiFirstName)
        {
                $this->YomiFirstName = $YomiFirstName;
                return $this;
        }

        /**
         * @return string
         */
        public function getYomiLastName()
        {
                return $this->YomiLastName;
        }

        /**
         * @param string $YomiLastName
         * @return \UUP\Exchange\Types\CompleteNameType
         */
        public function setYomiLastName($YomiLastName)
        {
                $this->YomiLastName = $YomiLastName;
                return $this;
        }

}
