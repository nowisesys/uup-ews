<?php

namespace UUP\Exchange\Types;

abstract class TwoOperandExpressionType extends SearchExpressionType
{

        /**
         * @var BasePathToElementType $Path
         */
        protected $Path = null;
        /**
         * @var FieldURIOrConstantType $FieldURIOrConstant
         */
        protected $FieldURIOrConstant = null;

        /**
         * @param BasePathToElementType $Path
         * @param FieldURIOrConstantType $FieldURIOrConstant
         */
        public function __construct($Path = null, $FieldURIOrConstant = null)
        {
                $this->Path = $Path;
                $this->FieldURIOrConstant = $FieldURIOrConstant;
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
         * @return \UUP\Exchange\Types\TwoOperandExpressionType
         */
        public function setPath($Path)
        {
                $this->Path = $Path;
                return $this;
        }

        /**
         * @return FieldURIOrConstantType
         */
        public function getFieldURIOrConstant()
        {
                return $this->FieldURIOrConstant;
        }

        /**
         * @param FieldURIOrConstantType $FieldURIOrConstant
         * @return \UUP\Exchange\Types\TwoOperandExpressionType
         */
        public function setFieldURIOrConstant($FieldURIOrConstant)
        {
                $this->FieldURIOrConstant = $FieldURIOrConstant;
                return $this;
        }

}
