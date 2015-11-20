<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfItemChangeDescriptionsType
{

        /**
         * @var AppendToItemFieldType $AppendToItemField
         */
        protected $AppendToItemField = null;
        /**
         * @var SetItemFieldType $SetItemField
         */
        protected $SetItemField = null;
        /**
         * @var DeleteItemFieldType $DeleteItemField
         */
        protected $DeleteItemField = null;

        /**
         * @param AppendToItemFieldType $AppendToItemField
         * @param SetItemFieldType $SetItemField
         * @param DeleteItemFieldType $DeleteItemField
         */
        public function __construct($AppendToItemField = null, $SetItemField = null, $DeleteItemField = null)
        {
                $this->AppendToItemField = $AppendToItemField;
                $this->SetItemField = $SetItemField;
                $this->DeleteItemField = $DeleteItemField;
        }

        /**
         * @return AppendToItemFieldType
         */
        public function getAppendToItemField()
        {
                return $this->AppendToItemField;
        }

        /**
         * @param AppendToItemFieldType $AppendToItemField
         * @return \UUP\Exchange\Types\NonEmptyArrayOfItemChangeDescriptionsType
         */
        public function setAppendToItemField($AppendToItemField)
        {
                $this->AppendToItemField = $AppendToItemField;
                return $this;
        }

        /**
         * @return SetItemFieldType
         */
        public function getSetItemField()
        {
                return $this->SetItemField;
        }

        /**
         * @param SetItemFieldType $SetItemField
         * @return \UUP\Exchange\Types\NonEmptyArrayOfItemChangeDescriptionsType
         */
        public function setSetItemField($SetItemField)
        {
                $this->SetItemField = $SetItemField;
                return $this;
        }

        /**
         * @return DeleteItemFieldType
         */
        public function getDeleteItemField()
        {
                return $this->DeleteItemField;
        }

        /**
         * @param DeleteItemFieldType $DeleteItemField
         * @return \UUP\Exchange\Types\NonEmptyArrayOfItemChangeDescriptionsType
         */
        public function setDeleteItemField($DeleteItemField)
        {
                $this->DeleteItemField = $DeleteItemField;
                return $this;
        }

}
