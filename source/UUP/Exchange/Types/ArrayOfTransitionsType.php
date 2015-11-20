<?php

namespace UUP\Exchange\Types;

class ArrayOfTransitionsType
{

        /**
         * @var TransitionType $Transition
         */
        protected $Transition = null;
        /**
         * @var string $Id
         */
        protected $Id = null;

        /**
         * @param TransitionType $Transition
         * @param string $Id
         */
        public function __construct($Transition = null, $Id = null)
        {
                $this->Transition = $Transition;
                $this->Id = $Id;
        }

        /**
         * @return TransitionType
         */
        public function getTransition()
        {
                return $this->Transition;
        }

        /**
         * @param TransitionType $Transition
         * @return \UUP\Exchange\Types\ArrayOfTransitionsType
         */
        public function setTransition($Transition)
        {
                $this->Transition = $Transition;
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
         * @return \UUP\Exchange\Types\ArrayOfTransitionsType
         */
        public function setId($Id)
        {
                $this->Id = $Id;
                return $this;
        }

}
