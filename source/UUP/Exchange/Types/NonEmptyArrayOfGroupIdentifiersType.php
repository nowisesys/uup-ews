<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfGroupIdentifiersType
{

        /**
         * @var SidAndAttributesType[] $GroupIdentifier
         */
        protected $GroupIdentifier = null;

        /**
         * @param SidAndAttributesType[] $GroupIdentifier
         */
        public function __construct(array $GroupIdentifier = null)
        {
                $this->GroupIdentifier = $GroupIdentifier;
        }

        /**
         * @return SidAndAttributesType[]
         */
        public function getGroupIdentifier()
        {
                return $this->GroupIdentifier;
        }

        /**
         * @param SidAndAttributesType[] $GroupIdentifier
         * @return \UUP\Exchange\Types\NonEmptyArrayOfGroupIdentifiersType
         */
        public function setGroupIdentifier(array $GroupIdentifier)
        {
                $this->GroupIdentifier = $GroupIdentifier;
                return $this;
        }

}
