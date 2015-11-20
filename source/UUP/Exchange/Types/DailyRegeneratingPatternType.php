<?php

namespace UUP\Exchange\Types;

class DailyRegeneratingPatternType extends RegeneratingPatternBaseType
{

        /**
         * @param int $Interval
         */
        public function __construct($Interval = null)
        {
                parent::__construct($Interval);
        }

}
