<?php

namespace UUP\Exchange\Types;

class ArrayOfTransitionsGroupsType
{

        /**
         * @var ArrayOfTransitionsType[] $TransitionsGroup
         */
        protected $TransitionsGroup = null;

        /**
         * @param ArrayOfTransitionsType[] $TransitionsGroup
         */
        public function __construct(array $TransitionsGroup = null)
        {
                $this->TransitionsGroup = $TransitionsGroup;
        }

        /**
         * @return ArrayOfTransitionsType[]
         */
        public function getTransitionsGroup()
        {
                return $this->TransitionsGroup;
        }

        /**
         * @param ArrayOfTransitionsType[] $TransitionsGroup
         * @return \UUP\Exchange\Types\ArrayOfTransitionsGroupsType
         */
        public function setTransitionsGroup(array $TransitionsGroup)
        {
                $this->TransitionsGroup = $TransitionsGroup;
                return $this;
        }

}
