<?php

namespace UUP\Exchange\Types;

class PathToUnindexedFieldType extends BasePathToElementType
{

        /**
         * @var UnindexedFieldURIType $FieldURI
         */
        protected $FieldURI = null;

        /**
         * @param UnindexedFieldURIType $FieldURI
         */
        public function __construct($FieldURI = null)
        {
                $this->FieldURI = $FieldURI;
        }

        /**
         * @return UnindexedFieldURIType
         */
        public function getFieldURI()
        {
                return $this->FieldURI;
        }

        /**
         * @param UnindexedFieldURIType $FieldURI
         * @return \UUP\Exchange\Types\PathToUnindexedFieldType
         */
        public function setFieldURI($FieldURI)
        {
                $this->FieldURI = $FieldURI;
                return $this;
        }

}
