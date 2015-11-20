<?php

namespace UUP\Exchange\Types;

class GetFolderType extends BaseRequestType
{

        /**
         * @var FolderResponseShapeType $FolderShape
         */
        protected $FolderShape = null;
        /**
         * @var NonEmptyArrayOfBaseFolderIdsType $FolderIds
         */
        protected $FolderIds = null;

        /**
         * @param FolderResponseShapeType $FolderShape
         * @param NonEmptyArrayOfBaseFolderIdsType $FolderIds
         */
        public function __construct($FolderShape = null, $FolderIds = null)
        {
                $this->FolderShape = $FolderShape;
                $this->FolderIds = $FolderIds;
        }

        /**
         * @return FolderResponseShapeType
         */
        public function getFolderShape()
        {
                return $this->FolderShape;
        }

        /**
         * @param FolderResponseShapeType $FolderShape
         * @return \UUP\Exchange\Types\GetFolderType
         */
        public function setFolderShape($FolderShape)
        {
                $this->FolderShape = $FolderShape;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfBaseFolderIdsType
         */
        public function getFolderIds()
        {
                return $this->FolderIds;
        }

        /**
         * @param NonEmptyArrayOfBaseFolderIdsType $FolderIds
         * @return \UUP\Exchange\Types\GetFolderType
         */
        public function setFolderIds($FolderIds)
        {
                $this->FolderIds = $FolderIds;
                return $this;
        }

}
