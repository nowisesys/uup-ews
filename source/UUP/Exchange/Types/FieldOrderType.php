<?php

namespace UUP\Exchange\Types;

class FieldOrderType
{

        /**
         * @var BasePathToElementType $Path
         */
        protected $Path = null;
        /**
         * @var SortDirectionType $Order
         */
        protected $Order = null;

        /**
         * @param BasePathToElementType $Path
         * @param SortDirectionType $Order
         */
        public function __construct($Path = null, $Order = null)
        {
                $this->Path = $Path;
                $this->Order = $Order;
        }

        /**
         * @return BasePathToElementType
         */
        public function getPath()
        {
                return $this->Path;
        }

        /**
         * @param BasePathToElementType $Path
         * @return \UUP\Exchange\Types\FieldOrderType
         */
        public function setPath($Path)
        {
                $this->Path = $Path;
                return $this;
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
         * @return \UUP\Exchange\Types\FieldOrderType
         */
        public function setOrder($Order)
        {
                $this->Order = $Order;
                return $this;
        }

}
