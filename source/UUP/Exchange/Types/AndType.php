<?php

namespace UUP\Exchange\Types;

class AndType extends MultipleOperandBooleanExpressionType
{

        /**
         * @param SearchExpressionType $SearchExpression
         */
        public function __construct($SearchExpression = null)
        {
                parent::__construct($SearchExpression);
        }

}
