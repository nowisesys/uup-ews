<?php

namespace UUP\Exchange\Types;

class FolderResponseShapeType
{

        /**
         * @var DefaultShapeNamesType $BaseShape
         */
        protected $BaseShape = null;
        /**
         * @var NonEmptyArrayOfPathsToElementType $AdditionalProperties
         */
        protected $AdditionalProperties = null;

        /**
         * @param DefaultShapeNamesType $BaseShape
         */
        public function __construct($BaseShape = null)
        {
                $this->BaseShape = $BaseShape;
        }

        /**
         * @return DefaultShapeNamesType
         */
        public function getBaseShape()
        {
                return $this->BaseShape;
        }

        /**
         * @param DefaultShapeNamesType $BaseShape
         * @return \UUP\Exchange\Types\FolderResponseShapeType
         */
        public function setBaseShape($BaseShape)
        {
                $this->BaseShape = $BaseShape;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfPathsToElementType
         */
        public function getAdditionalProperties()
        {
                return $this->AdditionalProperties;
        }

        /**
         * @param NonEmptyArrayOfPathsToElementType $AdditionalProperties
         * @return \UUP\Exchange\Types\FolderResponseShapeType
         */
        public function setAdditionalProperties($AdditionalProperties)
        {
                $this->AdditionalProperties = $AdditionalProperties;
                return $this;
        }

}
