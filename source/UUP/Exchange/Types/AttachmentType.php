<?php

namespace UUP\Exchange\Types;

class AttachmentType
{

        /**
         * @var AttachmentIdType $AttachmentId
         */
        protected $AttachmentId = null;
        /**
         * @var string $Name
         */
        protected $Name = null;
        /**
         * @var string $ContentType
         */
        protected $ContentType = null;
        /**
         * @var string $ContentId
         */
        protected $ContentId = null;
        /**
         * @var string $ContentLocation
         */
        protected $ContentLocation = null;
        /**
         * @var int $Size
         */
        protected $Size = null;
        /**
         * @var \DateTime $LastModifiedTime
         */
        protected $LastModifiedTime = null;
        /**
         * @var boolean $IsInline
         */
        protected $IsInline = null;

        public function __construct()
        {
                
        }

        /**
         * @return AttachmentIdType
         */
        public function getAttachmentId()
        {
                return $this->AttachmentId;
        }

        /**
         * @param AttachmentIdType $AttachmentId
         * @return \UUP\Exchange\Types\AttachmentType
         */
        public function setAttachmentId($AttachmentId)
        {
                $this->AttachmentId = $AttachmentId;
                return $this;
        }

        /**
         * @return string
         */
        public function getName()
        {
                return $this->Name;
        }

        /**
         * @param string $Name
         * @return \UUP\Exchange\Types\AttachmentType
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

        /**
         * @return string
         */
        public function getContentType()
        {
                return $this->ContentType;
        }

        /**
         * @param string $ContentType
         * @return \UUP\Exchange\Types\AttachmentType
         */
        public function setContentType($ContentType)
        {
                $this->ContentType = $ContentType;
                return $this;
        }

        /**
         * @return string
         */
        public function getContentId()
        {
                return $this->ContentId;
        }

        /**
         * @param string $ContentId
         * @return \UUP\Exchange\Types\AttachmentType
         */
        public function setContentId($ContentId)
        {
                $this->ContentId = $ContentId;
                return $this;
        }

        /**
         * @return string
         */
        public function getContentLocation()
        {
                return $this->ContentLocation;
        }

        /**
         * @param string $ContentLocation
         * @return \UUP\Exchange\Types\AttachmentType
         */
        public function setContentLocation($ContentLocation)
        {
                $this->ContentLocation = $ContentLocation;
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
         * @return \UUP\Exchange\Types\AttachmentType
         */
        public function setSize($Size)
        {
                $this->Size = $Size;
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
         * @return \UUP\Exchange\Types\AttachmentType
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
        public function getIsInline()
        {
                return $this->IsInline;
        }

        /**
         * @param boolean $IsInline
         * @return \UUP\Exchange\Types\AttachmentType
         */
        public function setIsInline($IsInline)
        {
                $this->IsInline = $IsInline;
                return $this;
        }

}
