<?php

namespace UUP\Exchange\Types;

class GetInboxRulesResponseType extends ResponseMessageType
{

        /**
         * @var boolean $OutlookRuleBlobExists
         */
        protected $OutlookRuleBlobExists = null;
        /**
         * @var ArrayOfRulesType $InboxRules
         */
        protected $InboxRules = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return boolean
         */
        public function getOutlookRuleBlobExists()
        {
                return $this->OutlookRuleBlobExists;
        }

        /**
         * @param boolean $OutlookRuleBlobExists
         * @return \UUP\Exchange\Types\GetInboxRulesResponseType
         */
        public function setOutlookRuleBlobExists($OutlookRuleBlobExists)
        {
                $this->OutlookRuleBlobExists = $OutlookRuleBlobExists;
                return $this;
        }

        /**
         * @return ArrayOfRulesType
         */
        public function getInboxRules()
        {
                return $this->InboxRules;
        }

        /**
         * @param ArrayOfRulesType $InboxRules
         * @return \UUP\Exchange\Types\GetInboxRulesResponseType
         */
        public function setInboxRules($InboxRules)
        {
                $this->InboxRules = $InboxRules;
                return $this;
        }

}
