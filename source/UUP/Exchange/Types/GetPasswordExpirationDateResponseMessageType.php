<?php

namespace UUP\Exchange\Types;

class GetPasswordExpirationDateResponseMessageType extends ResponseMessageType
{

        /**
         * @var \DateTime $PasswordExpirationDate
         */
        protected $PasswordExpirationDate = null;

        /**
         * @param ResponseClassType $ResponseClass
         * @param \DateTime $PasswordExpirationDate
         */
        public function __construct($ResponseClass = null, \DateTime $PasswordExpirationDate = null)
        {
                parent::__construct($ResponseClass);
                $this->PasswordExpirationDate = $PasswordExpirationDate ? $PasswordExpirationDate->format(\DateTime::ATOM) : null;
        }

        /**
         * @return \DateTime
         */
        public function getPasswordExpirationDate()
        {
                if ($this->PasswordExpirationDate == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->PasswordExpirationDate);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $PasswordExpirationDate
         * @return \UUP\Exchange\Types\GetPasswordExpirationDateResponseMessageType
         */
        public function setPasswordExpirationDate(\DateTime $PasswordExpirationDate)
        {
                $this->PasswordExpirationDate = $PasswordExpirationDate->format(\DateTime::ATOM);
                return $this;
        }

}
