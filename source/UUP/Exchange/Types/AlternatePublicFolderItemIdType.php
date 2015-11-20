<?php

namespace UUP\Exchange\Types;

class AlternatePublicFolderItemIdType extends AlternatePublicFolderIdType
{

        /**
         * @var string $ItemId
         */
        protected $ItemId = null;

        /**
         * @param IdFormatType $Format
         * @param string $FolderId
         * @param string $ItemId
         */
        public function __construct($Format = null, $FolderId = null, $ItemId = null)
        {
                parent::__construct($Format, $FolderId);
                $this->ItemId = $ItemId;
        }

        /**
         * @return string
         */
        public function getItemId()
        {
                return $this->ItemId;
        }

        /**
         * @param string $ItemId
         * @return \UUP\Exchange\Types\AlternatePublicFolderItemIdType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

}
