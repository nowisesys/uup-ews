<?php

namespace UUP\Exchange\Types;

class FindFolderType extends BaseRequestType
{

        /**
         * @var FolderResponseShapeType $FolderShape
         */
        protected $FolderShape = null;
        /**
         * @var IndexedPageViewType $IndexedPageFolderView
         */
        protected $IndexedPageFolderView = null;
        /**
         * @var FractionalPageViewType $FractionalPageFolderView
         */
        protected $FractionalPageFolderView = null;
        /**
         * @var RestrictionType $Restriction
         */
        protected $Restriction = null;
        /**
         * @var NonEmptyArrayOfBaseFolderIdsType $ParentFolderIds
         */
        protected $ParentFolderIds = null;
        /**
         * @var FolderQueryTraversalType $Traversal
         */
        protected $Traversal = null;

        /**
         * @param FolderResponseShapeType $FolderShape
         * @param IndexedPageViewType $IndexedPageFolderView
         * @param FractionalPageViewType $FractionalPageFolderView
         * @param NonEmptyArrayOfBaseFolderIdsType $ParentFolderIds
         * @param FolderQueryTraversalType $Traversal
         */
        public function __construct($FolderShape = null, $IndexedPageFolderView = null, $FractionalPageFolderView = null, $ParentFolderIds = null, $Traversal = null)
        {
                $this->FolderShape = $FolderShape;
                $this->IndexedPageFolderView = $IndexedPageFolderView;
                $this->FractionalPageFolderView = $FractionalPageFolderView;
                $this->ParentFolderIds = $ParentFolderIds;
                $this->Traversal = $Traversal;
        }

        /**
         * @return FolderResponseShapeType
         */
        public function getFolderShape()
        {
                return $this->FolderShape;
        }

        /**
         * @param FolderResponseShapeType $FolderShape
         * @return \UUP\Exchange\Types\FindFolderType
         */
        public function setFolderShape($FolderShape)
        {
                $this->FolderShape = $FolderShape;
                return $this;
        }

        /**
         * @return IndexedPageViewType
         */
        public function getIndexedPageFolderView()
        {
                return $this->IndexedPageFolderView;
        }

        /**
         * @param IndexedPageViewType $IndexedPageFolderView
         * @return \UUP\Exchange\Types\FindFolderType
         */
        public function setIndexedPageFolderView($IndexedPageFolderView)
        {
                $this->IndexedPageFolderView = $IndexedPageFolderView;
                return $this;
        }

        /**
         * @return FractionalPageViewType
         */
        public function getFractionalPageFolderView()
        {
                return $this->FractionalPageFolderView;
        }

        /**
         * @param FractionalPageViewType $FractionalPageFolderView
         * @return \UUP\Exchange\Types\FindFolderType
         */
        public function setFractionalPageFolderView($FractionalPageFolderView)
        {
                $this->FractionalPageFolderView = $FractionalPageFolderView;
                return $this;
        }

        /**
         * @return RestrictionType
         */
        public function getRestriction()
        {
                return $this->Restriction;
        }

        /**
         * @param RestrictionType $Restriction
         * @return \UUP\Exchange\Types\FindFolderType
         */
        public function setRestriction($Restriction)
        {
                $this->Restriction = $Restriction;
                return $this;
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
         * @return \UUP\Exchange\Types\FindFolderType
         */
        public function setParentFolderIds($ParentFolderIds)
        {
                $this->ParentFolderIds = $ParentFolderIds;
                return $this;
        }

        /**
         * @return FolderQueryTraversalType
         */
        public function getTraversal()
        {
                return $this->Traversal;
        }

        /**
         * @param FolderQueryTraversalType $Traversal
         * @return \UUP\Exchange\Types\FindFolderType
         */
        public function setTraversal($Traversal)
        {
                $this->Traversal = $Traversal;
                return $this;
        }

}
