<?php

namespace UUP\Exchange\Types;

class DeleteFolderFieldType extends FolderChangeDescriptionType
{

        /**
         * @param BasePathToElementType $Path
         */
        public function __construct($Path = null)
        {
                parent::__construct($Path);
        }

}
