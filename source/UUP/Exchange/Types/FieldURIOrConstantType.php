<?php

namespace UUP\Exchange\Types;

class FieldURIOrConstantType
{

        /**
         * @var BasePathToElementType $Path
         */
        protected $Path = null;
        /**
         * @var ConstantValueType $Constant
         */
        protected $Constant = null;

        /**
         * @param BasePathToElementType $Path
         * @param ConstantValueType $Constant
         */
        public function __construct($Path = null, $Constant = null)
        {
                $this->Path = $Path;
                $this->Constant = $Constant;
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
         * @return \UUP\Exchange\Types\FieldURIOrConstantType
         */
        public function setPath($Path)
        {
                $this->Path = $Path;
                return $this;
        }

        /**
         * @return ConstantValueType
         */
        public function getConstant()
        {
                return $this->Constant;
        }

        /**
         * @param ConstantValueType $Constant
         * @return \UUP\Exchange\Types\FieldURIOrConstantType
         */
        public function setConstant($Constant)
        {
                $this->Constant = $Constant;
                return $this;
        }

}
