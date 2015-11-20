<?php

namespace UUP\Exchange\Types;

class ContainsExpressionType extends SearchExpressionType
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
         * @var ContainmentModeType $ContainmentMode
         */
        protected $ContainmentMode = null;
        /**
         * @var ContainmentComparisonType $ContainmentComparison
         */
        protected $ContainmentComparison = null;

        /**
         * @param BasePathToElementType $Path
         * @param ConstantValueType $Constant
         * @param ContainmentModeType $ContainmentMode
         * @param ContainmentComparisonType $ContainmentComparison
         */
        public function __construct($Path = null, $Constant = null, $ContainmentMode = null, $ContainmentComparison = null)
        {
                $this->Path = $Path;
                $this->Constant = $Constant;
                $this->ContainmentMode = $ContainmentMode;
                $this->ContainmentComparison = $ContainmentComparison;
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
         * @return \UUP\Exchange\Types\ContainsExpressionType
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
         * @return \UUP\Exchange\Types\ContainsExpressionType
         */
        public function setConstant($Constant)
        {
                $this->Constant = $Constant;
                return $this;
        }

        /**
         * @return ContainmentModeType
         */
        public function getContainmentMode()
        {
                return $this->ContainmentMode;
        }

        /**
         * @param ContainmentModeType $ContainmentMode
         * @return \UUP\Exchange\Types\ContainsExpressionType
         */
        public function setContainmentMode($ContainmentMode)
        {
                $this->ContainmentMode = $ContainmentMode;
                return $this;
        }

        /**
         * @return ContainmentComparisonType
         */
        public function getContainmentComparison()
        {
                return $this->ContainmentComparison;
        }

        /**
         * @param ContainmentComparisonType $ContainmentComparison
         * @return \UUP\Exchange\Types\ContainsExpressionType
         */
        public function setContainmentComparison($ContainmentComparison)
        {
                $this->ContainmentComparison = $ContainmentComparison;
                return $this;
        }

}
