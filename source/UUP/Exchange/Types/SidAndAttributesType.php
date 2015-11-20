<?php

namespace UUP\Exchange\Types;

class SidAndAttributesType
{

        /**
         * @var string $SecurityIdentifier
         */
        protected $SecurityIdentifier = null;
        /**
         * @var int $Attributes
         */
        protected $Attributes = null;

        /**
         * @param string $SecurityIdentifier
         * @param int $Attributes
         */
        public function __construct($SecurityIdentifier = null, $Attributes = null)
        {
                $this->SecurityIdentifier = $SecurityIdentifier;
                $this->Attributes = $Attributes;
        }

        /**
         * @return string
         */
        public function getSecurityIdentifier()
        {
                return $this->SecurityIdentifier;
        }

        /**
         * @param string $SecurityIdentifier
         * @return \UUP\Exchange\Types\SidAndAttributesType
         */
        public function setSecurityIdentifier($SecurityIdentifier)
        {
                $this->SecurityIdentifier = $SecurityIdentifier;
                return $this;
        }

        /**
         * @return int
         */
        public function getAttributes()
        {
                return $this->Attributes;
        }

        /**
         * @param int $Attributes
         * @return \UUP\Exchange\Types\SidAndAttributesType
         */
        public function setAttributes($Attributes)
        {
                $this->Attributes = $Attributes;
                return $this;
        }

}
