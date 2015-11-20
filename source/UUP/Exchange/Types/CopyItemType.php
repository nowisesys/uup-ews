<?php

namespace UUP\Exchange\Types;

class CopyItemType extends BaseMoveCopyItemType
{

        /**
         * @param TargetFolderIdType $ToFolderId
         * @param NonEmptyArrayOfBaseItemIdsType $ItemIds
         */
        public function __construct($ToFolderId = null, $ItemIds = null)
        {
                parent::__construct($ToFolderId, $ItemIds);
        }

}
