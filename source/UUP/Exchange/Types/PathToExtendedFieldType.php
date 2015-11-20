<?php

namespace UUP\Exchange\Types;

class PathToExtendedFieldType extends BasePathToElementType
{

        /**
         * @var DistinguishedPropertySetType $DistinguishedPropertySetId
         */
        protected $DistinguishedPropertySetId = null;
        /**
         * @var GuidType $PropertySetId
         */
        protected $PropertySetId = null;
        /**
         * @var PropertyTagType $PropertyTag
         */
        protected $PropertyTag = null;
        /**
         * @var string $PropertyName
         */
        protected $PropertyName = null;
        /**
         * @var int $PropertyId
         */
        protected $PropertyId = null;
        /**
         * @var MapiPropertyTypeType $PropertyType
         */
        protected $PropertyType = null;

        /**
         * @param DistinguishedPropertySetType $DistinguishedPropertySetId
         * @param GuidType $PropertySetId
         * @param PropertyTagType $PropertyTag
         * @param string $PropertyName
         * @param int $PropertyId
         * @param MapiPropertyTypeType $PropertyType
         */
        public function __construct($DistinguishedPropertySetId = null, $PropertySetId = null, $PropertyTag = null, $PropertyName = null, $PropertyId = null, $PropertyType = null)
        {
                $this->DistinguishedPropertySetId = $DistinguishedPropertySetId;
                $this->PropertySetId = $PropertySetId;
                $this->PropertyTag = $PropertyTag;
                $this->PropertyName = $PropertyName;
                $this->PropertyId = $PropertyId;
                $this->PropertyType = $PropertyType;
        }

        /**
         * @return DistinguishedPropertySetType
         */
        public function getDistinguishedPropertySetId()
        {
                return $this->DistinguishedPropertySetId;
        }

        /**
         * @param DistinguishedPropertySetType $DistinguishedPropertySetId
         * @return \UUP\Exchange\Types\PathToExtendedFieldType
         */
        public function setDistinguishedPropertySetId($DistinguishedPropertySetId)
        {
                $this->DistinguishedPropertySetId = $DistinguishedPropertySetId;
                return $this;
        }

        /**
         * @return GuidType
         */
        public function getPropertySetId()
        {
                return $this->PropertySetId;
        }

        /**
         * @param GuidType $PropertySetId
         * @return \UUP\Exchange\Types\PathToExtendedFieldType
         */
        public function setPropertySetId($PropertySetId)
        {
                $this->PropertySetId = $PropertySetId;
                return $this;
        }

        /**
         * @return PropertyTagType
         */
        public function getPropertyTag()
        {
                return $this->PropertyTag;
        }

        /**
         * @param PropertyTagType $PropertyTag
         * @return \UUP\Exchange\Types\PathToExtendedFieldType
         */
        public function setPropertyTag($PropertyTag)
        {
                $this->PropertyTag = $PropertyTag;
                return $this;
        }

        /**
         * @return string
         */
        public function getPropertyName()
        {
                return $this->PropertyName;
        }

        /**
         * @param string $PropertyName
         * @return \UUP\Exchange\Types\PathToExtendedFieldType
         */
        public function setPropertyName($PropertyName)
        {
                $this->PropertyName = $PropertyName;
                return $this;
        }

        /**
         * @return int
         */
        public function getPropertyId()
        {
                return $this->PropertyId;
        }

        /**
         * @param int $PropertyId
         * @return \UUP\Exchange\Types\PathToExtendedFieldType
         */
        public function setPropertyId($PropertyId)
        {
                $this->PropertyId = $PropertyId;
                return $this;
        }

        /**
         * @return MapiPropertyTypeType
         */
        public function getPropertyType()
        {
                return $this->PropertyType;
        }

        /**
         * @param MapiPropertyTypeType $PropertyType
         * @return \UUP\Exchange\Types\PathToExtendedFieldType
         */
        public function setPropertyType($PropertyType)
        {
                $this->PropertyType = $PropertyType;
                return $this;
        }

}
