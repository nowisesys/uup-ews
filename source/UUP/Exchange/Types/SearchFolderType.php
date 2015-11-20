<?php

namespace UUP\Exchange\Types;

class SearchFolderType extends FolderType
{

        /**
         * @var SearchParametersType $SearchParameters
         */
        protected $SearchParameters = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return SearchParametersType
         */
        public function getSearchParameters()
        {
                return $this->SearchParameters;
        }

        /**
         * @param SearchParametersType $SearchParameters
         * @return \UUP\Exchange\Types\SearchFolderType
         */
        public function setSearchParameters($SearchParameters)
        {
                $this->SearchParameters = $SearchParameters;
                return $this;
        }

}
