<?php

namespace UUP\Exchange\Types;

class DistinguishedGroupByType extends BaseGroupByType
{

        /**
         * @var StandardGroupByType $StandardGroupBy
         */
        protected $StandardGroupBy = null;

        /**
         * @param SortDirectionType $Order
         * @param StandardGroupByType $StandardGroupBy
         */
        public function __construct($Order = null, $StandardGroupBy = null)
        {
                parent::__construct($Order);
                $this->StandardGroupBy = $StandardGroupBy;
        }

        /**
         * @return StandardGroupByType
         */
        public function getStandardGroupBy()
        {
                return $this->StandardGroupBy;
        }

        /**
         * @param StandardGroupByType $StandardGroupBy
         * @return \UUP\Exchange\Types\DistinguishedGroupByType
         */
        public function setStandardGroupBy($StandardGroupBy)
        {
                $this->StandardGroupBy = $StandardGroupBy;
                return $this;
        }

}
