<?php

namespace UUP\Exchange\Types;

class RestrictionType
{

        /**
         * @var SearchExpressionType $SearchExpression
         */
        protected $SearchExpression = null;

        /**
         * @param SearchExpressionType $SearchExpression
         */
        public function __construct($SearchExpression = null)
        {
                $this->SearchExpression = $SearchExpression;
        }

        /**
         * @return SearchExpressionType
         */
        public function getSearchExpression()
        {
                return $this->SearchExpression;
        }

        /**
         * @param SearchExpressionType $SearchExpression
         * @return \UUP\Exchange\Types\RestrictionType
         */
        public function setSearchExpression($SearchExpression)
        {
                $this->SearchExpression = $SearchExpression;
                return $this;
        }

}
