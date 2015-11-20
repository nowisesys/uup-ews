<?php

namespace UUP\Exchange\Types;

class DeleteItemFieldType extends ItemChangeDescriptionType
{

        /**
         * @param BasePathToElementType $Path
         */
        public function __construct($Path = null)
        {
                parent::__construct($Path);
        }

}
