<?php

namespace UUP\Exchange\Types;

class SearchParametersType
{

        /**
         * @var RestrictionType $Restriction
         */
        protected $Restriction = null;
        /**
         * @var NonEmptyArrayOfBaseFolderIdsType $BaseFolderIds
         */
        protected $BaseFolderIds = null;
        /**
         * @var SearchFolderTraversalType $Traversal
         */
        protected $Traversal = null;

        /**
         * @param RestrictionType $Restriction
         * @param NonEmptyArrayOfBaseFolderIdsType $BaseFolderIds
         * @param SearchFolderTraversalType $Traversal
         */
        public function __construct($Restriction = null, $BaseFolderIds = null, $Traversal = null)
        {
                $this->Restriction = $Restriction;
                $this->BaseFolderIds = $BaseFolderIds;
                $this->Traversal = $Traversal;
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
         * @return \UUP\Exchange\Types\SearchParametersType
         */
        public function setRestriction($Restriction)
        {
                $this->Restriction = $Restriction;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfBaseFolderIdsType
         */
        public function getBaseFolderIds()
        {
                return $this->BaseFolderIds;
        }

        /**
         * @param NonEmptyArrayOfBaseFolderIdsType $BaseFolderIds
         * @return \UUP\Exchange\Types\SearchParametersType
         */
        public function setBaseFolderIds($BaseFolderIds)
        {
                $this->BaseFolderIds = $BaseFolderIds;
                return $this;
        }

        /**
         * @return SearchFolderTraversalType
         */
        public function getTraversal()
        {
                return $this->Traversal;
        }

        /**
         * @param SearchFolderTraversalType $Traversal
         * @return \UUP\Exchange\Types\SearchParametersType
         */
        public function setTraversal($Traversal)
        {
                $this->Traversal = $Traversal;
                return $this;
        }

}
