<?php

namespace UUP\Exchange\Types;

class PathToExceptionFieldType extends BasePathToElementType
{

        /**
         * @var ExceptionPropertyURIType $FieldURI
         */
        protected $FieldURI = null;

        /**
         * @param ExceptionPropertyURIType $FieldURI
         */
        public function __construct($FieldURI = null)
        {
                $this->FieldURI = $FieldURI;
        }

        /**
         * @return ExceptionPropertyURIType
         */
        public function getFieldURI()
        {
                return $this->FieldURI;
        }

        /**
         * @param ExceptionPropertyURIType $FieldURI
         * @return \UUP\Exchange\Types\PathToExceptionFieldType
         */
        public function setFieldURI($FieldURI)
        {
                $this->FieldURI = $FieldURI;
                return $this;
        }

}
