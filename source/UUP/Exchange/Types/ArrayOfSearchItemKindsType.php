<?php

namespace UUP\Exchange\Types;

class ArrayOfSearchItemKindsType
{

        /**
         * @var SearchItemKindType[] $SearchItemKind
         */
        protected $SearchItemKind = null;

        /**
         * @param SearchItemKindType[] $SearchItemKind
         */
        public function __construct(array $SearchItemKind = null)
        {
                $this->SearchItemKind = $SearchItemKind;
        }

        /**
         * @return SearchItemKindType[]
         */
        public function getSearchItemKind()
        {
                return $this->SearchItemKind;
        }

        /**
         * @param SearchItemKindType[] $SearchItemKind
         * @return \UUP\Exchange\Types\ArrayOfSearchItemKindsType
         */
        public function setSearchItemKind(array $SearchItemKind)
        {
                $this->SearchItemKind = $SearchItemKind;
                return $this;
        }

}
