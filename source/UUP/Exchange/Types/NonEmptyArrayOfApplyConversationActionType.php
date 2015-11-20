<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfApplyConversationActionType
{

        /**
         * @var ConversationActionType[] $ConversationAction
         */
        protected $ConversationAction = null;

        /**
         * @param ConversationActionType[] $ConversationAction
         */
        public function __construct(array $ConversationAction = null)
        {
                $this->ConversationAction = $ConversationAction;
        }

        /**
         * @return ConversationActionType[]
         */
        public function getConversationAction()
        {
                return $this->ConversationAction;
        }

        /**
         * @param ConversationActionType[] $ConversationAction
         * @return \UUP\Exchange\Types\NonEmptyArrayOfApplyConversationActionType
         */
        public function setConversationAction(array $ConversationAction)
        {
                $this->ConversationAction = $ConversationAction;
                return $this;
        }

}
