<?php

namespace UUP\Exchange\Types;

class FindConversationResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfConversationsType $Conversations
         */
        protected $Conversations = null;

        /**
         * @param ResponseClassType $ResponseClass
         * @param ArrayOfConversationsType $Conversations
         */
        public function __construct($ResponseClass = null, $Conversations = null)
        {
                parent::__construct($ResponseClass);
                $this->Conversations = $Conversations;
        }

        /**
         * @return ArrayOfConversationsType
         */
        public function getConversations()
        {
                return $this->Conversations;
        }

        /**
         * @param ArrayOfConversationsType $Conversations
         * @return \UUP\Exchange\Types\FindConversationResponseMessageType
         */
        public function setConversations($Conversations)
        {
                $this->Conversations = $Conversations;
                return $this;
        }

}
