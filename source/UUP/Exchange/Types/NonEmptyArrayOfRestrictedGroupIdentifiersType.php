<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfRestrictedGroupIdentifiersType
{

        /**
         * @var SidAndAttributesType[] $RestrictedGroupIdentifier
         */
        protected $RestrictedGroupIdentifier = null;

        /**
         * @param SidAndAttributesType[] $RestrictedGroupIdentifier
         */
        public function __construct(array $RestrictedGroupIdentifier = null)
        {
                $this->RestrictedGroupIdentifier = $RestrictedGroupIdentifier;
        }

        /**
         * @return SidAndAttributesType[]
         */
        public function getRestrictedGroupIdentifier()
        {
                return $this->RestrictedGroupIdentifier;
        }

        /**
         * @param SidAndAttributesType[] $RestrictedGroupIdentifier
         * @return \UUP\Exchange\Types\NonEmptyArrayOfRestrictedGroupIdentifiersType
         */
        public function setRestrictedGroupIdentifier(array $RestrictedGroupIdentifier)
        {
                $this->RestrictedGroupIdentifier = $RestrictedGroupIdentifier;
                return $this;
        }

}
