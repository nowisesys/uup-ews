<?php

namespace UUP\Exchange\Types;

class PathToIndexedFieldType extends BasePathToElementType
{

        /**
         * @var DictionaryURIType $FieldURI
         */
        protected $FieldURI = null;
        /**
         * @var string $FieldIndex
         */
        protected $FieldIndex = null;

        /**
         * @param DictionaryURIType $FieldURI
         * @param string $FieldIndex
         */
        public function __construct($FieldURI = null, $FieldIndex = null)
        {
                $this->FieldURI = $FieldURI;
                $this->FieldIndex = $FieldIndex;
        }

        /**
         * @return DictionaryURIType
         */
        public function getFieldURI()
        {
                return $this->FieldURI;
        }

        /**
         * @param DictionaryURIType $FieldURI
         * @return \UUP\Exchange\Types\PathToIndexedFieldType
         */
        public function setFieldURI($FieldURI)
        {
                $this->FieldURI = $FieldURI;
                return $this;
        }

        /**
         * @return string
         */
        public function getFieldIndex()
        {
                return $this->FieldIndex;
        }

        /**
         * @param string $FieldIndex
         * @return \UUP\Exchange\Types\PathToIndexedFieldType
         */
        public function setFieldIndex($FieldIndex)
        {
                $this->FieldIndex = $FieldIndex;
                return $this;
        }

}
