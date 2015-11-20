<?php

namespace UUP\Exchange\Types;

class ResolveNamesType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfBaseFolderIdsType $ParentFolderIds
         */
        protected $ParentFolderIds = null;
        /**
         * @var NonEmptyStringType $UnresolvedEntry
         */
        protected $UnresolvedEntry = null;
        /**
         * @var boolean $ReturnFullContactData
         */
        protected $ReturnFullContactData = null;
        /**
         * @var ResolveNamesSearchScopeType $SearchScope
         */
        protected $SearchScope = null;
        /**
         * @var DefaultShapeNamesType $ContactDataShape
         */
        protected $ContactDataShape = null;

        /**
         * @param NonEmptyStringType $UnresolvedEntry
         * @param boolean $ReturnFullContactData
         * @param ResolveNamesSearchScopeType $SearchScope
         * @param DefaultShapeNamesType $ContactDataShape
         */
        public function __construct($UnresolvedEntry = null, $ReturnFullContactData = null, $SearchScope = null, $ContactDataShape = null)
        {
                $this->UnresolvedEntry = $UnresolvedEntry;
                $this->ReturnFullContactData = $ReturnFullContactData;
                $this->SearchScope = $SearchScope;
                $this->ContactDataShape = $ContactDataShape;
        }

        /**
         * @return NonEmptyArrayOfBaseFolderIdsType
         */
        public function getParentFolderIds()
        {
                return $this->ParentFolderIds;
        }

        /**
         * @param NonEmptyArrayOfBaseFolderIdsType $ParentFolderIds
         * @return \UUP\Exchange\Types\ResolveNamesType
         */
        public function setParentFolderIds($ParentFolderIds)
        {
                $this->ParentFolderIds = $ParentFolderIds;
                return $this;
        }

        /**
         * @return NonEmptyStringType
         */
        public function getUnresolvedEntry()
        {
                return $this->UnresolvedEntry;
        }

        /**
         * @param NonEmptyStringType $UnresolvedEntry
         * @return \UUP\Exchange\Types\ResolveNamesType
         */
        public function setUnresolvedEntry($UnresolvedEntry)
        {
                $this->UnresolvedEntry = $UnresolvedEntry;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getReturnFullContactData()
        {
                return $this->ReturnFullContactData;
        }

        /**
         * @param boolean $ReturnFullContactData
         * @return \UUP\Exchange\Types\ResolveNamesType
         */
        public function setReturnFullContactData($ReturnFullContactData)
        {
                $this->ReturnFullContactData = $ReturnFullContactData;
                return $this;
        }

        /**
         * @return ResolveNamesSearchScopeType
         */
        public function getSearchScope()
        {
                return $this->SearchScope;
        }

        /**
         * @param ResolveNamesSearchScopeType $SearchScope
         * @return \UUP\Exchange\Types\ResolveNamesType
         */
        public function setSearchScope($SearchScope)
        {
                $this->SearchScope = $SearchScope;
                return $this;
        }

        /**
         * @return DefaultShapeNamesType
         */
        public function getContactDataShape()
        {
                return $this->ContactDataShape;
        }

        /**
         * @param DefaultShapeNamesType $ContactDataShape
         * @return \UUP\Exchange\Types\ResolveNamesType
         */
        public function setContactDataShape($ContactDataShape)
        {
                $this->ContactDataShape = $ContactDataShape;
                return $this;
        }

}
