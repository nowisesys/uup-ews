<?php

namespace UUP\Exchange\Types;

class OrType extends MultipleOperandBooleanExpressionType
{

        /**
         * @param SearchExpressionType $SearchExpression
         */
        public function __construct($SearchExpression = null)
        {
                parent::__construct($SearchExpression);
        }

}
