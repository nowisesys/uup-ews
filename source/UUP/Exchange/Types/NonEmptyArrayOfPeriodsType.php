<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfPeriodsType
{

        /**
         * @var PeriodType[] $Period
         */
        protected $Period = null;

        /**
         * @param PeriodType[] $Period
         */
        public function __construct(array $Period = null)
        {
                $this->Period = $Period;
        }

        /**
         * @return PeriodType[]
         */
        public function getPeriod()
        {
                return $this->Period;
        }

        /**
         * @param PeriodType[] $Period
         * @return \UUP\Exchange\Types\NonEmptyArrayOfPeriodsType
         */
        public function setPeriod(array $Period)
        {
                $this->Period = $Period;
                return $this;
        }

}
