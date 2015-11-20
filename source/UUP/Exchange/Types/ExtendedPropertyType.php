<?php

namespace UUP\Exchange\Types;

class ExtendedPropertyType
{

        /**
         * @var PathToExtendedFieldType $ExtendedFieldURI
         */
        protected $ExtendedFieldURI = null;
        /**
         * @var string $Value
         */
        protected $Value = null;
        /**
         * @var NonEmptyArrayOfPropertyValuesType $Values
         */
        protected $Values = null;

        /**
         * @param PathToExtendedFieldType $ExtendedFieldURI
         * @param string $Value
         * @param NonEmptyArrayOfPropertyValuesType $Values
         */
        public function __construct($ExtendedFieldURI = null, $Value = null, $Values = null)
        {
                $this->ExtendedFieldURI = $ExtendedFieldURI;
                $this->Value = $Value;
                $this->Values = $Values;
        }

        /**
         * @return PathToExtendedFieldType
         */
        public function getExtendedFieldURI()
        {
                return $this->ExtendedFieldURI;
        }

        /**
         * @param PathToExtendedFieldType $ExtendedFieldURI
         * @return \UUP\Exchange\Types\ExtendedPropertyType
         */
        public function setExtendedFieldURI($ExtendedFieldURI)
        {
                $this->ExtendedFieldURI = $ExtendedFieldURI;
                return $this;
        }

        /**
         * @return string
         */
        public function getValue()
        {
                return $this->Value;
        }

        /**
         * @param string $Value
         * @return \UUP\Exchange\Types\ExtendedPropertyType
         */
        public function setValue($Value)
        {
                $this->Value = $Value;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfPropertyValuesType
         */
        public function getValues()
        {
                return $this->Values;
        }

        /**
         * @param NonEmptyArrayOfPropertyValuesType $Values
         * @return \UUP\Exchange\Types\ExtendedPropertyType
         */
        public function setValues($Values)
        {
                $this->Values = $Values;
                return $this;
        }

}
