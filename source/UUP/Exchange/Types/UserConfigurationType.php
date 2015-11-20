<?php

namespace UUP\Exchange\Types;

class UserConfigurationType
{

        /**
         * @var UserConfigurationNameType $UserConfigurationName
         */
        protected $UserConfigurationName = null;
        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;
        /**
         * @var UserConfigurationDictionaryType $Dictionary
         */
        protected $Dictionary = null;
        /**
         * @var base64Binary $XmlData
         */
        protected $XmlData = null;
        /**
         * @var base64Binary $BinaryData
         */
        protected $BinaryData = null;

        /**
         * @param UserConfigurationNameType $UserConfigurationName
         */
        public function __construct($UserConfigurationName = null)
        {
                $this->UserConfigurationName = $UserConfigurationName;
        }

        /**
         * @return UserConfigurationNameType
         */
        public function getUserConfigurationName()
        {
                return $this->UserConfigurationName;
        }

        /**
         * @param UserConfigurationNameType $UserConfigurationName
         * @return \UUP\Exchange\Types\UserConfigurationType
         */
        public function setUserConfigurationName($UserConfigurationName)
        {
                $this->UserConfigurationName = $UserConfigurationName;
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
         * @return \UUP\Exchange\Types\UserConfigurationType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

        /**
         * @return UserConfigurationDictionaryType
         */
        public function getDictionary()
        {
                return $this->Dictionary;
        }

        /**
         * @param UserConfigurationDictionaryType $Dictionary
         * @return \UUP\Exchange\Types\UserConfigurationType
         */
        public function setDictionary($Dictionary)
        {
                $this->Dictionary = $Dictionary;
                return $this;
        }

        /**
         * @return base64Binary
         */
        public function getXmlData()
        {
                return $this->XmlData;
        }

        /**
         * @param base64Binary $XmlData
         * @return \UUP\Exchange\Types\UserConfigurationType
         */
        public function setXmlData($XmlData)
        {
                $this->XmlData = $XmlData;
                return $this;
        }

        /**
         * @return base64Binary
         */
        public function getBinaryData()
        {
                return $this->BinaryData;
        }

        /**
         * @param base64Binary $BinaryData
         * @return \UUP\Exchange\Types\UserConfigurationType
         */
        public function setBinaryData($BinaryData)
        {
                $this->BinaryData = $BinaryData;
                return $this;
        }

}
