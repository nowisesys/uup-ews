<?php

namespace UUP\Exchange\Types;

class FindConversationType extends BaseRequestType
{

        /**
         * @var IndexedPageViewType $IndexedPageItemView
         */
        protected $IndexedPageItemView = null;
        /**
         * @var NonEmptyArrayOfFieldOrdersType $SortOrder
         */
        protected $SortOrder = null;
        /**
         * @var TargetFolderIdType $ParentFolderId
         */
        protected $ParentFolderId = null;

        /**
         * @param IndexedPageViewType $IndexedPageItemView
         * @param TargetFolderIdType $ParentFolderId
         */
        public function __construct($IndexedPageItemView = null, $ParentFolderId = null)
        {
                $this->IndexedPageItemView = $IndexedPageItemView;
                $this->ParentFolderId = $ParentFolderId;
        }

        /**
         * @return IndexedPageViewType
         */
        public function getIndexedPageItemView()
        {
                return $this->IndexedPageItemView;
        }

        /**
         * @param IndexedPageViewType $IndexedPageItemView
         * @return \UUP\Exchange\Types\FindConversationType
         */
        public function setIndexedPageItemView($IndexedPageItemView)
        {
                $this->IndexedPageItemView = $IndexedPageItemView;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfFieldOrdersType
         */
        public function getSortOrder()
        {
                return $this->SortOrder;
        }

        /**
         * @param NonEmptyArrayOfFieldOrdersType $SortOrder
         * @return \UUP\Exchange\Types\FindConversationType
         */
        public function setSortOrder($SortOrder)
        {
                $this->SortOrder = $SortOrder;
                return $this;
        }

        /**
         * @return TargetFolderIdType
         */
        public function getParentFolderId()
        {
                return $this->ParentFolderId;
        }

        /**
         * @param TargetFolderIdType $ParentFolderId
         * @return \UUP\Exchange\Types\FindConversationType
         */
        public function setParentFolderId($ParentFolderId)
        {
                $this->ParentFolderId = $ParentFolderId;
                return $this;
        }

}
