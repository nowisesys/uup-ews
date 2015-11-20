<?php

namespace UUP\Exchange\Types;

class PlayOnPhoneType extends BaseRequestType
{

        /**
         * @var ItemIdType $ItemId
         */
        protected $ItemId = null;
        /**
         * @var string $DialString
         */
        protected $DialString = null;

        /**
         * @param ItemIdType $ItemId
         * @param string $DialString
         */
        public function __construct($ItemId = null, $DialString = null)
        {
                $this->ItemId = $ItemId;
                $this->DialString = $DialString;
        }

        /**
         * @return ItemIdType
         */
        public function getItemId()
        {
                return $this->ItemId;
        }

        /**
         * @param ItemIdType $ItemId
         * @return \UUP\Exchange\Types\PlayOnPhoneType
         */
        public function setItemId($ItemId)
        {
                $this->ItemId = $ItemId;
                return $this;
        }

        /**
         * @return string
         */
        public function getDialString()
        {
                return $this->DialString;
        }

        /**
         * @param string $DialString
         * @return \UUP\Exchange\Types\PlayOnPhoneType
         */
        public function setDialString($DialString)
        {
                $this->DialString = $DialString;
                return $this;
        }

}
