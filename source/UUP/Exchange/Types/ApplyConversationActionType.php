<?php

namespace UUP\Exchange\Types;

class ApplyConversationActionType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfApplyConversationActionType $ConversationActions
         */
        protected $ConversationActions = null;

        /**
         * @param NonEmptyArrayOfApplyConversationActionType $ConversationActions
         */
        public function __construct($ConversationActions = null)
        {
                $this->ConversationActions = $ConversationActions;
        }

        /**
         * @return NonEmptyArrayOfApplyConversationActionType
         */
        public function getConversationActions()
        {
                return $this->ConversationActions;
        }

        /**
         * @param NonEmptyArrayOfApplyConversationActionType $ConversationActions
         * @return \UUP\Exchange\Types\ApplyConversationActionType
         */
        public function setConversationActions($ConversationActions)
        {
                $this->ConversationActions = $ConversationActions;
                return $this;
        }

}
