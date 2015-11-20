<?php

namespace UUP\Exchange\Types;

class DirectoryEntryType
{

        /**
         * @var EmailAddressType $Id
         */
        protected $Id = null;

        public function __construct()
        {
                
        }

        /**
         * @return EmailAddressType
         */
        public function getId()
        {
                return $this->Id;
        }

        /**
         * @param EmailAddressType $Id
         * @return \UUP\Exchange\Types\DirectoryEntryType
         */
        public function setId($Id)
        {
                $this->Id = $Id;
                return $this;
        }

}
