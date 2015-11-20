<?php

namespace UUP\Exchange\Types;

class ExistsType extends SearchExpressionType
{

        /**
         * @var BasePathToElementType $Path
         */
        protected $Path = null;

        /**
         * @param BasePathToElementType $Path
         */
        public function __construct($Path = null)
        {
                $this->Path = $Path;
        }

        /**
         * @return BasePathToElementType
         */
        public function getPath()
        {
                return $this->Path;
        }

        /**
         * @param BasePathToElementType $Path
         * @return \UUP\Exchange\Types\ExistsType
         */
        public function setPath($Path)
        {
                $this->Path = $Path;
                return $this;
        }

}
