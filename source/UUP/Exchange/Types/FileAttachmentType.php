<?php

namespace UUP\Exchange\Types;

class FileAttachmentType extends AttachmentType
{

        /**
         * @var boolean $IsContactPhoto
         */
        protected $IsContactPhoto = null;
        /**
         * @var base64Binary $Content
         */
        protected $Content = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return boolean
         */
        public function getIsContactPhoto()
        {
                return $this->IsContactPhoto;
        }

        /**
         * @param boolean $IsContactPhoto
         * @return \UUP\Exchange\Types\FileAttachmentType
         */
        public function setIsContactPhoto($IsContactPhoto)
        {
                $this->IsContactPhoto = $IsContactPhoto;
                return $this;
        }

        /**
         * @return base64Binary
         */
        public function getContent()
        {
                return $this->Content;
        }

        /**
         * @param base64Binary $Content
         * @return \UUP\Exchange\Types\FileAttachmentType
         */
        public function setContent($Content)
        {
                $this->Content = $Content;
                return $this;
        }

}
