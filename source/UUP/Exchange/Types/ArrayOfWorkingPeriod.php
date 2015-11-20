<?php

namespace UUP\Exchange\Types;

class ArrayOfWorkingPeriod
{

        /**
         * @var WorkingPeriod[] $WorkingPeriod
         */
        protected $WorkingPeriod = null;

        public function __construct()
        {
                
        }

        /**
         * @return WorkingPeriod[]
         */
        public function getWorkingPeriod()
        {
                return $this->WorkingPeriod;
        }

        /**
         * @param WorkingPeriod[] $WorkingPeriod
         * @return \UUP\Exchange\Types\ArrayOfWorkingPeriod
         */
        public function setWorkingPeriod(array $WorkingPeriod = null)
        {
                $this->WorkingPeriod = $WorkingPeriod;
                return $this;
        }

}
