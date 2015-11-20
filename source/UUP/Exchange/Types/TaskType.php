<?php

namespace UUP\Exchange\Types;

class TaskType extends ItemType
{

        /**
         * @var int $ActualWork
         */
        protected $ActualWork = null;
        /**
         * @var \DateTime $AssignedTime
         */
        protected $AssignedTime = null;
        /**
         * @var string $BillingInformation
         */
        protected $BillingInformation = null;
        /**
         * @var int $ChangeCount
         */
        protected $ChangeCount = null;
        /**
         * @var ArrayOfStringsType $Companies
         */
        protected $Companies = null;
        /**
         * @var \DateTime $CompleteDate
         */
        protected $CompleteDate = null;
        /**
         * @var ArrayOfStringsType $Contacts
         */
        protected $Contacts = null;
        /**
         * @var TaskDelegateStateType $DelegationState
         */
        protected $DelegationState = null;
        /**
         * @var string $Delegator
         */
        protected $Delegator = null;
        /**
         * @var \DateTime $DueDate
         */
        protected $DueDate = null;
        /**
         * @var int $IsAssignmentEditable
         */
        protected $IsAssignmentEditable = null;
        /**
         * @var boolean $IsComplete
         */
        protected $IsComplete = null;
        /**
         * @var boolean $IsRecurring
         */
        protected $IsRecurring = null;
        /**
         * @var boolean $IsTeamTask
         */
        protected $IsTeamTask = null;
        /**
         * @var string $Mileage
         */
        protected $Mileage = null;
        /**
         * @var string $Owner
         */
        protected $Owner = null;
        /**
         * @var float $PercentComplete
         */
        protected $PercentComplete = null;
        /**
         * @var TaskRecurrenceType $Recurrence
         */
        protected $Recurrence = null;
        /**
         * @var \DateTime $StartDate
         */
        protected $StartDate = null;
        /**
         * @var TaskStatusType $Status
         */
        protected $Status = null;
        /**
         * @var string $StatusDescription
         */
        protected $StatusDescription = null;
        /**
         * @var int $TotalWork
         */
        protected $TotalWork = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return int
         */
        public function getActualWork()
        {
                return $this->ActualWork;
        }

        /**
         * @param int $ActualWork
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setActualWork($ActualWork)
        {
                $this->ActualWork = $ActualWork;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getAssignedTime()
        {
                if ($this->AssignedTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->AssignedTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $AssignedTime
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setAssignedTime(\DateTime $AssignedTime = null)
        {
                if ($AssignedTime == null) {
                        $this->AssignedTime = null;
                } else {
                        $this->AssignedTime = $AssignedTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return string
         */
        public function getBillingInformation()
        {
                return $this->BillingInformation;
        }

        /**
         * @param string $BillingInformation
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setBillingInformation($BillingInformation)
        {
                $this->BillingInformation = $BillingInformation;
                return $this;
        }

        /**
         * @return int
         */
        public function getChangeCount()
        {
                return $this->ChangeCount;
        }

        /**
         * @param int $ChangeCount
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setChangeCount($ChangeCount)
        {
                $this->ChangeCount = $ChangeCount;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getCompanies()
        {
                return $this->Companies;
        }

        /**
         * @param ArrayOfStringsType $Companies
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setCompanies($Companies)
        {
                $this->Companies = $Companies;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getCompleteDate()
        {
                if ($this->CompleteDate == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->CompleteDate);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $CompleteDate
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setCompleteDate(\DateTime $CompleteDate = null)
        {
                if ($CompleteDate == null) {
                        $this->CompleteDate = null;
                } else {
                        $this->CompleteDate = $CompleteDate->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getContacts()
        {
                return $this->Contacts;
        }

        /**
         * @param ArrayOfStringsType $Contacts
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setContacts($Contacts)
        {
                $this->Contacts = $Contacts;
                return $this;
        }

        /**
         * @return TaskDelegateStateType
         */
        public function getDelegationState()
        {
                return $this->DelegationState;
        }

