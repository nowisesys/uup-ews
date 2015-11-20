<?php

namespace UUP\Exchange\Types;

class DailyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{

        /**
         * @param int $Interval
         */
        public function __construct($Interval = null)
        {
                parent::__construct($Interval);
        }

}
