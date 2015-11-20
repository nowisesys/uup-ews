<?php

namespace UUP\Exchange\Types;

class ContactsViewType extends BasePagingType
{

        /**
         * @var string $InitialName
         */
        protected $InitialName = null;
        /**
         * @var string $FinalName
         */
        protected $FinalName = null;

        /**
         * @param int $MaxEntriesReturned
         * @param string $InitialName
         * @param string $FinalName
         */
        public function __construct($MaxEntriesReturned = null, $InitialName = null, $FinalName = null)
        {
                parent::__construct($MaxEntriesReturned);
                $this->InitialName = $InitialName;
                $this->FinalName = $FinalName;
        }

        /**
         * @return string
         */
        public function getInitialName()
        {
                return $this->InitialName;
        }

        /**
         * @param string $InitialName
         * @return \UUP\Exchange\Types\ContactsViewType
         */
        public function setInitialName($InitialName)
        {
                $this->InitialName = $InitialName;
                return $this;
        }

        /**
         * @return string
         */
        public function getFinalName()
        {
                return $this->FinalName;
        }

        /**
         * @param string $FinalName
         * @return \UUP\Exchange\Types\ContactsViewType
         */
        public function setFinalName($FinalName)
        {
                $this->FinalName = $FinalName;
                return $this;
        }

}
