<?php

namespace UUP\Exchange\Types;

class ArrayOfInvalidRecipientsType
{

        /**
         * @var InvalidRecipientType $InvalidRecipient
         */
        protected $InvalidRecipient = null;

        /**
         * @param InvalidRecipientType $InvalidRecipient
         */
        public function __construct($InvalidRecipient = null)
        {
                $this->InvalidRecipient = $InvalidRecipient;
        }

        /**
         * @return InvalidRecipientType
         */
        public function getInvalidRecipient()
        {
                return $this->InvalidRecipient;
        }

        /**
         * @param InvalidRecipientType $InvalidRecipient
         * @return \UUP\Exchange\Types\ArrayOfInvalidRecipientsType
         */
        public function setInvalidRecipient($InvalidRecipient)
        {
                $this->InvalidRecipient = $InvalidRecipient;
                return $this;
        }

}
