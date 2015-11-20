<?php

namespace UUP\Exchange\Types;

class ApplyConversationActionResponseType extends BaseResponseMessageType
{

        /**
         * @param ArrayOfResponseMessagesType $ResponseMessages
         */
        public function __construct($ResponseMessages = null)
        {
                parent::__construct($ResponseMessages);
        }

}
