<?php

namespace UUP\Exchange\Types;

class ItemIdType extends BaseItemIdType
{

        /**
         * @var string $Id
         */
        protected $Id = null;
        /**
         * @var string $ChangeKey
         */
        protected $ChangeKey = null;

        /**
         * @param string $Id
         * @param string $ChangeKey
         */
        public function __construct($Id = null, $ChangeKey = null)
        {
                $this->Id = $Id;
                $this->ChangeKey = $ChangeKey;
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
         * @return \UUP\Exchange\Types\ItemIdType
         */
        public function setId($Id)
        {
                $this->Id = $Id;
                return $this;
        }

        /**
         * @return string
         */
        public function getChangeKey()
        {
                return $this->ChangeKey;
        }

        /**
         * @param string $ChangeKey
         * @return \UUP\Exchange\Types\ItemIdType
         */
        public function setChangeKey($ChangeKey)
        {
                $this->ChangeKey = $ChangeKey;
                return $this;
        }

}
