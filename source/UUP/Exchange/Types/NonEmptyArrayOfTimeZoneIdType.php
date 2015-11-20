<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfTimeZoneIdType
{

        /**
         * @var string[] $Id
         */
        protected $Id = null;

        /**
         * @param string[] $Id
         */
        public function __construct(array $Id = null)
        {
                $this->Id = $Id;
        }

        /**
         * @return string[]
         */
        public function getId()
        {
                return $this->Id;
        }

        /**
         * @param string[] $Id
         * @return \UUP\Exchange\Types\NonEmptyArrayOfTimeZoneIdType
         */
        public function setId(array $Id)
        {
                $this->Id = $Id;
                return $this;
        }

}
