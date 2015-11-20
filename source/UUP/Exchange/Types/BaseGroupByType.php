<?php

namespace UUP\Exchange\Types;

abstract class BaseGroupByType
{

        /**
         * @var SortDirectionType $Order
         */
        protected $Order = null;

        /**
         * @param SortDirectionType $Order
         */
        public function __construct($Order = null)
        {
                $this->Order = $Order;
        }

        /**
         * @return SortDirectionType
         */
        public function getOrder()
        {
                return $this->Order;
        }

        /**
         * @param SortDirectionType $Order
         * @return \UUP\Exchange\Types\BaseGroupByType
         */
        public function setOrder($Order)
        {
                $this->Order = $Order;
                return $this;
        }

}
