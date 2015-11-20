<?php

namespace UUP\Exchange\Types;

class AlternatePublicFolderIdType extends AlternateIdBaseType
{

        /**
         * @var string $FolderId
         */
        protected $FolderId = null;

        /**
         * @param IdFormatType $Format
         * @param string $FolderId
         */
        public function __construct($Format = null, $FolderId = null)
        {
                parent::__construct($Format);
                $this->FolderId = $FolderId;
        }

        /**
         * @return string
         */
        public function getFolderId()
        {
                return $this->FolderId;
        }

        /**
         * @param string $FolderId
         * @return \UUP\Exchange\Types\AlternatePublicFolderIdType
         */
        public function setFolderId($FolderId)
        {
                $this->FolderId = $FolderId;
                return $this;
        }

}
