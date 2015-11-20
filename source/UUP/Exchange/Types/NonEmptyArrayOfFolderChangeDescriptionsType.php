<?php

namespace UUP\Exchange\Types;

class NonEmptyArrayOfFolderChangeDescriptionsType
{

        /**
         * @var AppendToFolderFieldType $AppendToFolderField
         */
        protected $AppendToFolderField = null;
        /**
         * @var SetFolderFieldType $SetFolderField
         */
        protected $SetFolderField = null;
        /**
         * @var DeleteFolderFieldType $DeleteFolderField
         */
        protected $DeleteFolderField = null;

        /**
         * @param AppendToFolderFieldType $AppendToFolderField
         * @param SetFolderFieldType $SetFolderField
         * @param DeleteFolderFieldType $DeleteFolderField
         */
        public function __construct($AppendToFolderField = null, $SetFolderField = null, $DeleteFolderField = null)
        {
                $this->AppendToFolderField = $AppendToFolderField;
                $this->SetFolderField = $SetFolderField;
                $this->DeleteFolderField = $DeleteFolderField;
        }

        /**
         * @return AppendToFolderFieldType
         */
        public function getAppendToFolderField()
        {
                return $this->AppendToFolderField;
        }

        /**
         * @param AppendToFolderFieldType $AppendToFolderField
         * @return \UUP\Exchange\Types\NonEmptyArrayOfFolderChangeDescriptionsType
         */
        public function setAppendToFolderField($AppendToFolderField)
        {
                $this->AppendToFolderField = $AppendToFolderField;
                return $this;
        }

        /**
         * @return SetFolderFieldType
         */
        public function getSetFolderField()
        {
                return $this->SetFolderField;
        }

        /**
         * @param SetFolderFieldType $SetFolderField
         * @return \UUP\Exchange\Types\NonEmptyArrayOfFolderChangeDescriptionsType
         */
        public function setSetFolderField($SetFolderField)
        {
                $this->SetFolderField = $SetFolderField;
                return $this;
        }

        /**
         * @return DeleteFolderFieldType
         */
        public function getDeleteFolderField()
        {
                return $this->DeleteFolderField;
        }

        /**
         * @param DeleteFolderFieldType $DeleteFolderField
         * @return \UUP\Exchange\Types\NonEmptyArrayOfFolderChangeDescriptionsType
         */
        public function setDeleteFolderField($DeleteFolderField)
        {
                $this->DeleteFolderField = $DeleteFolderField;
                return $this;
        }

}
