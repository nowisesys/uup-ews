<?php

namespace UUP\Exchange\Types;

class RemoveItemType extends ResponseObjectType
{

        /**
         * @param string $ObjectName
         */
        public function __construct($ObjectName = null)
        {
                parent::__construct($ObjectName);
        }

}
