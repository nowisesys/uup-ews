<?php

namespace UUP\Exchange\Types;

class WellKnownResponseObjectType
{

        /**
         * @var ItemClassType $ItemClass
         */
        protected $ItemClass = null;
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
         * @var NonEmptyArrayOfInternetHeadersType $InternetMessageHeaders
         */
        protected $InternetMessageHeaders = null;
        /**
         * @var SingleRecipientType $Sender
         */
        protected $Sender = null;
        /**
         * @var ArrayOfRecipientsType $ToRecipients
         */
        protected $ToRecipients = null;
        /**
         * @var ArrayOfRecipientsType $CcRecipients
         */
        protected $CcRecipients = null;
        /**
         * @var ArrayOfRecipientsType $BccRecipients
         */
        protected $BccRecipients = null;
        /**
         * @var boolean $IsReadReceiptRequested
         */
        protected $IsReadReceiptRequested = null;
        /**
         * @var boolean $IsDeliveryReceiptRequested
         */
        protected $IsDeliveryReceiptRequested = null;
        /**
         * @var SingleRecipientType $From
         */
        protected $From = null;
        /**
         * @var ItemIdType $ReferenceItemId
         */
        protected $ReferenceItemId = null;
        /**
         * @var string $ObjectName
         */
        protected $ObjectName = null;

        /**
         * @param string $ObjectName
         */
        public function __construct($ObjectName = null)
        {
                $this->ObjectName = $ObjectName;
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
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setItemClass($ItemClass)
        {
                $this->ItemClass = $ItemClass;
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
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
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
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
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
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setAttachments($Attachments)
        {
                $this->Attachments = $Attachments;
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
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setInternetMessageHeaders($InternetMessageHeaders)
        {
                $this->InternetMessageHeaders = $InternetMessageHeaders;
                return $this;
        }

        /**
         * @return SingleRecipientType
         */
        public function getSender()
        {
                return $this->Sender;
        }

        /**
         * @param SingleRecipientType $Sender
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setSender($Sender)
        {
                $this->Sender = $Sender;
                return $this;
        }

        /**
         * @return ArrayOfRecipientsType
         */
        public function getToRecipients()
        {
                return $this->ToRecipients;
        }

        /**
         * @param ArrayOfRecipientsType $ToRecipients
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setToRecipients($ToRecipients)
        {
                $this->ToRecipients = $ToRecipients;
                return $this;
        }

        /**
         * @return ArrayOfRecipientsType
         */
        public function getCcRecipients()
        {
                return $this->CcRecipients;
        }

        /**
         * @param ArrayOfRecipientsType $CcRecipients
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setCcRecipients($CcRecipients)
        {
                $this->CcRecipients = $CcRecipients;
                return $this;
        }

        /**
         * @return ArrayOfRecipientsType
         */
        public function getBccRecipients()
        {
                return $this->BccRecipients;
        }

        /**
         * @param ArrayOfRecipientsType $BccRecipients
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setBccRecipients($BccRecipients)
        {
                $this->BccRecipients = $BccRecipients;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsReadReceiptRequested()
        {
                return $this->IsReadReceiptRequested;
        }

        /**
         * @param boolean $IsReadReceiptRequested
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setIsReadReceiptRequested($IsReadReceiptRequested)
        {
                $this->IsReadReceiptRequested = $IsReadReceiptRequested;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsDeliveryReceiptRequested()
        {
                return $this->IsDeliveryReceiptRequested;
        }

        /**
         * @param boolean $IsDeliveryReceiptRequested
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setIsDeliveryReceiptRequested($IsDeliveryReceiptRequested)
        {
                $this->IsDeliveryReceiptRequested = $IsDeliveryReceiptRequested;
                return $this;
        }

        /**
         * @return SingleRecipientType
         */
        public function getFrom()
        {
                return $this->From;
        }

        /**
         * @param SingleRecipientType $From
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setFrom($From)
        {
                $this->From = $From;
                return $this;
        }

        /**
         * @return ItemIdType
         */
        public function getReferenceItemId()
        {
                return $this->ReferenceItemId;
        }

        /**
         * @param ItemIdType $ReferenceItemId
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setReferenceItemId($ReferenceItemId)
        {
                $this->ReferenceItemId = $ReferenceItemId;
                return $this;
        }

        /**
         * @return string
         */
        public function getObjectName()
        {
                return $this->ObjectName;
        }

        /**
         * @param string $ObjectName
         * @return \UUP\Exchange\Types\WellKnownResponseObjectType
         */
        public function setObjectName($ObjectName)
        {
                $this->ObjectName = $ObjectName;
                return $this;
        }

}
