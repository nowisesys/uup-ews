<?php

namespace UUP\Exchange\Types;

class IsGreaterThanType extends TwoOperandExpressionType
{

        /**
         * @param BasePathToElementType $Path
         * @param FieldURIOrConstantType $FieldURIOrConstant
         */
        public function __construct($Path = null, $FieldURIOrConstant = null)
        {
                parent::__construct($Path, $FieldURIOrConstant);
        }

}
