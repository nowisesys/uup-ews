<?php

namespace UUP\Exchange\Types;

class RequestAttachmentIdType extends BaseItemIdType
{

        /**
         * @var string $Id
         */
        protected $Id = null;

        /**
         * @param string $Id
         */
        public function __construct($Id = null)
        {
                $this->Id = $Id;
        }

        /**
         * @return string
         */
        public function getId()
        {
                return $this->Id;
        }

        /**
         * @param string $Id
         * @return \UUP\Exchange\Types\RequestAttachmentIdType
         */
        public function setId($Id)
        {
                $this->Id = $Id;
                return $this;
        }

}
