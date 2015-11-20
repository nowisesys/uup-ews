<?php

namespace UUP\Exchange\Types;

class RecurrenceType
{

        /**
         * @var RelativeYearlyRecurrencePatternType $RelativeYearlyRecurrence
         */
        protected $RelativeYearlyRecurrence = null;
        /**
         * @var AbsoluteYearlyRecurrencePatternType $AbsoluteYearlyRecurrence
         */
        protected $AbsoluteYearlyRecurrence = null;
        /**
         * @var RelativeMonthlyRecurrencePatternType $RelativeMonthlyRecurrence
         */
        protected $RelativeMonthlyRecurrence = null;
        /**
         * @var AbsoluteMonthlyRecurrencePatternType $AbsoluteMonthlyRecurrence
         */
        protected $AbsoluteMonthlyRecurrence = null;
        /**
         * @var WeeklyRecurrencePatternType $WeeklyRecurrence
         */
        protected $WeeklyRecurrence = null;
        /**
         * @var DailyRecurrencePatternType $DailyRecurrence
         */
        protected $DailyRecurrence = null;
        /**
         * @var NoEndRecurrenceRangeType $NoEndRecurrence
         */
        protected $NoEndRecurrence = null;
        /**
         * @var EndDateRecurrenceRangeType $EndDateRecurrence
         */
        protected $EndDateRecurrence = null;
        /**
         * @var NumberedRecurrenceRangeType $NumberedRecurrence
         */
        protected $NumberedRecurrence = null;

        /**
         * @param RelativeYearlyRecurrencePatternType $RelativeYearlyRecurrence
         * @param AbsoluteYearlyRecurrencePatternType $AbsoluteYearlyRecurrence
         * @param RelativeMonthlyRecurrencePatternType $RelativeMonthlyRecurrence
         * @param AbsoluteMonthlyRecurrencePatternType $AbsoluteMonthlyRecurrence
         * @param WeeklyRecurrencePatternType $WeeklyRecurrence
         * @param DailyRecurrencePatternType $DailyRecurrence
         * @param NoEndRecurrenceRangeType $NoEndRecurrence
         * @param EndDateRecurrenceRangeType $EndDateRecurrence
         * @param NumberedRecurrenceRangeType $NumberedRecurrence
         */
        public function __construct($RelativeYearlyRecurrence = null, $AbsoluteYearlyRecurrence = null, $RelativeMonthlyRecurrence = null, $AbsoluteMonthlyRecurrence = null, $WeeklyRecurrence = null, $DailyRecurrence = null, $NoEndRecurrence = null, $EndDateRecurrence = null, $NumberedRecurrence = null)
        {
                $this->RelativeYearlyRecurrence = $RelativeYearlyRecurrence;
                $this->AbsoluteYearlyRecurrence = $AbsoluteYearlyRecurrence;
                $this->RelativeMonthlyRecurrence = $RelativeMonthlyRecurrence;
                $this->AbsoluteMonthlyRecurrence = $AbsoluteMonthlyRecurrence;
                $this->WeeklyRecurrence = $WeeklyRecurrence;
                $this->DailyRecurrence = $DailyRecurrence;
                $this->NoEndRecurrence = $NoEndRecurrence;
                $this->EndDateRecurrence = $EndDateRecurrence;
                $this->NumberedRecurrence = $NumberedRecurrence;
        }

        /**
         * @return RelativeYearlyRecurrencePatternType
         */
        public function getRelativeYearlyRecurrence()
        {
                return $this->RelativeYearlyRecurrence;
        }

        /**
         * @param RelativeYearlyRecurrencePatternType $RelativeYearlyRecurrence
         * @return \UUP\Exchange\Types\RecurrenceType
         */
        public function setRelativeYearlyRecurrence($RelativeYearlyRecurrence)
        {
                $this->RelativeYearlyRecurrence = $RelativeYearlyRecurrence;
                return $this;
        }

        /**
         * @return AbsoluteYearlyRecurrencePatternType
         */
        public function getAbsoluteYearlyRecurrence()
        {
                return $this->AbsoluteYearlyRecurrence;
        }

