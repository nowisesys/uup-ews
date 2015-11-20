<?php

namespace UUP\Exchange\Types;

class ProtectionRuleType
{

        /**
         * @var ProtectionRuleConditionType $Condition
         */
        protected $Condition = null;
        /**
         * @var ProtectionRuleActionType $Action
         */
        protected $Action = null;
        /**
         * @var anonymous406 $Name
         */
        protected $Name = null;
        /**
         * @var boolean $UserOverridable
         */
        protected $UserOverridable = null;
        /**
         * @var anonymous407 $Priority
         */
        protected $Priority = null;

        /**
         * @param ProtectionRuleConditionType $Condition
         * @param ProtectionRuleActionType $Action
         * @param anonymous406 $Name
         * @param boolean $UserOverridable
         * @param anonymous407 $Priority
         */
        public function __construct($Condition = null, $Action = null, $Name = null, $UserOverridable = null, $Priority = null)
        {
                $this->Condition = $Condition;
                $this->Action = $Action;
                $this->Name = $Name;
                $this->UserOverridable = $UserOverridable;
                $this->Priority = $Priority;
        }

        /**
         * @return ProtectionRuleConditionType
         */
        public function getCondition()
        {
                return $this->Condition;
        }

        /**
         * @param ProtectionRuleConditionType $Condition
         * @return \UUP\Exchange\Types\ProtectionRuleType
         */
        public function setCondition($Condition)
        {
                $this->Condition = $Condition;
                return $this;
        }

        /**
         * @return ProtectionRuleActionType
         */
        public function getAction()
        {
                return $this->Action;
        }

        /**
         * @param ProtectionRuleActionType $Action
         * @return \UUP\Exchange\Types\ProtectionRuleType
         */
        public function setAction($Action)
        {
                $this->Action = $Action;
                return $this;
        }

        /**
         * @return anonymous406
         */
        public function getName()
        {
                return $this->Name;
        }

        /**
         * @param anonymous406 $Name
         * @return \UUP\Exchange\Types\ProtectionRuleType
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getUserOverridable()
        {
                return $this->UserOverridable;
        }

        /**
         * @param boolean $UserOverridable
         * @return \UUP\Exchange\Types\ProtectionRuleType
         */
        public function setUserOverridable($UserOverridable)
        {
                $this->UserOverridable = $UserOverridable;
                return $this;
        }

        /**
         * @return anonymous407
         */
        public function getPriority()
        {
                return $this->Priority;
        }

        /**
         * @param anonymous407 $Priority
         * @return \UUP\Exchange\Types\ProtectionRuleType
         */
        public function setPriority($Priority)
        {
                $this->Priority = $Priority;
                return $this;
        }

}
