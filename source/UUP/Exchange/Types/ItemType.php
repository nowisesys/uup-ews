<?php

namespace UUP\Exchange\Types;

class ItemType
{

        /**
         * @var MimeContentType $MimeContent
         */
        protected $MimeContent = null;
        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;
        /**
         * @var FolderIdType $ParentFolderId
         */
        protected $ParentFolderId = null;
        /**
         * @var ItemClassType $ItemClass
         */
        protected $ItemClass = null;
        /**
         * @var string $Subject
         */
        protected $Subject = null;
        /**
         * @var SensitivityChoicesType $Sensitivity
         */
        protected $Sensitivity = null;
        /**
         * @var BodyType $Body
         */
        protected $Body = null;
        /**
         * @var NonEmptyArrayOfAttachmentsType $Attachments
         */
        protected $Attachments = null;
        /**
         * @var \DateTime $DateTimeReceived
         */
        protected $DateTimeReceived = null;
        /**
         * @var int $Size
         */
        protected $Size = null;
        /**
         * @var ArrayOfStringsType $Categories
         */
        protected $Categories = null;
        /**
         * @var ImportanceChoicesType $Importance
         */
        protected $Importance = null;
        /**
         * @var string $InReplyTo
         */
        protected $InReplyTo = null;
        /**
         * @var boolean $IsSubmitted
         */
        protected $IsSubmitted = null;
        /**
         * @var boolean $IsDraft
         */
        protected $IsDraft = null;
        /**
         * @var boolean $IsFromMe
         */
        protected $IsFromMe = null;
        /**
         * @var boolean $IsResend
         */
        protected $IsResend = null;
        /**
         * @var boolean $IsUnmodified
         */
        protected $IsUnmodified = null;
        /**
         * @var NonEmptyArrayOfInternetHeadersType $InternetMessageHeaders
         */
        protected $InternetMessageHeaders = null;
        /**
         * @var \DateTime $DateTimeSent
         */
        protected $DateTimeSent = null;
        /**
         * @var \DateTime $DateTimeCreated
         */
        protected $DateTimeCreated = null;
        /**
         * @var NonEmptyArrayOfResponseObjectsType $ResponseObjects
         */
        protected $ResponseObjects = null;
        /**
         * @var \DateTime $ReminderDueBy
         */
        protected $ReminderDueBy = null;
        /**
         * @var boolean $ReminderIsSet
         */
        protected $ReminderIsSet = null;
        /**
         * @var ReminderMinutesBeforeStartType $ReminderMinutesBeforeStart
         */
        protected $ReminderMinutesBeforeStart = null;
        /**
         * @var string $DisplayCc
         */
        protected $DisplayCc = null;
        /**
         * @var string $DisplayTo
         */
        protected $DisplayTo = null;
        /**
         * @var boolean $HasAttachments
         */
        protected $HasAttachments = null;
        /**
         * @var ExtendedPropertyType[] $ExtendedProperty
         */
        protected $ExtendedProperty = null;
        /**
         * @var language $Culture
         */
        protected $Culture = null;
        /**
         * @var EffectiveRightsType $EffectiveRights
         */
        protected $EffectiveRights = null;
        /**
         * @var string $LastModifiedName
         */
        protected $LastModifiedName = null;
        /**
         * @var \DateTime $LastModifiedTime
         */
        protected $LastModifiedTime = null;
        /**
         * @var boolean $IsAssociated
         */
        protected $IsAssociated = null;
        /**
         * @var string $WebClientReadFormQueryString
         */
        protected $WebClientReadFormQueryString = null;
        /**
         * @var string $WebClientEditFormQueryString
         */
        protected $WebClientEditFormQueryString = null;
        /**
         * @var ItemIdType $ConversationId
         */
        protected $ConversationId = null;
        /**
         * @var BodyType $UniqueBody
         */
        protected $UniqueBody = null;
        /**
         * @var base64Binary $StoreEntryId
         */
        protected $StoreEntryId = null;

        public function __construct()
        {
                
        }

        /**
         * @return MimeContentType
         */
        public function getMimeContent()
        {
                return $this->MimeContent;
        }

        /**
         * @param MimeContentType $MimeContent
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setMimeContent($MimeContent)
        {
                $this->MimeContent = $MimeContent;
                return $this;
        }

        /**
         * @return ItemIdType
         */
        public function getItemId()
        {
                return $this->ItemId;
        }

        /**
         * @param ItemIdType $ItemId
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

        /**
         * @return FolderIdType
         */
        public function getParentFolderId()
        {
                return $this->ParentFolderId;
        }

        /**
         * @param FolderIdType $ParentFolderId
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setParentFolderId($ParentFolderId)
        {
                $this->ParentFolderId = $ParentFolderId;
                return $this;
        }

        /**
         * @return ItemClassType
         */
        public function getItemClass()
        {
                return $this->ItemClass;
        }

