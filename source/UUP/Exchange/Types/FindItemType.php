<?php

namespace UUP\Exchange\Types;

class FindItemType extends BaseRequestType
{

        /**
         * @var ItemResponseShapeType $ItemShape
         */
        protected $ItemShape = null;
        /**
         * @var IndexedPageViewType $IndexedPageItemView
         */
        protected $IndexedPageItemView = null;
        /**
         * @var FractionalPageViewType $FractionalPageItemView
         */
        protected $FractionalPageItemView = null;
        /**
         * @var CalendarViewType $CalendarView
         */
        protected $CalendarView = null;
        /**
         * @var ContactsViewType $ContactsView
         */
        protected $ContactsView = null;
        /**
         * @var GroupByType $GroupBy
         */
        protected $GroupBy = null;
        /**
         * @var DistinguishedGroupByType $DistinguishedGroupBy
         */
        protected $DistinguishedGroupBy = null;
        /**
         * @var RestrictionType $Restriction
         */
        protected $Restriction = null;
        /**
         * @var NonEmptyArrayOfFieldOrdersType $SortOrder
         */
        protected $SortOrder = null;
        /**
         * @var NonEmptyArrayOfBaseFolderIdsType $ParentFolderIds
         */
        protected $ParentFolderIds = null;
        /**
         * @var string $QueryString
         */
        protected $QueryString = null;
        /**
         * @var ItemQueryTraversalType $Traversal
         */
        protected $Traversal = null;

        /**
         * @param ItemResponseShapeType $ItemShape
         * @param IndexedPageViewType $IndexedPageItemView
         * @param FractionalPageViewType $FractionalPageItemView
         * @param CalendarViewType $CalendarView
         * @param ContactsViewType $ContactsView
         * @param GroupByType $GroupBy
         * @param DistinguishedGroupByType $DistinguishedGroupBy
         * @param NonEmptyArrayOfBaseFolderIdsType $ParentFolderIds
         * @param ItemQueryTraversalType $Traversal
         */
        public function __construct($ItemShape = null, $IndexedPageItemView = null, $FractionalPageItemView = null, $CalendarView = null, $ContactsView = null, $GroupBy = null, $DistinguishedGroupBy = null, $ParentFolderIds = null, $Traversal = null)
        {
                $this->ItemShape = $ItemShape;
                $this->IndexedPageItemView = $IndexedPageItemView;
                $this->FractionalPageItemView = $FractionalPageItemView;
                $this->CalendarView = $CalendarView;
                $this->ContactsView = $ContactsView;
                $this->GroupBy = $GroupBy;
                $this->DistinguishedGroupBy = $DistinguishedGroupBy;
                $this->ParentFolderIds = $ParentFolderIds;
                $this->Traversal = $Traversal;
        }

        /**
         * @return ItemResponseShapeType
         */
        public function getItemShape()
        {
                return $this->ItemShape;
        }

        /**
         * @param ItemResponseShapeType $ItemShape
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setItemShape($ItemShape)
        {
                $this->ItemShape = $ItemShape;
                return $this;
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
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setIndexedPageItemView($IndexedPageItemView)
        {
                $this->IndexedPageItemView = $IndexedPageItemView;
                return $this;
        }

        /**
         * @return FractionalPageViewType
         */
        public function getFractionalPageItemView()
        {
                return $this->FractionalPageItemView;
        }

        /**
         * @param FractionalPageViewType $FractionalPageItemView
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setFractionalPageItemView($FractionalPageItemView)
        {
                $this->FractionalPageItemView = $FractionalPageItemView;
                return $this;
        }

        /**
         * @return CalendarViewType
         */
        public function getCalendarView()
        {
                return $this->CalendarView;
        }

        /**
         * @param CalendarViewType $CalendarView
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setCalendarView($CalendarView)
        {
                $this->CalendarView = $CalendarView;
                return $this;
        }

        /**
         * @return ContactsViewType
         */
        public function getContactsView()
        {
                return $this->ContactsView;
        }

        /**
         * @param ContactsViewType $ContactsView
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setContactsView($ContactsView)
        {
                $this->ContactsView = $ContactsView;
                return $this;
        }

        /**
         * @return GroupByType
         */
        public function getGroupBy()
        {
                return $this->GroupBy;
        }

        /**
         * @param GroupByType $GroupBy
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setGroupBy($GroupBy)
        {
                $this->GroupBy = $GroupBy;
                return $this;
        }

        /**
         * @return DistinguishedGroupByType
         */
        public function getDistinguishedGroupBy()
        {
                return $this->DistinguishedGroupBy;
        }

        /**
         * @param DistinguishedGroupByType $DistinguishedGroupBy
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setDistinguishedGroupBy($DistinguishedGroupBy)
        {
                $this->DistinguishedGroupBy = $DistinguishedGroupBy;
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
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setRestriction($Restriction)
        {
                $this->Restriction = $Restriction;
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
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setSortOrder($SortOrder)
        {
                $this->SortOrder = $SortOrder;
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
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setParentFolderIds($ParentFolderIds)
        {
                $this->ParentFolderIds = $ParentFolderIds;
                return $this;
        }

        /**
         * @return string
         */
        public function getQueryString()
        {
                return $this->QueryString;
        }

        /**
         * @param string $QueryString
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setQueryString($QueryString)
        {
                $this->QueryString = $QueryString;
                return $this;
        }

        /**
         * @return ItemQueryTraversalType
         */
        public function getTraversal()
        {
                return $this->Traversal;
        }

        /**
         * @param ItemQueryTraversalType $Traversal
         * @return \UUP\Exchange\Types\FindItemType
         */
        public function setTraversal($Traversal)
        {
                $this->Traversal = $Traversal;
                return $this;
        }

}
