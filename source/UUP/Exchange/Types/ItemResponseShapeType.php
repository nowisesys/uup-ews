<?php

namespace UUP\Exchange\Types;

class ItemResponseShapeType
{

        /**
         * @var DefaultShapeNamesType $BaseShape
         */
        protected $BaseShape = null;
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
         * @var boolean $ConvertHtmlCodePageToUTF8
         */
        protected $ConvertHtmlCodePageToUTF8 = null;
        /**
         * @var NonEmptyArrayOfPathsToElementType $AdditionalProperties
         */
        protected $AdditionalProperties = null;

        /**
         * @param DefaultShapeNamesType $BaseShape
         */
        public function __construct($BaseShape = null)
        {
                $this->BaseShape = $BaseShape;
        }

        /**
         * @return DefaultShapeNamesType
         */
        public function getBaseShape()
        {
                return $this->BaseShape;
        }

        /**
         * @param DefaultShapeNamesType $BaseShape
         * @return \UUP\Exchange\Types\ItemResponseShapeType
         */
        public function setBaseShape($BaseShape)
        {
                $this->BaseShape = $BaseShape;
                return $this;
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
         * @return \UUP\Exchange\Types\ItemResponseShapeType
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
         * @return \UUP\Exchange\Types\ItemResponseShapeType
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
         * @return \UUP\Exchange\Types\ItemResponseShapeType
         */
        public function setFilterHtmlContent($FilterHtmlContent)
        {
                $this->FilterHtmlContent = $FilterHtmlContent;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getConvertHtmlCodePageToUTF8()
        {
                return $this->ConvertHtmlCodePageToUTF8;
        }

        /**
         * @param boolean $ConvertHtmlCodePageToUTF8
         * @return \UUP\Exchange\Types\ItemResponseShapeType
         */
        public function setConvertHtmlCodePageToUTF8($ConvertHtmlCodePageToUTF8)
        {
                $this->ConvertHtmlCodePageToUTF8 = $ConvertHtmlCodePageToUTF8;
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
         * @return \UUP\Exchange\Types\ItemResponseShapeType
         */
        public function setAdditionalProperties($AdditionalProperties)
        {
                $this->AdditionalProperties = $AdditionalProperties;
                return $this;
        }

}