        /**
         * @param ItemClassType $ItemClass
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setItemClass($ItemClass)
        {
                $this->ItemClass = $ItemClass;
                return $this;
        }

        /**
         * @return string
         */
        public function getSubject()
        {
                return $this->Subject;
        }

        /**
         * @param string $Subject
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setSubject($Subject)
        {
                $this->Subject = $Subject;
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
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setSensitivity($Sensitivity)
        {
                $this->Sensitivity = $Sensitivity;
                return $this;
        }

        /**
         * @return BodyType
         */
        public function getBody()
        {
                return $this->Body;
        }

        /**
         * @param BodyType $Body
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setBody($Body)
        {
                $this->Body = $Body;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfAttachmentsType
         */
        public function getAttachments()
        {
                return $this->Attachments;
        }

        /**
         * @param NonEmptyArrayOfAttachmentsType $Attachments
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setAttachments($Attachments)
        {
                $this->Attachments = $Attachments;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getDateTimeReceived()
        {
                if ($this->DateTimeReceived == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->DateTimeReceived);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $DateTimeReceived
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setDateTimeReceived(\DateTime $DateTimeReceived = null)
        {
                if ($DateTimeReceived == null) {
                        $this->DateTimeReceived = null;
                } else {
                        $this->DateTimeReceived = $DateTimeReceived->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return int
         */
        public function getSize()
        {
                return $this->Size;
        }

        /**
         * @param int $Size
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setSize($Size)
        {
                $this->Size = $Size;
                return $this;
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
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setCategories($Categories)
        {
                $this->Categories = $Categories;
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
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setImportance($Importance)
        {
                $this->Importance = $Importance;
                return $this;
        }

        /**
         * @return string
         */
        public function getInReplyTo()
        {
                return $this->InReplyTo;
        }

        /**
         * @param string $InReplyTo
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setInReplyTo($InReplyTo)
        {
                $this->InReplyTo = $InReplyTo;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsSubmitted()
        {
                return $this->IsSubmitted;
        }

        /**
         * @param boolean $IsSubmitted
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setIsSubmitted($IsSubmitted)
        {
                $this->IsSubmitted = $IsSubmitted;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsDraft()
        {
                return $this->IsDraft;
        }

        /**
         * @param boolean $IsDraft
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setIsDraft($IsDraft)
        {
                $this->IsDraft = $IsDraft;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsFromMe()
        {
                return $this->IsFromMe;
        }

        /**
         * @param boolean $IsFromMe
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setIsFromMe($IsFromMe)
        {
                $this->IsFromMe = $IsFromMe;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsResend()
        {
                return $this->IsResend;
        }

        /**
         * @param boolean $IsResend
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setIsResend($IsResend)
        {
                $this->IsResend = $IsResend;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsUnmodified()
        {
                return $this->IsUnmodified;
        }

        /**
         * @param boolean $IsUnmodified
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setIsUnmodified($IsUnmodified)
        {
                $this->IsUnmodified = $IsUnmodified;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfInternetHeadersType
         */
        public function getInternetMessageHeaders()
        {
                return $this->InternetMessageHeaders;
        }

        /**
         * @param NonEmptyArrayOfInternetHeadersType $InternetMessageHeaders
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setInternetMessageHeaders($InternetMessageHeaders)
        {
                $this->InternetMessageHeaders = $InternetMessageHeaders;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getDateTimeSent()
        {
                if ($this->DateTimeSent == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->DateTimeSent);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $DateTimeSent
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setDateTimeSent(\DateTime $DateTimeSent = null)
        {
                if ($DateTimeSent == null) {
                        $this->DateTimeSent = null;
                } else {
                        $this->DateTimeSent = $DateTimeSent->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getDateTimeCreated()
        {
                if ($this->DateTimeCreated == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->DateTimeCreated);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $DateTimeCreated
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setDateTimeCreated(\DateTime $DateTimeCreated = null)
        {
                if ($DateTimeCreated == null) {
                        $this->DateTimeCreated = null;
                } else {
                        $this->DateTimeCreated = $DateTimeCreated->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return NonEmptyArrayOfResponseObjectsType
         */
        public function getResponseObjects()
        {
                return $this->ResponseObjects;
        }

        /**
         * @param NonEmptyArrayOfResponseObjectsType $ResponseObjects
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setResponseObjects($ResponseObjects)
        {
                $this->ResponseObjects = $ResponseObjects;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getReminderDueBy()
        {
                if ($this->ReminderDueBy == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->ReminderDueBy);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $ReminderDueBy
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setReminderDueBy(\DateTime $ReminderDueBy = null)
        {
                if ($ReminderDueBy == null) {
                        $this->ReminderDueBy = null;
                } else {
                        $this->ReminderDueBy = $ReminderDueBy->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return boolean
         */
        public function getReminderIsSet()
        {
                return $this->ReminderIsSet;
        }

