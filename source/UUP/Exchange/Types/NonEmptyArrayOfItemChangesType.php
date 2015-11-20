<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfItemChangesType
{

        /**
         * @var ItemChangeType[] $ItemChange
         */
        protected $ItemChange = null;

        /**
         * @param ItemChangeType[] $ItemChange
         */
        public function __construct(array $ItemChange = null)
        {
                $this->ItemChange = $ItemChange;
        }

        /**
         * @return ItemChangeType[]
         */
        public function getItemChange()
        {
                return $this->ItemChange;
        }

        /**
         * @param ItemChangeType[] $ItemChange
         * @return \UUP\Exchange\Types\NonEmptyArrayOfItemChangesType
         */
        public function setItemChange(array $ItemChange)
        {
                $this->ItemChange = $ItemChange;
                return $this;
        }

}
