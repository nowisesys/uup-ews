<?php

namespace UUP\Exchange\Types;

class TimeZoneDefinitionType
{

        /**
         * @var NonEmptyArrayOfPeriodsType $Periods
         */
        protected $Periods = null;
        /**
         * @var ArrayOfTransitionsGroupsType $TransitionsGroups
         */
        protected $TransitionsGroups = null;
        /**
         * @var ArrayOfTransitionsType $Transitions
         */
        protected $Transitions = null;
        /**
         * @var string $Id
         */
        protected $Id = null;
        /**
         * @var string $Name
         */
        protected $Name = null;

        /**
         * @param NonEmptyArrayOfPeriodsType $Periods
         * @param string $Id
         * @param string $Name
         */
        public function __construct($Periods = null, $Id = null, $Name = null)
        {
                $this->Periods = $Periods;
                $this->Id = $Id;
                $this->Name = $Name;
        }

        /**
         * @return NonEmptyArrayOfPeriodsType
         */
        public function getPeriods()
        {
                return $this->Periods;
        }

        /**
         * @param NonEmptyArrayOfPeriodsType $Periods
         * @return \UUP\Exchange\Types\TimeZoneDefinitionType
         */
        public function setPeriods($Periods)
        {
                $this->Periods = $Periods;
                return $this;
        }

        /**
         * @return ArrayOfTransitionsGroupsType
         */
        public function getTransitionsGroups()
        {
                return $this->TransitionsGroups;
        }

        /**
         * @param ArrayOfTransitionsGroupsType $TransitionsGroups
         * @return \UUP\Exchange\Types\TimeZoneDefinitionType
         */
        public function setTransitionsGroups($TransitionsGroups)
        {
                $this->TransitionsGroups = $TransitionsGroups;
                return $this;
        }

        /**
         * @return ArrayOfTransitionsType
         */
        public function getTransitions()
        {
                return $this->Transitions;
        }

        /**
         * @param ArrayOfTransitionsType $Transitions
         * @return \UUP\Exchange\Types\TimeZoneDefinitionType
         */
        public function setTransitions($Transitions)
        {
                $this->Transitions = $Transitions;
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
         * @return \UUP\Exchange\Types\TimeZoneDefinitionType
         */
        public function setId($Id)
        {
                $this->Id = $Id;
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
         * @return \UUP\Exchange\Types\TimeZoneDefinitionType
         */
        public function setName($Name)
        {
                $this->Name = $Name;
                return $this;
        }

}
