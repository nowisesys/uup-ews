<?php

namespace UUP\Exchange\Types;

class ArrayOfItemClassType
{

        /**
         * @var ItemClassType $ItemClass
         */
        protected $ItemClass = null;

        /**
         * @param ItemClassType $ItemClass
         */
        public function __construct($ItemClass = null)
        {
                $this->ItemClass = $ItemClass;
        }

        /**
         * @return ItemClassType
         */
        public function getItemClass()
        {
                return $this->ItemClass;
        }

        /**
         * @param ItemClassType $ItemClass
         * @return \UUP\Exchange\Types\ArrayOfItemClassType
         */
        public function setItemClass($ItemClass)
        {
                $this->ItemClass = $ItemClass;
                return $this;
        }

}
