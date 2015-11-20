<?php

namespace UUP\Exchange\Types;

class ArrayOfRuleOperationsType
{

        /**
         * @var CreateRuleOperationType $CreateRuleOperation
         */
        protected $CreateRuleOperation = null;
        /**
         * @var SetRuleOperationType $SetRuleOperation
         */
        protected $SetRuleOperation = null;
        /**
         * @var DeleteRuleOperationType $DeleteRuleOperation
         */
        protected $DeleteRuleOperation = null;

        /**
         * @param CreateRuleOperationType $CreateRuleOperation
         * @param SetRuleOperationType $SetRuleOperation
         * @param DeleteRuleOperationType $DeleteRuleOperation
         */
        public function __construct($CreateRuleOperation = null, $SetRuleOperation = null, $DeleteRuleOperation = null)
        {
                $this->CreateRuleOperation = $CreateRuleOperation;
                $this->SetRuleOperation = $SetRuleOperation;
                $this->DeleteRuleOperation = $DeleteRuleOperation;
        }

        /**
         * @return CreateRuleOperationType
         */
        public function getCreateRuleOperation()
        {
                return $this->CreateRuleOperation;
        }

        /**
         * @param CreateRuleOperationType $CreateRuleOperation
         * @return \UUP\Exchange\Types\ArrayOfRuleOperationsType
         */
        public function setCreateRuleOperation($CreateRuleOperation)
        {
                $this->CreateRuleOperation = $CreateRuleOperation;
                return $this;
        }

        /**
         * @return SetRuleOperationType
         */
        public function getSetRuleOperation()
        {
                return $this->SetRuleOperation;
        }

        /**
         * @param SetRuleOperationType $SetRuleOperation
         * @return \UUP\Exchange\Types\ArrayOfRuleOperationsType
         */
        public function setSetRuleOperation($SetRuleOperation)
        {
                $this->SetRuleOperation = $SetRuleOperation;
                return $this;
        }

        /**
         * @return DeleteRuleOperationType
         */
        public function getDeleteRuleOperation()
        {
                return $this->DeleteRuleOperation;
        }

        /**
         * @param DeleteRuleOperationType $DeleteRuleOperation
         * @return \UUP\Exchange\Types\ArrayOfRuleOperationsType
         */
        public function setDeleteRuleOperation($DeleteRuleOperation)
        {
                $this->DeleteRuleOperation = $DeleteRuleOperation;
                return $this;
        }

}
