<?php

namespace UUP\Exchange\Types;

class IndexedPageViewType extends BasePagingType
{

        /**
         * @var int $Offset
         */
        protected $Offset = null;
        /**
         * @var IndexBasePointType $BasePoint
         */
        protected $BasePoint = null;

        /**
         * @param int $MaxEntriesReturned
         * @param int $Offset
         * @param IndexBasePointType $BasePoint
         */
        public function __construct($MaxEntriesReturned = null, $Offset = null, $BasePoint = null)
        {
                parent::__construct($MaxEntriesReturned);
                $this->Offset = $Offset;
                $this->BasePoint = $BasePoint;
        }

        /**
         * @return int
         */
        public function getOffset()
        {
                return $this->Offset;
        }

        /**
         * @param int $Offset
         * @return \UUP\Exchange\Types\IndexedPageViewType
         */
        public function setOffset($Offset)
        {
                $this->Offset = $Offset;
                return $this;
        }

        /**
         * @return IndexBasePointType
         */
        public function getBasePoint()
        {
                return $this->BasePoint;
        }

        /**
         * @param IndexBasePointType $BasePoint
         * @return \UUP\Exchange\Types\IndexedPageViewType
         */
        public function setBasePoint($BasePoint)
        {
                $this->BasePoint = $BasePoint;
                return $this;
        }

}
