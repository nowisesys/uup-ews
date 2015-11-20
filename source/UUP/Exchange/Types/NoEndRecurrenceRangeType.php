<?php

namespace UUP\Exchange\Types;

class NoEndRecurrenceRangeType extends RecurrenceRangeBaseType
{

        /**
         * @param date $StartDate
         */
        public function __construct($StartDate = null)
        {
                parent::__construct($StartDate);
        }

}
