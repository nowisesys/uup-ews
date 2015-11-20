<?php

namespace UUP\Exchange\Types;

class KeywordStatisticsSearchResultType
{

        /**
         * @var string $Keyword
         */
        protected $Keyword = null;
        /**
         * @var int $ItemHits
         */
        protected $ItemHits = null;
        /**
         * @var int $Size
         */
        protected $Size = null;

        /**
         * @param string $Keyword
         * @param int $ItemHits
         * @param int $Size
         */
        public function __construct($Keyword = null, $ItemHits = null, $Size = null)
        {
                $this->Keyword = $Keyword;
                $this->ItemHits = $ItemHits;
                $this->Size = $Size;
        }

        /**
         * @return string
         */
        public function getKeyword()
        {
                return $this->Keyword;
        }

        /**
         * @param string $Keyword
         * @return \UUP\Exchange\Types\KeywordStatisticsSearchResultType
         */
        public function setKeyword($Keyword)
        {
                $this->Keyword = $Keyword;
                return $this;
        }

        /**
         * @return int
         */
        public function getItemHits()
        {
                return $this->ItemHits;
        }

        /**
         * @param int $ItemHits
         * @return \UUP\Exchange\Types\KeywordStatisticsSearchResultType
         */
        public function setItemHits($ItemHits)
        {
                $this->ItemHits = $ItemHits;
                return $this;
        }

        /**
         * @return int
         */
        public function getSize()
        {
                return $this->Size;
        }

        /**
         * @param int $Size
         * @return \UUP\Exchange\Types\KeywordStatisticsSearchResultType
         */
        public function setSize($Size)
        {
                $this->Size = $Size;
                return $this;
        }

}
