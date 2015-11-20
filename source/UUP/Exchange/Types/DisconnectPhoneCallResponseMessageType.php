<?php

namespace UUP\Exchange\Types;

class DisconnectPhoneCallResponseMessageType extends ResponseMessageType
{

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

}
