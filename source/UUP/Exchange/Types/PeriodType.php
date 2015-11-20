<?php

namespace UUP\Exchange\Types;

class PeriodType
{

        /**
         * @var duration $Bias
         */
        protected $Bias = null;
        /**
         * @var string $Name
         */
        protected $Name = null;
        /**
         * @var string $Id
         */
        protected $Id = null;

        /**
         * @param duration $Bias
         * @param string $Name
         * @param string $Id
         */
        public function __construct($Bias = null, $Name = null, $Id = null)
        {
                $this->Bias = $Bias;
                $this->Name = $Name;
                $this->Id = $Id;
        }

        /**
         * @return duration
         */
        public function getBias()
        {
                return $this->Bias;
        }

        /**
         * @param duration $Bias
         * @return \UUP\Exchange\Types\PeriodType
         */
        public function setBias($Bias)
        {
                $this->Bias = $Bias;
                return $this;
        }

        /**
         * @return string
         */
        public function getName()
        {
                return $this->Name;
        }

        /**
         * @param string $Name
         * @return \UUP\Exchange\Types\PeriodType
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
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
         * @return \UUP\Exchange\Types\PeriodType
         */
        public function setId($Id)
        {
                $this->Id = $Id;
                return $this;
        }

}
