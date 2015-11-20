<?php

namespace UUP\Exchange\Types;

class AggregateOnType
{

        /**
         * @var PathToUnindexedFieldType $FieldURI
         */
        protected $FieldURI = null;
        /**
         * @var PathToIndexedFieldType $IndexedFieldURI
         */
        protected $IndexedFieldURI = null;
        /**
         * @var PathToExtendedFieldType $ExtendedFieldURI
         */
        protected $ExtendedFieldURI = null;
        /**
         * @var AggregateType $Aggregate
         */
        protected $Aggregate = null;

        /**
         * @param PathToUnindexedFieldType $FieldURI
         * @param PathToIndexedFieldType $IndexedFieldURI
         * @param PathToExtendedFieldType $ExtendedFieldURI
         * @param AggregateType $Aggregate
         */
        public function __construct($FieldURI = null, $IndexedFieldURI = null, $ExtendedFieldURI = null, $Aggregate = null)
        {
                $this->FieldURI = $FieldURI;
                $this->IndexedFieldURI = $IndexedFieldURI;
                $this->ExtendedFieldURI = $ExtendedFieldURI;
                $this->Aggregate = $Aggregate;
        }

        /**
         * @return PathToUnindexedFieldType
         */
        public function getFieldURI()
        {
                return $this->FieldURI;
        }

        /**
         * @param PathToUnindexedFieldType $FieldURI
         * @return \UUP\Exchange\Types\AggregateOnType
         */
        public function setFieldURI($FieldURI)
        {
                $this->FieldURI = $FieldURI;
                return $this;
        }

        /**
         * @return PathToIndexedFieldType
         */
        public function getIndexedFieldURI()
        {
                return $this->IndexedFieldURI;
        }

        /**
         * @param PathToIndexedFieldType $IndexedFieldURI
         * @return \UUP\Exchange\Types\AggregateOnType
         */
        public function setIndexedFieldURI($IndexedFieldURI)
        {
                $this->IndexedFieldURI = $IndexedFieldURI;
                return $this;
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
         * @return \UUP\Exchange\Types\AggregateOnType
         */
        public function setExtendedFieldURI($ExtendedFieldURI)
        {
                $this->ExtendedFieldURI = $ExtendedFieldURI;
                return $this;
        }

        /**
         * @return AggregateType
         */
        public function getAggregate()
        {
                return $this->Aggregate;
        }

        /**
         * @param AggregateType $Aggregate
         * @return \UUP\Exchange\Types\AggregateOnType
         */
        public function setAggregate($Aggregate)
        {
                $this->Aggregate = $Aggregate;
                return $this;
        }

}
