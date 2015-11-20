<?php

namespace UUP\Exchange\Types;

class SmartResponseType extends SmartResponseBaseType
{

        /**
         * @var BodyType $NewBodyContent
         */
        protected $NewBodyContent = null;

        /**
         * @param string $ObjectName
         */
        public function __construct($ObjectName = null)
        {
                parent::__construct($ObjectName);
        }

        /**
         * @return BodyType
         */
        public function getNewBodyContent()
        {
                return $this->NewBodyContent;
        }

        /**
         * @param BodyType $NewBodyContent
         * @return \UUP\Exchange\Types\SmartResponseType
         */
        public function setNewBodyContent($NewBodyContent)
        {
                $this->NewBodyContent = $NewBodyContent;
                return $this;
        }

}