        /**
         * @param TaskDelegateStateType $DelegationState
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setDelegationState($DelegationState)
        {
                $this->DelegationState = $DelegationState;
                return $this;
        }

        /**
         * @return string
         */
        public function getDelegator()
        {
                return $this->Delegator;
        }

        /**
         * @param string $Delegator
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setDelegator($Delegator)
        {
                $this->Delegator = $Delegator;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getDueDate()
        {
                if ($this->DueDate == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->DueDate);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $DueDate
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setDueDate(\DateTime $DueDate = null)
        {
                if ($DueDate == null) {
                        $this->DueDate = null;
                } else {
                        $this->DueDate = $DueDate->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return int
         */
        public function getIsAssignmentEditable()
        {
                return $this->IsAssignmentEditable;
        }

        /**
         * @param int $IsAssignmentEditable
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setIsAssignmentEditable($IsAssignmentEditable)
        {
                $this->IsAssignmentEditable = $IsAssignmentEditable;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsComplete()
        {
                return $this->IsComplete;
        }

        /**
         * @param boolean $IsComplete
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setIsComplete($IsComplete)
        {
                $this->IsComplete = $IsComplete;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsRecurring()
        {
                return $this->IsRecurring;
        }

        /**
         * @param boolean $IsRecurring
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setIsRecurring($IsRecurring)
        {
                $this->IsRecurring = $IsRecurring;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsTeamTask()
        {
                return $this->IsTeamTask;
        }

        /**
         * @param boolean $IsTeamTask
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setIsTeamTask($IsTeamTask)
        {
                $this->IsTeamTask = $IsTeamTask;
                return $this;
        }

        /**
         * @return string
         */
        public function getMileage()
        {
                return $this->Mileage;
        }

        /**
         * @param string $Mileage
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setMileage($Mileage)
        {
                $this->Mileage = $Mileage;
                return $this;
        }

        /**
         * @return string
         */
        public function getOwner()
        {
                return $this->Owner;
        }

        /**
         * @param string $Owner
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setOwner($Owner)
        {
                $this->Owner = $Owner;
                return $this;
        }

        /**
         * @return float
         */
        public function getPercentComplete()
        {
                return $this->PercentComplete;
        }

        /**
         * @param float $PercentComplete
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setPercentComplete($PercentComplete)
        {
                $this->PercentComplete = $PercentComplete;
                return $this;
        }

        /**
         * @return TaskRecurrenceType
         */
        public function getRecurrence()
        {
                return $this->Recurrence;
        }

        /**
         * @param TaskRecurrenceType $Recurrence
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setRecurrence($Recurrence)
        {
                $this->Recurrence = $Recurrence;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getStartDate()
        {
                if ($this->StartDate == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->StartDate);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $StartDate
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setStartDate(\DateTime $StartDate = null)
        {
                if ($StartDate == null) {
                        $this->StartDate = null;
                } else {
                        $this->StartDate = $StartDate->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return TaskStatusType
         */
        public function getStatus()
        {
                return $this->Status;
        }

        /**
         * @param TaskStatusType $Status
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setStatus($Status)
        {
                $this->Status = $Status;
                return $this;
        }

        /**
         * @return string
         */
        public function getStatusDescription()
        {
                return $this->StatusDescription;
        }

        /**
         * @param string $StatusDescription
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setStatusDescription($StatusDescription)
        {
                $this->StatusDescription = $StatusDescription;
                return $this;
        }

        /**
         * @return int
         */
        public function getTotalWork()
        {
                return $this->TotalWork;
        }

        /**
         * @param int $TotalWork
         * @return \UUP\Exchange\Types\TaskType
         */
        public function setTotalWork($TotalWork)
        {
                $this->TotalWork = $TotalWork;
                return $this;
        }

}
