<?php

namespace UUP\Exchange\Types;

class RuleType
{

        /**
         * @var string $RuleId
         */
        protected $RuleId = null;
        /**
         * @var string $DisplayName
         */
        protected $DisplayName = null;
        /**
         * @var int $Priority
         */
        protected $Priority = null;
        /**
         * @var boolean $IsEnabled
         */
        protected $IsEnabled = null;
        /**
         * @var boolean $IsNotSupported
         */
        protected $IsNotSupported = null;
        /**
         * @var boolean $IsInError
         */
        protected $IsInError = null;
        /**
         * @var RulePredicatesType $Conditions
         */
        protected $Conditions = null;
        /**
         * @var RulePredicatesType $Exceptions
         */
        protected $Exceptions = null;
        /**
         * @var RuleActionsType $Actions
         */
        protected $Actions = null;

        /**
         * @param string $DisplayName
         * @param int $Priority
         * @param boolean $IsEnabled
         */
        public function __construct($DisplayName = null, $Priority = null, $IsEnabled = null)
        {
                $this->DisplayName = $DisplayName;
                $this->Priority = $Priority;
                $this->IsEnabled = $IsEnabled;
        }

        /**
         * @return string
         */
        public function getRuleId()
        {
                return $this->RuleId;
        }

        /**
         * @param string $RuleId
         * @return \UUP\Exchange\Types\RuleType
         */
        public function setRuleId($RuleId)
        {
                $this->RuleId = $RuleId;
                return $this;
        }

        /**
         * @return string
         */
        public function getDisplayName()
        {
                return $this->DisplayName;
        }

        /**
         * @param string $DisplayName
         * @return \UUP\Exchange\Types\RuleType
         */
        public function setDisplayName($DisplayName)
        {
                $this->DisplayName = $DisplayName;
                return $this;
        }

        /**
         * @return int
         */
        public function getPriority()
        {
                return $this->Priority;
        }

        /**
         * @param int $Priority
         * @return \UUP\Exchange\Types\RuleType
         */
        public function setPriority($Priority)
        {
                $this->Priority = $Priority;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsEnabled()
        {
                return $this->IsEnabled;
        }

        /**
         * @param boolean $IsEnabled
         * @return \UUP\Exchange\Types\RuleType
         */
        public function setIsEnabled($IsEnabled)
        {
                $this->IsEnabled = $IsEnabled;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsNotSupported()
        {
                return $this->IsNotSupported;
        }

        /**
         * @param boolean $IsNotSupported
         * @return \UUP\Exchange\Types\RuleType
         */
        public function setIsNotSupported($IsNotSupported)
        {
                $this->IsNotSupported = $IsNotSupported;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsInError()
        {
                return $this->IsInError;
        }

        /**
         * @param boolean $IsInError
         * @return \UUP\Exchange\Types\RuleType
         */
        public function setIsInError($IsInError)
        {
                $this->IsInError = $IsInError;
                return $this;
        }

        /**
         * @return RulePredicatesType
         */
        public function getConditions()
        {
                return $this->Conditions;
        }

        /**
         * @param RulePredicatesType $Conditions
         * @return \UUP\Exchange\Types\RuleType
         */
        public function setConditions($Conditions)
        {
                $this->Conditions = $Conditions;
                return $this;
        }

        /**
         * @return RulePredicatesType
         */
        public function getExceptions()
        {
                return $this->Exceptions;
        }

        /**
         * @param RulePredicatesType $Exceptions
         * @return \UUP\Exchange\Types\RuleType
         */
        public function setExceptions($Exceptions)
        {
                $this->Exceptions = $Exceptions;
                return $this;
        }

        /**
         * @return RuleActionsType
         */
        public function getActions()
        {
                return $this->Actions;
        }

        /**
         * @param RuleActionsType $Actions
         * @return \UUP\Exchange\Types\RuleType
         */
        public function setActions($Actions)
        {
                $this->Actions = $Actions;
                return $this;
        }

}
