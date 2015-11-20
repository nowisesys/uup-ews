<?php

namespace UUP\Exchange\Types;

class ExcludesType extends SearchExpressionType
{

        /**
         * @var BasePathToElementType $Path
         */
        protected $Path = null;
        /**
         * @var ExcludesValueType $Bitmask
         */
        protected $Bitmask = null;

        /**
         * @param BasePathToElementType $Path
         * @param ExcludesValueType $Bitmask
         */
        public function __construct($Path = null, $Bitmask = null)
        {
                $this->Path = $Path;
                $this->Bitmask = $Bitmask;
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
         * @return \UUP\Exchange\Types\ExcludesType
         */
        public function setPath($Path)
        {
                $this->Path = $Path;
                return $this;
        }

        /**
         * @return ExcludesValueType
         */
        public function getBitmask()
        {
                return $this->Bitmask;
        }

        /**
         * @param ExcludesValueType $Bitmask
         * @return \UUP\Exchange\Types\ExcludesType
         */
        public function setBitmask($Bitmask)
        {
                $this->Bitmask = $Bitmask;
                return $this;
        }

}
