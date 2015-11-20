<?php

namespace UUP\Exchange\Types;

class ProtectionRuleConditionType
{

        /**
         * @var ProtectionRuleAllInternalType $AllInternal
         */
        protected $AllInternal = null;
        /**
         * @var ProtectionRuleAndType $And
         */
        protected $And = null;
        /**
         * @var ProtectionRuleRecipientIsType $RecipientIs
         */
        protected $RecipientIs = null;
        /**
         * @var ProtectionRuleSenderDepartmentsType $SenderDepartments
         */
        protected $SenderDepartments = null;
        /**
         * @var ProtectionRuleTrueType $True
         */
        protected $True = null;

        /**
         * @param ProtectionRuleAllInternalType $AllInternal
         * @param ProtectionRuleAndType $And
         * @param ProtectionRuleRecipientIsType $RecipientIs
         * @param ProtectionRuleSenderDepartmentsType $SenderDepartments
         * @param ProtectionRuleTrueType $True
         */
        public function __construct($AllInternal = null, $And = null, $RecipientIs = null, $SenderDepartments = null, $True = null)
        {
                $this->AllInternal = $AllInternal;
                $this->And = $And;
                $this->RecipientIs = $RecipientIs;
                $this->SenderDepartments = $SenderDepartments;
                $this->True = $True;
        }

        /**
         * @return ProtectionRuleAllInternalType
         */
        public function getAllInternal()
        {
                return $this->AllInternal;
        }

        /**
         * @param ProtectionRuleAllInternalType $AllInternal
         * @return \UUP\Exchange\Types\ProtectionRuleConditionType
         */
        public function setAllInternal($AllInternal)
        {
                $this->AllInternal = $AllInternal;
                return $this;
        }

        /**
         * @return ProtectionRuleAndType
         */
        public function getAnd()
        {
                return $this->And;
        }

        /**
         * @param ProtectionRuleAndType $And
         * @return \UUP\Exchange\Types\ProtectionRuleConditionType
         */
        public function setAnd($And)
        {
                $this->And = $And;
                return $this;
        }

        /**
         * @return ProtectionRuleRecipientIsType
         */
        public function getRecipientIs()
        {
                return $this->RecipientIs;
        }

        /**
         * @param ProtectionRuleRecipientIsType $RecipientIs
         * @return \UUP\Exchange\Types\ProtectionRuleConditionType
         */
        public function setRecipientIs($RecipientIs)
        {
                $this->RecipientIs = $RecipientIs;
                return $this;
        }

        /**
         * @return ProtectionRuleSenderDepartmentsType
         */
        public function getSenderDepartments()
        {
                return $this->SenderDepartments;
        }

        /**
         * @param ProtectionRuleSenderDepartmentsType $SenderDepartments
         * @return \UUP\Exchange\Types\ProtectionRuleConditionType
         */
        public function setSenderDepartments($SenderDepartments)
        {
                $this->SenderDepartments = $SenderDepartments;
                return $this;
        }

        /**
         * @return ProtectionRuleTrueType
         */
        public function getTrue()
        {
                return $this->True;
        }

        /**
         * @param ProtectionRuleTrueType $True
         * @return \UUP\Exchange\Types\ProtectionRuleConditionType
         */
        public function setTrue($True)
        {
                $this->True = $True;
                return $this;
        }

}
