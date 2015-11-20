<?php

namespace UUP\Exchange\Types;

class ResolveNamesResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfResolutionType $ResolutionSet
         */
        protected $ResolutionSet = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return ArrayOfResolutionType
         */
        public function getResolutionSet()
        {
                return $this->ResolutionSet;
        }

        /**
         * @param ArrayOfResolutionType $ResolutionSet
         * @return \UUP\Exchange\Types\ResolveNamesResponseMessageType
         */
        public function setResolutionSet($ResolutionSet)
        {
                $this->ResolutionSet = $ResolutionSet;
                return $this;
        }

}
