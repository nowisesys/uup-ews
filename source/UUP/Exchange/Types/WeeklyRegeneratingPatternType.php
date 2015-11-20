<?php

namespace UUP\Exchange\Types;

class WeeklyRegeneratingPatternType extends RegeneratingPatternBaseType
{

        /**
         * @param int $Interval
         */
        public function __construct($Interval = null)
        {
                parent::__construct($Interval);
        }

}
