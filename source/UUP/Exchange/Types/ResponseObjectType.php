<?php

namespace UUP\Exchange\Types;

abstract class ResponseObjectType extends ResponseObjectCoreType
{

        /**
         * @var string $ObjectName
         */
        protected $ObjectName = null;

        /**
         * @param string $ObjectName
         */
        public function __construct($ObjectName = null)
        {
                parent::__construct();
                $this->ObjectName = $ObjectName;
        }

        /**
         * @return string
         */
        public function getObjectName()
        {
                return $this->ObjectName;
        }

        /**
         * @param string $ObjectName
         * @return \UUP\Exchange\Types\ResponseObjectType
         */
        public function setObjectName($ObjectName)
        {
                $this->ObjectName = $ObjectName;
                return $this;
        }

}
