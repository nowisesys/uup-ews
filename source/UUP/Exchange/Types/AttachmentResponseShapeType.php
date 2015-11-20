<?php

namespace UUP\Exchange\Types;

class AttachmentResponseShapeType
{

        /**
         * @var boolean $IncludeMimeContent
         */
        protected $IncludeMimeContent = null;
        /**
         * @var BodyTypeResponseType $BodyType
         */
        protected $BodyType = null;
        /**
         * @var boolean $FilterHtmlContent
         */
        protected $FilterHtmlContent = null;
        /**
         * @var NonEmptyArrayOfPathsToElementType $AdditionalProperties
         */
        protected $AdditionalProperties = null;

        public function __construct()
        {
                
        }

        /**
         * @return boolean
         */
        public function getIncludeMimeContent()
        {
                return $this->IncludeMimeContent;
        }

        /**
         * @param boolean $IncludeMimeContent
         * @return \UUP\Exchange\Types\AttachmentResponseShapeType
         */
        public function setIncludeMimeContent($IncludeMimeContent)
        {
                $this->IncludeMimeContent = $IncludeMimeContent;
                return $this;
        }

        /**
         * @return BodyTypeResponseType
         */
        public function getBodyType()
        {
                return $this->BodyType;
        }

        /**
         * @param BodyTypeResponseType $BodyType
         * @return \UUP\Exchange\Types\AttachmentResponseShapeType
         */
        public function setBodyType($BodyType)
        {
                $this->BodyType = $BodyType;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getFilterHtmlContent()
        {
                return $this->FilterHtmlContent;
        }

        /**
         * @param boolean $FilterHtmlContent
         * @return \UUP\Exchange\Types\AttachmentResponseShapeType
         */
        public function setFilterHtmlContent($FilterHtmlContent)
        {
                $this->FilterHtmlContent = $FilterHtmlContent;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfPathsToElementType
         */
        public function getAdditionalProperties()
        {
                return $this->AdditionalProperties;
        }

        /**
         * @param NonEmptyArrayOfPathsToElementType $AdditionalProperties
         * @return \UUP\Exchange\Types\AttachmentResponseShapeType
         */
        public function setAdditionalProperties($AdditionalProperties)
        {
                $this->AdditionalProperties = $AdditionalProperties;
                return $this;
        }

}
