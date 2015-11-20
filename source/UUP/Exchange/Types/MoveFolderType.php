<?php

namespace UUP\Exchange\Types;

class MoveFolderType extends BaseMoveCopyFolderType
{

        /**
         * @param TargetFolderIdType $ToFolderId
         * @param NonEmptyArrayOfBaseFolderIdsType $FolderIds
         */
        public function __construct($ToFolderId = null, $FolderIds = null)
        {
                parent::__construct($ToFolderId, $FolderIds);
        }

}
