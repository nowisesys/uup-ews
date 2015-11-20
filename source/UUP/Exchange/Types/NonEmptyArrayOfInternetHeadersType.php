<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfInternetHeadersType
{

        /**
         * @var InternetHeaderType[] $InternetMessageHeader
         */
        protected $InternetMessageHeader = null;

        /**
         * @param InternetHeaderType[] $InternetMessageHeader
         */
        public function __construct(array $InternetMessageHeader = null)
        {
                $this->InternetMessageHeader = $InternetMessageHeader;
        }

        /**
         * @return InternetHeaderType[]
         */
        public function getInternetMessageHeader()
        {
                return $this->InternetMessageHeader;
        }

        /**
         * @param InternetHeaderType[] $InternetMessageHeader
         * @return \UUP\Exchange\Types\NonEmptyArrayOfInternetHeadersType
         */
        public function setInternetMessageHeader(array $InternetMessageHeader)
        {
                $this->InternetMessageHeader = $InternetMessageHeader;
                return $this;
        }

}
