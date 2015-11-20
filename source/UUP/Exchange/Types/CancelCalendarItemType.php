<?php

namespace UUP\Exchange\Types;

class CancelCalendarItemType extends SmartResponseType
{

        /**
         * @param string $ObjectName
         */
        public function __construct($ObjectName = null)
        {
                parent::__construct($ObjectName);
        }

}