        /**
         * @param AbsoluteYearlyRecurrencePatternType $AbsoluteYearlyRecurrence
         * @return \UUP\Exchange\Types\RecurrenceType
         */
        public function setAbsoluteYearlyRecurrence($AbsoluteYearlyRecurrence)
        {
                $this->AbsoluteYearlyRecurrence = $AbsoluteYearlyRecurrence;
                return $this;
        }

        /**
         * @return RelativeMonthlyRecurrencePatternType
         */
        public function getRelativeMonthlyRecurrence()
        {
                return $this->RelativeMonthlyRecurrence;
        }

        /**
         * @param RelativeMonthlyRecurrencePatternType $RelativeMonthlyRecurrence
         * @return \UUP\Exchange\Types\RecurrenceType
         */
        public function setRelativeMonthlyRecurrence($RelativeMonthlyRecurrence)
        {
                $this->RelativeMonthlyRecurrence = $RelativeMonthlyRecurrence;
                return $this;
        }

        /**
         * @return AbsoluteMonthlyRecurrencePatternType
         */
        public function getAbsoluteMonthlyRecurrence()
        {
                return $this->AbsoluteMonthlyRecurrence;
        }

        /**
         * @param AbsoluteMonthlyRecurrencePatternType $AbsoluteMonthlyRecurrence
         * @return \UUP\Exchange\Types\RecurrenceType
         */
        public function setAbsoluteMonthlyRecurrence($AbsoluteMonthlyRecurrence)
        {
                $this->AbsoluteMonthlyRecurrence = $AbsoluteMonthlyRecurrence;
                return $this;
        }

        /**
         * @return WeeklyRecurrencePatternType
         */
        public function getWeeklyRecurrence()
        {
                return $this->WeeklyRecurrence;
        }

        /**
         * @param WeeklyRecurrencePatternType $WeeklyRecurrence
         * @return \UUP\Exchange\Types\RecurrenceType
         */
        public function setWeeklyRecurrence($WeeklyRecurrence)
        {
                $this->WeeklyRecurrence = $WeeklyRecurrence;
                return $this;
        }

        /**
         * @return DailyRecurrencePatternType
         */
        public function getDailyRecurrence()
        {
                return $this->DailyRecurrence;
        }

        /**
         * @param DailyRecurrencePatternType $DailyRecurrence
         * @return \UUP\Exchange\Types\RecurrenceType
         */
        public function setDailyRecurrence($DailyRecurrence)
        {
                $this->DailyRecurrence = $DailyRecurrence;
                return $this;
        }

        /**
         * @return NoEndRecurrenceRangeType
         */
        public function getNoEndRecurrence()
        {
                return $this->NoEndRecurrence;
        }

        /**
         * @param NoEndRecurrenceRangeType $NoEndRecurrence
         * @return \UUP\Exchange\Types\RecurrenceType
         */
        public function setNoEndRecurrence($NoEndRecurrence)
        {
                $this->NoEndRecurrence = $NoEndRecurrence;
                return $this;
        }

        /**
         * @return EndDateRecurrenceRangeType
         */
        public function getEndDateRecurrence()
        {
                return $this->EndDateRecurrence;
        }

        /**
         * @param EndDateRecurrenceRangeType $EndDateRecurrence
         * @return \UUP\Exchange\Types\RecurrenceType
         */
        public function setEndDateRecurrence($EndDateRecurrence)
        {
                $this->EndDateRecurrence = $EndDateRecurrence;
                return $this;
        }

        /**
         * @return NumberedRecurrenceRangeType
         */
        public function getNumberedRecurrence()
        {
                return $this->NumberedRecurrence;
        }

        /**
         * @param NumberedRecurrenceRangeType $NumberedRecurrence
         * @return \UUP\Exchange\Types\RecurrenceType
         */
        public function setNumberedRecurrence($NumberedRecurrence)
        {
                $this->NumberedRecurrence = $NumberedRecurrence;
                return $this;
        }

}
