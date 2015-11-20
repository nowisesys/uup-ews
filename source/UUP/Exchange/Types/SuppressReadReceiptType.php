<?php

namespace UUP\Exchange\Types;

class SuppressReadReceiptType extends ReferenceItemResponseType
{

        /**
         * @param string $ObjectName
         */
        public function __construct($ObjectName = null)
        {
                parent::__construct($ObjectName);
        }

}
