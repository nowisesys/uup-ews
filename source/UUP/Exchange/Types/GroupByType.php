<?php

namespace UUP\Exchange\Types;

class GroupByType extends BaseGroupByType
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
         * @var AggregateOnType $AggregateOn
         */
        protected $AggregateOn = null;

        /**
         * @param SortDirectionType $Order
         * @param PathToUnindexedFieldType $FieldURI
         * @param PathToIndexedFieldType $IndexedFieldURI
         * @param PathToExtendedFieldType $ExtendedFieldURI
         * @param AggregateOnType $AggregateOn
         */
        public function __construct($Order = null, $FieldURI = null, $IndexedFieldURI = null, $ExtendedFieldURI = null, $AggregateOn = null)
        {
                parent::__construct($Order);
                $this->FieldURI = $FieldURI;
                $this->IndexedFieldURI = $IndexedFieldURI;
                $this->ExtendedFieldURI = $ExtendedFieldURI;
                $this->AggregateOn = $AggregateOn;
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
         * @return \UUP\Exchange\Types\GroupByType
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
         * @return \UUP\Exchange\Types\GroupByType
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
         * @return \UUP\Exchange\Types\GroupByType
         */
        public function setExtendedFieldURI($ExtendedFieldURI)
        {
                $this->ExtendedFieldURI = $ExtendedFieldURI;
                return $this;
        }

        /**
         * @return AggregateOnType
         */
        public function getAggregateOn()
        {
                return $this->AggregateOn;
        }

        /**
         * @param AggregateOnType $AggregateOn
         * @return \UUP\Exchange\Types\GroupByType
         */
        public function setAggregateOn($AggregateOn)
        {
                $this->AggregateOn = $AggregateOn;
                return $this;
        }

}
