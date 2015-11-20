<?php

namespace UUP\Exchange\Types;

class DistributionListType extends ItemType
{

        /**
         * @var string $DisplayName
         */
        protected $DisplayName = null;
        /**
         * @var string $FileAs
         */
        protected $FileAs = null;
        /**
         * @var ContactSourceType $ContactSource
         */
        protected $ContactSource = null;
        /**
         * @var MembersListType $Members
         */
        protected $Members = null;

        public function __construct()
        {
                parent::__construct();
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
         * @return \UUP\Exchange\Types\DistributionListType
         */
        public function setDisplayName($DisplayName)
        {
                $this->DisplayName = $DisplayName;
                return $this;
        }

        /**
         * @return string
         */
        public function getFileAs()
        {
                return $this->FileAs;
        }

        /**
         * @param string $FileAs
         * @return \UUP\Exchange\Types\DistributionListType
         */
        public function setFileAs($FileAs)
        {
                $this->FileAs = $FileAs;
                return $this;
        }

        /**
         * @return ContactSourceType
         */
        public function getContactSource()
        {
                return $this->ContactSource;
        }

        /**
         * @param ContactSourceType $ContactSource
         * @return \UUP\Exchange\Types\DistributionListType
         */
        public function setContactSource($ContactSource)
        {
                $this->ContactSource = $ContactSource;
                return $this;
        }

        /**
         * @return MembersListType
         */
        public function getMembers()
        {
                return $this->Members;
        }

        /**
         * @param MembersListType $Members
         * @return \UUP\Exchange\Types\DistributionListType
         */
        public function setMembers($Members)
        {
                $this->Members = $Members;
                return $this;
        }

}
