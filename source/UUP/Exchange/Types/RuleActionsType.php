<?php

namespace UUP\Exchange\Types;

class RuleActionsType
{

        /**
         * @var ArrayOfStringsType $AssignCategories
         */
        protected $AssignCategories = null;
        /**
         * @var TargetFolderIdType $CopyToFolder
         */
        protected $CopyToFolder = null;
        /**
         * @var boolean $Delete
         */
        protected $Delete = null;
        /**
         * @var ArrayOfEmailAddressesType $ForwardAsAttachmentToRecipients
         */
        protected $ForwardAsAttachmentToRecipients = null;
        /**
         * @var ArrayOfEmailAddressesType $ForwardToRecipients
         */
        protected $ForwardToRecipients = null;
        /**
         * @var ImportanceChoicesType $MarkImportance
         */
        protected $MarkImportance = null;
        /**
         * @var boolean $MarkAsRead
         */
        protected $MarkAsRead = null;
        /**
         * @var TargetFolderIdType $MoveToFolder
         */
        protected $MoveToFolder = null;
        /**
         * @var boolean $PermanentDelete
         */
        protected $PermanentDelete = null;
        /**
         * @var ArrayOfEmailAddressesType $RedirectToRecipients
         */
        protected $RedirectToRecipients = null;
        /**
         * @var ArrayOfEmailAddressesType $SendSMSAlertToRecipients
         */
        protected $SendSMSAlertToRecipients = null;
        /**
         * @var ItemIdType $ServerReplyWithMessage
         */
        protected $ServerReplyWithMessage = null;
        /**
         * @var boolean $StopProcessingRules
         */
        protected $StopProcessingRules = null;

        public function __construct()
        {
                
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getAssignCategories()
        {
                return $this->AssignCategories;
        }

        /**
         * @param ArrayOfStringsType $AssignCategories
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setAssignCategories($AssignCategories)
        {
                $this->AssignCategories = $AssignCategories;
                return $this;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getCopyToFolder()
        {
                return $this->CopyToFolder;
        }

        /**
         * @param TargetFolderIdType $CopyToFolder
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setCopyToFolder($CopyToFolder)
        {
                $this->CopyToFolder = $CopyToFolder;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getDelete()
        {
                return $this->Delete;
        }

        /**
         * @param boolean $Delete
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setDelete($Delete)
        {
                $this->Delete = $Delete;
                return $this;
        }

        /**
         * @return ArrayOfEmailAddressesType
         */
        public function getForwardAsAttachmentToRecipients()
        {
                return $this->ForwardAsAttachmentToRecipients;
        }

        /**
         * @param ArrayOfEmailAddressesType $ForwardAsAttachmentToRecipients
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setForwardAsAttachmentToRecipients($ForwardAsAttachmentToRecipients)
        {
                $this->ForwardAsAttachmentToRecipients = $ForwardAsAttachmentToRecipients;
                return $this;
        }

        /**
         * @return ArrayOfEmailAddressesType
         */
        public function getForwardToRecipients()
        {
                return $this->ForwardToRecipients;
        }

        /**
         * @param ArrayOfEmailAddressesType $ForwardToRecipients
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setForwardToRecipients($ForwardToRecipients)
        {
                $this->ForwardToRecipients = $ForwardToRecipients;
                return $this;
        }

        /**
         * @return ImportanceChoicesType
         */
        public function getMarkImportance()
        {
                return $this->MarkImportance;
        }

        /**
         * @param ImportanceChoicesType $MarkImportance
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setMarkImportance($MarkImportance)
        {
                $this->MarkImportance = $MarkImportance;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getMarkAsRead()
        {
                return $this->MarkAsRead;
        }

        /**
         * @param boolean $MarkAsRead
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setMarkAsRead($MarkAsRead)
        {
                $this->MarkAsRead = $MarkAsRead;
                return $this;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getMoveToFolder()
        {
                return $this->MoveToFolder;
        }

        /**
         * @param TargetFolderIdType $MoveToFolder
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setMoveToFolder($MoveToFolder)
        {
                $this->MoveToFolder = $MoveToFolder;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getPermanentDelete()
        {
                return $this->PermanentDelete;
        }

        /**
         * @param boolean $PermanentDelete
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setPermanentDelete($PermanentDelete)
        {
                $this->PermanentDelete = $PermanentDelete;
                return $this;
        }

        /**
         * @return ArrayOfEmailAddressesType
         */
        public function getRedirectToRecipients()
        {
                return $this->RedirectToRecipients;
        }

        /**
         * @param ArrayOfEmailAddressesType $RedirectToRecipients
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setRedirectToRecipients($RedirectToRecipients)
        {
                $this->RedirectToRecipients = $RedirectToRecipients;
                return $this;
        }

        /**
         * @return ArrayOfEmailAddressesType
         */
        public function getSendSMSAlertToRecipients()
        {
                return $this->SendSMSAlertToRecipients;
        }

        /**
         * @param ArrayOfEmailAddressesType $SendSMSAlertToRecipients
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setSendSMSAlertToRecipients($SendSMSAlertToRecipients)
        {
                $this->SendSMSAlertToRecipients = $SendSMSAlertToRecipients;
                return $this;
        }

        /**
         * @return ItemIdType
         */
        public function getServerReplyWithMessage()
        {
                return $this->ServerReplyWithMessage;
        }

        /**
         * @param ItemIdType $ServerReplyWithMessage
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setServerReplyWithMessage($ServerReplyWithMessage)
        {
                $this->ServerReplyWithMessage = $ServerReplyWithMessage;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getStopProcessingRules()
        {
                return $this->StopProcessingRules;
        }

        /**
         * @param boolean $StopProcessingRules
         * @return \UUP\Exchange\Types\RuleActionsType
         */
        public function setStopProcessingRules($StopProcessingRules)
        {
                $this->StopProcessingRules = $StopProcessingRules;
                return $this;
        }

}
