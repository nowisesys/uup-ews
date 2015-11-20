<?php

namespace UUP\Exchange\Types;

class EffectiveRightsType
{

        /**
         * @var boolean $CreateAssociated
         */
        protected $CreateAssociated = null;
        /**
         * @var boolean $CreateContents
         */
        protected $CreateContents = null;
        /**
         * @var boolean $CreateHierarchy
         */
        protected $CreateHierarchy = null;
        /**
         * @var boolean $Delete
         */
        protected $Delete = null;
        /**
         * @var boolean $Modify
         */
        protected $Modify = null;
        /**
         * @var boolean $Read
         */
        protected $Read = null;
        /**
         * @var boolean $ViewPrivateItems
         */
        protected $ViewPrivateItems = null;

        /**
         * @param boolean $CreateAssociated
         * @param boolean $CreateContents
         * @param boolean $CreateHierarchy
         * @param boolean $Delete
         * @param boolean $Modify
         * @param boolean $Read
         */
        public function __construct($CreateAssociated = null, $CreateContents = null, $CreateHierarchy = null, $Delete = null, $Modify = null, $Read = null)
        {
                $this->CreateAssociated = $CreateAssociated;
                $this->CreateContents = $CreateContents;
                $this->CreateHierarchy = $CreateHierarchy;
                $this->Delete = $Delete;
                $this->Modify = $Modify;
                $this->Read = $Read;
        }

        /**
         * @return boolean
         */
        public function getCreateAssociated()
        {
                return $this->CreateAssociated;
        }

        /**
         * @param boolean $CreateAssociated
         * @return \UUP\Exchange\Types\EffectiveRightsType
         */
        public function setCreateAssociated($CreateAssociated)
        {
                $this->CreateAssociated = $CreateAssociated;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getCreateContents()
        {
                return $this->CreateContents;
        }

        /**
         * @param boolean $CreateContents
         * @return \UUP\Exchange\Types\EffectiveRightsType
         */
        public function setCreateContents($CreateContents)
        {
                $this->CreateContents = $CreateContents;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getCreateHierarchy()
        {
                return $this->CreateHierarchy;
        }

        /**
         * @param boolean $CreateHierarchy
         * @return \UUP\Exchange\Types\EffectiveRightsType
         */
        public function setCreateHierarchy($CreateHierarchy)
        {
                $this->CreateHierarchy = $CreateHierarchy;
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
         * @return \UUP\Exchange\Types\EffectiveRightsType
         */
        public function setDelete($Delete)
        {
                $this->Delete = $Delete;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getModify()
        {
                return $this->Modify;
        }

        /**
         * @param boolean $Modify
         * @return \UUP\Exchange\Types\EffectiveRightsType
         */
        public function setModify($Modify)
        {
                $this->Modify = $Modify;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getRead()
        {
                return $this->Read;
        }

        /**
         * @param boolean $Read
         * @return \UUP\Exchange\Types\EffectiveRightsType
         */
        public function setRead($Read)
        {
                $this->Read = $Read;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getViewPrivateItems()
        {
                return $this->ViewPrivateItems;
        }

        /**
         * @param boolean $ViewPrivateItems
         * @return \UUP\Exchange\Types\EffectiveRightsType
         */
        public function setViewPrivateItems($ViewPrivateItems)
        {
                $this->ViewPrivateItems = $ViewPrivateItems;
                return $this;
        }

}
