<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfFieldOrdersType
{

        /**
         * @var FieldOrderType[] $FieldOrder
         */
        protected $FieldOrder = null;

        /**
         * @param FieldOrderType[] $FieldOrder
         */
        public function __construct(array $FieldOrder = null)
        {
                $this->FieldOrder = $FieldOrder;
        }

        /**
         * @return FieldOrderType[]
         */
        public function getFieldOrder()
        {
                return $this->FieldOrder;
        }

        /**
         * @param FieldOrderType[] $FieldOrder
         * @return \UUP\Exchange\Types\NonEmptyArrayOfFieldOrdersType
         */
        public function setFieldOrder(array $FieldOrder)
        {
                $this->FieldOrder = $FieldOrder;
                return $this;
        }

}
