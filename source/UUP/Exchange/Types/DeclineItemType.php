<?php

namespace UUP\Exchange\Types;

class DeclineItemType extends WellKnownResponseObjectType
{

        /**
         * @param string $ObjectName
         */
        public function __construct($ObjectName = null)
        {
                parent::__construct($ObjectName);
        }

}
