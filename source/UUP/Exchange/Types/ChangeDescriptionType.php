<?php

namespace UUP\Exchange\Types;

abstract class ChangeDescriptionType
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
         * @return \UUP\Exchange\Types\ChangeDescriptionType
         */
        public function setPath($Path)
        {
                $this->Path = $Path;
                return $this;
        }

}
