<?php

namespace UUP\Exchange\Types;

class UpdateDelegateResponseMessageType extends BaseDelegateResponseMessageType
{

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

}
