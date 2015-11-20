<?php

namespace UUP\Exchange\Types;

abstract class RegeneratingPatternBaseType extends IntervalRecurrencePatternBaseType
{

        /**
         * @param int $Interval
         */
        public function __construct($Interval = null)
        {
                parent::__construct($Interval);
        }

}