        /**
         * @param boolean $ReminderIsSet
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setReminderIsSet($ReminderIsSet)
        {
                $this->ReminderIsSet = $ReminderIsSet;
                return $this;
        }

        /**
         * @return ReminderMinutesBeforeStartType
         */
        public function getReminderMinutesBeforeStart()
        {
                return $this->ReminderMinutesBeforeStart;
        }

        /**
         * @param ReminderMinutesBeforeStartType $ReminderMinutesBeforeStart
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setReminderMinutesBeforeStart($ReminderMinutesBeforeStart)
        {
                $this->ReminderMinutesBeforeStart = $ReminderMinutesBeforeStart;
                return $this;
        }

        /**
         * @return string
         */
        public function getDisplayCc()
        {
                return $this->DisplayCc;
        }

        /**
         * @param string $DisplayCc
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setDisplayCc($DisplayCc)
        {
                $this->DisplayCc = $DisplayCc;
                return $this;
        }

        /**
         * @return string
         */
        public function getDisplayTo()
        {
                return $this->DisplayTo;
        }

        /**
         * @param string $DisplayTo
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setDisplayTo($DisplayTo)
        {
                $this->DisplayTo = $DisplayTo;
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
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setHasAttachments($HasAttachments)
        {
                $this->HasAttachments = $HasAttachments;
                return $this;
        }

        /**
         * @return ExtendedPropertyType[]
         */
        public function getExtendedProperty()
        {
                return $this->ExtendedProperty;
        }

        /**
         * @param ExtendedPropertyType[] $ExtendedProperty
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setExtendedProperty(array $ExtendedProperty = null)
        {
                $this->ExtendedProperty = $ExtendedProperty;
                return $this;
        }

        /**
         * @return language
         */
        public function getCulture()
        {
                return $this->Culture;
        }

        /**
         * @param language $Culture
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setCulture($Culture)
        {
                $this->Culture = $Culture;
                return $this;
        }

        /**
         * @return EffectiveRightsType
         */
        public function getEffectiveRights()
        {
                return $this->EffectiveRights;
        }

        /**
         * @param EffectiveRightsType $EffectiveRights
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setEffectiveRights($EffectiveRights)
        {
                $this->EffectiveRights = $EffectiveRights;
                return $this;
        }

        /**
         * @return string
         */
        public function getLastModifiedName()
        {
                return $this->LastModifiedName;
        }

        /**
         * @param string $LastModifiedName
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setLastModifiedName($LastModifiedName)
        {
                $this->LastModifiedName = $LastModifiedName;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getLastModifiedTime()
        {
                if ($this->LastModifiedTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->LastModifiedTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $LastModifiedTime
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setLastModifiedTime(\DateTime $LastModifiedTime = null)
        {
                if ($LastModifiedTime == null) {
                        $this->LastModifiedTime = null;
                } else {
                        $this->LastModifiedTime = $LastModifiedTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsAssociated()
        {
                return $this->IsAssociated;
        }

        /**
         * @param boolean $IsAssociated
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setIsAssociated($IsAssociated)
        {
                $this->IsAssociated = $IsAssociated;
                return $this;
        }

        /**
         * @return string
         */
        public function getWebClientReadFormQueryString()
        {
                return $this->WebClientReadFormQueryString;
        }

        /**
         * @param string $WebClientReadFormQueryString
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setWebClientReadFormQueryString($WebClientReadFormQueryString)
        {
                $this->WebClientReadFormQueryString = $WebClientReadFormQueryString;
                return $this;
        }

        /**
         * @return string
         */
        public function getWebClientEditFormQueryString()
        {
                return $this->WebClientEditFormQueryString;
        }

        /**
         * @param string $WebClientEditFormQueryString
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setWebClientEditFormQueryString($WebClientEditFormQueryString)
        {
                $this->WebClientEditFormQueryString = $WebClientEditFormQueryString;
                return $this;
        }

        /**
         * @return ItemIdType
         */
        public function getConversationId()
        {
                return $this->ConversationId;
        }

        /**
         * @param ItemIdType $ConversationId
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setConversationId($ConversationId)
        {
                $this->ConversationId = $ConversationId;
                return $this;
        }

        /**
         * @return BodyType
         */
        public function getUniqueBody()
        {
                return $this->UniqueBody;
        }

        /**
         * @param BodyType $UniqueBody
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setUniqueBody($UniqueBody)
        {
                $this->UniqueBody = $UniqueBody;
                return $this;
        }

        /**
         * @return base64Binary
         */
        public function getStoreEntryId()
        {
                return $this->StoreEntryId;
        }

        /**
         * @param base64Binary $StoreEntryId
         * @return \UUP\Exchange\Types\ItemType
         */
        public function setStoreEntryId($StoreEntryId)
        {
                $this->StoreEntryId = $StoreEntryId;
                return $this;
        }

}
