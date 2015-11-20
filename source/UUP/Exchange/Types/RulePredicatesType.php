<?php

namespace UUP\Exchange\Types;

class RulePredicatesType
{

        /**
         * @var ArrayOfStringsType $Categories
         */
        protected $Categories = null;
        /**
         * @var ArrayOfStringsType $ContainsBodyStrings
         */
        protected $ContainsBodyStrings = null;
        /**
         * @var ArrayOfStringsType $ContainsHeaderStrings
         */
        protected $ContainsHeaderStrings = null;
        /**
         * @var ArrayOfStringsType $ContainsRecipientStrings
         */
        protected $ContainsRecipientStrings = null;
        /**
         * @var ArrayOfStringsType $ContainsSenderStrings
         */
        protected $ContainsSenderStrings = null;
        /**
         * @var ArrayOfStringsType $ContainsSubjectOrBodyStrings
         */
        protected $ContainsSubjectOrBodyStrings = null;
        /**
         * @var ArrayOfStringsType $ContainsSubjectStrings
         */
        protected $ContainsSubjectStrings = null;
        /**
         * @var FlaggedForActionType $FlaggedForAction
         */
        protected $FlaggedForAction = null;
        /**
         * @var ArrayOfEmailAddressesType $FromAddresses
         */
        protected $FromAddresses = null;
        /**
         * @var ArrayOfStringsType $FromConnectedAccounts
         */
        protected $FromConnectedAccounts = null;
        /**
         * @var boolean $HasAttachments
         */
        protected $HasAttachments = null;
        /**
         * @var ImportanceChoicesType $Importance
         */
        protected $Importance = null;
        /**
         * @var boolean $IsApprovalRequest
         */
        protected $IsApprovalRequest = null;
        /**
         * @var boolean $IsAutomaticForward
         */
        protected $IsAutomaticForward = null;
        /**
         * @var boolean $IsAutomaticReply
         */
        protected $IsAutomaticReply = null;
        /**
         * @var boolean $IsEncrypted
         */
        protected $IsEncrypted = null;
        /**
         * @var boolean $IsMeetingRequest
         */
        protected $IsMeetingRequest = null;
        /**
         * @var boolean $IsMeetingResponse
         */
        protected $IsMeetingResponse = null;
        /**
         * @var boolean $IsNDR
         */
        protected $IsNDR = null;
        /**
         * @var boolean $IsPermissionControlled
         */
        protected $IsPermissionControlled = null;
        /**
         * @var boolean $IsReadReceipt
         */
        protected $IsReadReceipt = null;
        /**
         * @var boolean $IsSigned
         */
        protected $IsSigned = null;
        /**
         * @var boolean $IsVoicemail
         */
        protected $IsVoicemail = null;
        /**
         * @var ArrayOfStringsType $ItemClasses
         */
        protected $ItemClasses = null;
        /**
         * @var ArrayOfStringsType $MessageClassifications
         */
        protected $MessageClassifications = null;
        /**
         * @var boolean $NotSentToMe
         */
        protected $NotSentToMe = null;
        /**
         * @var boolean $SentCcMe
         */
        protected $SentCcMe = null;
        /**
         * @var boolean $SentOnlyToMe
         */
        protected $SentOnlyToMe = null;
        /**
         * @var ArrayOfEmailAddressesType $SentToAddresses
         */
        protected $SentToAddresses = null;
        /**
         * @var boolean $SentToMe
         */
        protected $SentToMe = null;
        /**
         * @var boolean $SentToOrCcMe
         */
        protected $SentToOrCcMe = null;
        /**
         * @var SensitivityChoicesType $Sensitivity
         */
        protected $Sensitivity = null;
        /**
         * @var RulePredicateDateRangeType $WithinDateRange
         */
        protected $WithinDateRange = null;
        /**
         * @var RulePredicateSizeRangeType $WithinSizeRange
         */
        protected $WithinSizeRange = null;

