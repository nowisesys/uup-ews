<?php

namespace UUP\Exchange\Types;

class ArrayOfConversationsType
{

        /**
         * @var ConversationType $Conversation
         */
        protected $Conversation = null;

        /**
         * @param ConversationType $Conversation
         */
        public function __construct($Conversation = null)
        {
                $this->Conversation = $Conversation;
        }

        /**
         * @return ConversationType
         */
        public function getConversation()
        {
                return $this->Conversation;
        }

        /**
         * @param ConversationType $Conversation
         * @return \UUP\Exchange\Types\ArrayOfConversationsType
         */
        public function setConversation($Conversation)
        {
                $this->Conversation = $Conversation;
                return $this;
        }

}
