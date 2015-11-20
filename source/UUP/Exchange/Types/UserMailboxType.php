<?php

namespace UUP\Exchange\Types;

class UserMailboxType
{

        /**
         * @var string $Id
         */
        protected $Id = null;
        /**
         * @var boolean $IsArchive
         */
        protected $IsArchive = null;

        /**
         * @param string $Id
         * @param boolean $IsArchive
         */
        public function __construct($Id = null, $IsArchive = null)
        {
                $this->Id = $Id;
                $this->IsArchive = $IsArchive;
        }

        /**
         * @return string
         */
        public function getId()
        {
                return $this->Id;
        }

        /**
         * @param string $Id
         * @return \UUP\Exchange\Types\UserMailboxType
         */
        public function setId($Id)
        {
                $this->Id = $Id;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsArchive()
        {
                return $this->IsArchive;
        }

        /**
         * @param boolean $IsArchive
         * @return \UUP\Exchange\Types\UserMailboxType
         */
        public function setIsArchive($IsArchive)
        {
                $this->IsArchive = $IsArchive;
                return $this;
        }

}
