<?php

namespace UUP\Exchange\Types;

class ArrayOfUserMailboxesType
{

        /**
         * @var UserMailboxType[] $UserMailbox
         */
        protected $UserMailbox = null;

        /**
         * @param UserMailboxType[] $UserMailbox
         */
        public function __construct(array $UserMailbox = null)
        {
                $this->UserMailbox = $UserMailbox;
        }

        /**
         * @return UserMailboxType[]
         */
        public function getUserMailbox()
        {
                return $this->UserMailbox;
        }

        /**
         * @param UserMailboxType[] $UserMailbox
         * @return \UUP\Exchange\Types\ArrayOfUserMailboxesType
         */
        public function setUserMailbox(array $UserMailbox)
        {
                $this->UserMailbox = $UserMailbox;
                return $this;
        }

}