        public function __construct()
        {
                
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getCategories()
        {
                return $this->Categories;
        }

        /**
         * @param ArrayOfStringsType $Categories
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setCategories($Categories)
        {
                $this->Categories = $Categories;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getContainsBodyStrings()
        {
                return $this->ContainsBodyStrings;
        }

        /**
         * @param ArrayOfStringsType $ContainsBodyStrings
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setContainsBodyStrings($ContainsBodyStrings)
        {
                $this->ContainsBodyStrings = $ContainsBodyStrings;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getContainsHeaderStrings()
        {
                return $this->ContainsHeaderStrings;
        }

        /**
         * @param ArrayOfStringsType $ContainsHeaderStrings
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setContainsHeaderStrings($ContainsHeaderStrings)
        {
                $this->ContainsHeaderStrings = $ContainsHeaderStrings;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getContainsRecipientStrings()
        {
                return $this->ContainsRecipientStrings;
        }

        /**
         * @param ArrayOfStringsType $ContainsRecipientStrings
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setContainsRecipientStrings($ContainsRecipientStrings)
        {
                $this->ContainsRecipientStrings = $ContainsRecipientStrings;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getContainsSenderStrings()
        {
                return $this->ContainsSenderStrings;
        }

        /**
         * @param ArrayOfStringsType $ContainsSenderStrings
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setContainsSenderStrings($ContainsSenderStrings)
        {
                $this->ContainsSenderStrings = $ContainsSenderStrings;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getContainsSubjectOrBodyStrings()
        {
                return $this->ContainsSubjectOrBodyStrings;
        }

        /**
         * @param ArrayOfStringsType $ContainsSubjectOrBodyStrings
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setContainsSubjectOrBodyStrings($ContainsSubjectOrBodyStrings)
        {
                $this->ContainsSubjectOrBodyStrings = $ContainsSubjectOrBodyStrings;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getContainsSubjectStrings()
        {
                return $this->ContainsSubjectStrings;
        }

        /**
         * @param ArrayOfStringsType $ContainsSubjectStrings
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setContainsSubjectStrings($ContainsSubjectStrings)
        {
                $this->ContainsSubjectStrings = $ContainsSubjectStrings;
                return $this;
        }

        /**
         * @return FlaggedForActionType
         */
        public function getFlaggedForAction()
        {
                return $this->FlaggedForAction;
        }

        /**
         * @param FlaggedForActionType $FlaggedForAction
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setFlaggedForAction($FlaggedForAction)
        {
                $this->FlaggedForAction = $FlaggedForAction;
                return $this;
        }

        /**
         * @return ArrayOfEmailAddressesType
         */
        public function getFromAddresses()
        {
                return $this->FromAddresses;
        }

        /**
         * @param ArrayOfEmailAddressesType $FromAddresses
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setFromAddresses($FromAddresses)
        {
                $this->FromAddresses = $FromAddresses;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getFromConnectedAccounts()
        {
                return $this->FromConnectedAccounts;
        }

        /**
         * @param ArrayOfStringsType $FromConnectedAccounts
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setFromConnectedAccounts($FromConnectedAccounts)
        {
                $this->FromConnectedAccounts = $FromConnectedAccounts;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getHasAttachments()
        {
                return $this->HasAttachments;
        }

        /**
         * @param boolean $HasAttachments
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setHasAttachments($HasAttachments)
        {
                $this->HasAttachments = $HasAttachments;
                return $this;
        }

        /**
         * @return ImportanceChoicesType
         */
        public function getImportance()
        {
                return $this->Importance;
        }

        /**
         * @param ImportanceChoicesType $Importance
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setImportance($Importance)
        {
                $this->Importance = $Importance;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsApprovalRequest()
        {
                return $this->IsApprovalRequest;
        }

        /**
         * @param boolean $IsApprovalRequest
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsApprovalRequest($IsApprovalRequest)
        {
                $this->IsApprovalRequest = $IsApprovalRequest;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsAutomaticForward()
        {
                return $this->IsAutomaticForward;
        }

        /**
         * @param boolean $IsAutomaticForward
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsAutomaticForward($IsAutomaticForward)
        {
                $this->IsAutomaticForward = $IsAutomaticForward;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsAutomaticReply()
        {
                return $this->IsAutomaticReply;
        }

        /**
         * @param boolean $IsAutomaticReply
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsAutomaticReply($IsAutomaticReply)
        {
                $this->IsAutomaticReply = $IsAutomaticReply;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsEncrypted()
        {
                return $this->IsEncrypted;
        }

        /**
         * @param boolean $IsEncrypted
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsEncrypted($IsEncrypted)
        {
                $this->IsEncrypted = $IsEncrypted;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsMeetingRequest()
        {
                return $this->IsMeetingRequest;
        }

        /**
         * @param boolean $IsMeetingRequest
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsMeetingRequest($IsMeetingRequest)
        {
                $this->IsMeetingRequest = $IsMeetingRequest;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsMeetingResponse()
        {
                return $this->IsMeetingResponse;
        }

        /**
         * @param boolean $IsMeetingResponse
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsMeetingResponse($IsMeetingResponse)
        {
                $this->IsMeetingResponse = $IsMeetingResponse;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsNDR()
        {
                return $this->IsNDR;
        }

        /**
         * @param boolean $IsNDR
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsNDR($IsNDR)
        {
                $this->IsNDR = $IsNDR;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsPermissionControlled()
        {
                return $this->IsPermissionControlled;
        }

        /**
         * @param boolean $IsPermissionControlled
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsPermissionControlled($IsPermissionControlled)
        {
                $this->IsPermissionControlled = $IsPermissionControlled;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsReadReceipt()
        {
                return $this->IsReadReceipt;
        }

        /**
         * @param boolean $IsReadReceipt
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsReadReceipt($IsReadReceipt)
        {
                $this->IsReadReceipt = $IsReadReceipt;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsSigned()
        {
                return $this->IsSigned;
        }

        /**
         * @param boolean $IsSigned
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsSigned($IsSigned)
        {
                $this->IsSigned = $IsSigned;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsVoicemail()
        {
                return $this->IsVoicemail;
        }

        /**
         * @param boolean $IsVoicemail
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setIsVoicemail($IsVoicemail)
        {
                $this->IsVoicemail = $IsVoicemail;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getItemClasses()
        {
                return $this->ItemClasses;
        }

        /**
         * @param ArrayOfStringsType $ItemClasses
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setItemClasses($ItemClasses)
        {
                $this->ItemClasses = $ItemClasses;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getMessageClassifications()
        {
                return $this->MessageClassifications;
        }

        /**
         * @param ArrayOfStringsType $MessageClassifications
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setMessageClassifications($MessageClassifications)
        {
                $this->MessageClassifications = $MessageClassifications;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getNotSentToMe()
        {
                return $this->NotSentToMe;
        }

        /**
         * @param boolean $NotSentToMe
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setNotSentToMe($NotSentToMe)
        {
                $this->NotSentToMe = $NotSentToMe;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getSentCcMe()
        {
                return $this->SentCcMe;
        }

        /**
         * @param boolean $SentCcMe
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setSentCcMe($SentCcMe)
        {
                $this->SentCcMe = $SentCcMe;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getSentOnlyToMe()
        {
                return $this->SentOnlyToMe;
        }

        /**
         * @param boolean $SentOnlyToMe
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setSentOnlyToMe($SentOnlyToMe)
        {
                $this->SentOnlyToMe = $SentOnlyToMe;
                return $this;
        }

        /**
         * @return ArrayOfEmailAddressesType
         */
        public function getSentToAddresses()
        {
                return $this->SentToAddresses;
        }

        /**
         * @param ArrayOfEmailAddressesType $SentToAddresses
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setSentToAddresses($SentToAddresses)
        {
                $this->SentToAddresses = $SentToAddresses;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getSentToMe()
        {
                return $this->SentToMe;
        }

        /**
         * @param boolean $SentToMe
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setSentToMe($SentToMe)
        {
                $this->SentToMe = $SentToMe;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getSentToOrCcMe()
        {
                return $this->SentToOrCcMe;
        }

        /**
         * @param boolean $SentToOrCcMe
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setSentToOrCcMe($SentToOrCcMe)
        {
                $this->SentToOrCcMe = $SentToOrCcMe;
                return $this;
        }

        /**
         * @return SensitivityChoicesType
         */
        public function getSensitivity()
        {
                return $this->Sensitivity;
        }

        /**
         * @param SensitivityChoicesType $Sensitivity
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setSensitivity($Sensitivity)
        {
                $this->Sensitivity = $Sensitivity;
                return $this;
        }

        /**
         * @return RulePredicateDateRangeType
         */
        public function getWithinDateRange()
        {
                return $this->WithinDateRange;
        }

        /**
         * @param RulePredicateDateRangeType $WithinDateRange
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setWithinDateRange($WithinDateRange)
        {
                $this->WithinDateRange = $WithinDateRange;
                return $this;
        }

        /**
         * @return RulePredicateSizeRangeType
         */
        public function getWithinSizeRange()
        {
                return $this->WithinSizeRange;
        }

        /**
         * @param RulePredicateSizeRangeType $WithinSizeRange
         * @return \UUP\Exchange\Types\RulePredicatesType
         */
        public function setWithinSizeRange($WithinSizeRange)
        {
                $this->WithinSizeRange = $WithinSizeRange;
                return $this;
        }

}
