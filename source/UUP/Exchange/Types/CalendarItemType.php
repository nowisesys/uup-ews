<?php

namespace UUP\Exchange\Types;

class CalendarItemType extends ItemType
{

        /**
         * @var string $UID
         */
        protected $UID = null;
        /**
         * @var \DateTime $RecurrenceId
         */
        protected $RecurrenceId = null;
        /**
         * @var \DateTime $DateTimeStamp
         */
        protected $DateTimeStamp = null;
        /**
         * @var \DateTime $Start
         */
        protected $Start = null;
        /**
         * @var \DateTime $End
         */
        protected $End = null;
        /**
         * @var \DateTime $OriginalStart
         */
        protected $OriginalStart = null;
        /**
         * @var boolean $IsAllDayEvent
         */
        protected $IsAllDayEvent = null;
        /**
         * @var LegacyFreeBusyType $LegacyFreeBusyStatus
         */
        protected $LegacyFreeBusyStatus = null;
        /**
         * @var string $Location
         */
        protected $Location = null;
        /**
         * @var string $When
         */
        protected $When = null;
        /**
         * @var boolean $IsMeeting
         */
        protected $IsMeeting = null;
        /**
         * @var boolean $IsCancelled
         */
        protected $IsCancelled = null;
        /**
         * @var boolean $IsRecurring
         */
        protected $IsRecurring = null;
        /**
         * @var boolean $MeetingRequestWasSent
         */
        protected $MeetingRequestWasSent = null;
        /**
         * @var boolean $IsResponseRequested
         */
        protected $IsResponseRequested = null;
        /**
         * @var CalendarItemTypeType $CalendarItemType
         */
        protected $CalendarItemType = null;
        /**
         * @var ResponseTypeType $MyResponseType
         */
        protected $MyResponseType = null;
        /**
         * @var SingleRecipientType $Organizer
         */
        protected $Organizer = null;
        /**
         * @var NonEmptyArrayOfAttendeesType $RequiredAttendees
         */
        protected $RequiredAttendees = null;
        /**
         * @var NonEmptyArrayOfAttendeesType $OptionalAttendees
         */
        protected $OptionalAttendees = null;
        /**
         * @var NonEmptyArrayOfAttendeesType $Resources
         */
        protected $Resources = null;
        /**
         * @var int $ConflictingMeetingCount
         */
        protected $ConflictingMeetingCount = null;
        /**
         * @var int $AdjacentMeetingCount
         */
        protected $AdjacentMeetingCount = null;
        /**
         * @var NonEmptyArrayOfAllItemsType $ConflictingMeetings
         */
        protected $ConflictingMeetings = null;
        /**
         * @var NonEmptyArrayOfAllItemsType $AdjacentMeetings
         */
        protected $AdjacentMeetings = null;
        /**
         * @var string $Duration
         */
        protected $Duration = null;
        /**
         * @var string $TimeZone
         */
        protected $TimeZone = null;
        /**
         * @var \DateTime $AppointmentReplyTime
         */
        protected $AppointmentReplyTime = null;
        /**
         * @var int $AppointmentSequenceNumber
         */
        protected $AppointmentSequenceNumber = null;
        /**
         * @var int $AppointmentState
         */
        protected $AppointmentState = null;
        /**
         * @var RecurrenceType $Recurrence
         */
        protected $Recurrence = null;
        /**
         * @var OccurrenceInfoType $FirstOccurrence
         */
        protected $FirstOccurrence = null;
        /**
         * @var OccurrenceInfoType $LastOccurrence
         */
        protected $LastOccurrence = null;
        /**
         * @var NonEmptyArrayOfOccurrenceInfoType $ModifiedOccurrences
         */
        protected $ModifiedOccurrences = null;
        /**
         * @var NonEmptyArrayOfDeletedOccurrencesType $DeletedOccurrences
         */
        protected $DeletedOccurrences = null;
        /**
         * @var TimeZoneType $MeetingTimeZone
         */
        protected $MeetingTimeZone = null;
        /**
         * @var TimeZoneDefinitionType $StartTimeZone
         */
        protected $StartTimeZone = null;
        /**
         * @var TimeZoneDefinitionType $EndTimeZone
         */
        protected $EndTimeZone = null;
        /**
         * @var int $ConferenceType
         */
        protected $ConferenceType = null;
        /**
         * @var boolean $AllowNewTimeProposal
         */
        protected $AllowNewTimeProposal = null;
        /**
         * @var boolean $IsOnlineMeeting
         */
        protected $IsOnlineMeeting = null;
        /**
         * @var string $MeetingWorkspaceUrl
         */
        protected $MeetingWorkspaceUrl = null;
        /**
         * @var string $NetShowUrl
         */
        protected $NetShowUrl = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return string
         */
        public function getUID()
        {
                return $this->UID;
        }

        /**
         * @param string $UID
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setUID($UID)
        {
                $this->UID = $UID;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getRecurrenceId()
        {
                if ($this->RecurrenceId == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->RecurrenceId);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $RecurrenceId
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setRecurrenceId(\DateTime $RecurrenceId = null)
        {
                if ($RecurrenceId == null) {
                        $this->RecurrenceId = null;
                } else {
                        $this->RecurrenceId = $RecurrenceId->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getDateTimeStamp()
        {
                if ($this->DateTimeStamp == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->DateTimeStamp);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $DateTimeStamp
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setDateTimeStamp(\DateTime $DateTimeStamp = null)
        {
                if ($DateTimeStamp == null) {
                        $this->DateTimeStamp = null;
                } else {
                        $this->DateTimeStamp = $DateTimeStamp->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getStart()
        {
                if ($this->Start == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->Start);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $Start
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setStart(\DateTime $Start = null)
        {
                if ($Start == null) {
                        $this->Start = null;
                } else {
                        $this->Start = $Start->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getEnd()
        {
                if ($this->End == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->End);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $End
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setEnd(\DateTime $End = null)
        {
                if ($End == null) {
                        $this->End = null;
                } else {
                        $this->End = $End->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getOriginalStart()
        {
                if ($this->OriginalStart == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->OriginalStart);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $OriginalStart
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setOriginalStart(\DateTime $OriginalStart = null)
        {
                if ($OriginalStart == null) {
                        $this->OriginalStart = null;
                } else {
                        $this->OriginalStart = $OriginalStart->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsAllDayEvent()
        {
                return $this->IsAllDayEvent;
        }

        /**
         * @param boolean $IsAllDayEvent
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setIsAllDayEvent($IsAllDayEvent)
        {
                $this->IsAllDayEvent = $IsAllDayEvent;
                return $this;
        }

        /**
         * @return LegacyFreeBusyType
         */
        public function getLegacyFreeBusyStatus()
        {
                return $this->LegacyFreeBusyStatus;
        }

        /**
         * @param LegacyFreeBusyType $LegacyFreeBusyStatus
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setLegacyFreeBusyStatus($LegacyFreeBusyStatus)
        {
                $this->LegacyFreeBusyStatus = $LegacyFreeBusyStatus;
                return $this;
        }

        /**
         * @return string
         */
        public function getLocation()
        {
                return $this->Location;
        }

        /**
         * @param string $Location
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setLocation($Location)
        {
                $this->Location = $Location;
                return $this;
        }

        /**
         * @return string
         */
        public function getWhen()
        {
                return $this->When;
        }

        /**
         * @param string $When
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setWhen($When)
        {
                $this->When = $When;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsMeeting()
        {
                return $this->IsMeeting;
        }

        /**
         * @param boolean $IsMeeting
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setIsMeeting($IsMeeting)
        {
                $this->IsMeeting = $IsMeeting;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsCancelled()
        {
                return $this->IsCancelled;
        }

        /**
         * @param boolean $IsCancelled
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setIsCancelled($IsCancelled)
        {
                $this->IsCancelled = $IsCancelled;
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
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setIsRecurring($IsRecurring)
        {
                $this->IsRecurring = $IsRecurring;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getMeetingRequestWasSent()
        {
                return $this->MeetingRequestWasSent;
        }

        /**
         * @param boolean $MeetingRequestWasSent
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setMeetingRequestWasSent($MeetingRequestWasSent)
        {
                $this->MeetingRequestWasSent = $MeetingRequestWasSent;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsResponseRequested()
        {
                return $this->IsResponseRequested;
        }

        /**
         * @param boolean $IsResponseRequested
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setIsResponseRequested($IsResponseRequested)
        {
                $this->IsResponseRequested = $IsResponseRequested;
                return $this;
        }

        /**
         * @return CalendarItemTypeType
         */
        public function getCalendarItemType()
        {
                return $this->CalendarItemType;
        }

        /**
         * @param CalendarItemTypeType $CalendarItemType
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setCalendarItemType($CalendarItemType)
        {
                $this->CalendarItemType = $CalendarItemType;
                return $this;
        }

        /**
         * @return ResponseTypeType
         */
        public function getMyResponseType()
        {
                return $this->MyResponseType;
        }

        /**
         * @param ResponseTypeType $MyResponseType
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setMyResponseType($MyResponseType)
        {
                $this->MyResponseType = $MyResponseType;
                return $this;
        }

        /**
         * @return SingleRecipientType
         */
        public function getOrganizer()
        {
                return $this->Organizer;
        }

        /**
         * @param SingleRecipientType $Organizer
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setOrganizer($Organizer)
        {
                $this->Organizer = $Organizer;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfAttendeesType
         */
        public function getRequiredAttendees()
        {
                return $this->RequiredAttendees;
        }

        /**
         * @param NonEmptyArrayOfAttendeesType $RequiredAttendees
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setRequiredAttendees($RequiredAttendees)
        {
                $this->RequiredAttendees = $RequiredAttendees;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfAttendeesType
         */
        public function getOptionalAttendees()
        {
                return $this->OptionalAttendees;
        }

        /**
         * @param NonEmptyArrayOfAttendeesType $OptionalAttendees
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setOptionalAttendees($OptionalAttendees)
        {
                $this->OptionalAttendees = $OptionalAttendees;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfAttendeesType
         */
        public function getResources()
        {
                return $this->Resources;
        }

        /**
         * @param NonEmptyArrayOfAttendeesType $Resources
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setResources($Resources)
        {
                $this->Resources = $Resources;
                return $this;
        }

        /**
         * @return int
         */
        public function getConflictingMeetingCount()
        {
                return $this->ConflictingMeetingCount;
        }

        /**
         * @param int $ConflictingMeetingCount
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setConflictingMeetingCount($ConflictingMeetingCount)
        {
                $this->ConflictingMeetingCount = $ConflictingMeetingCount;
                return $this;
        }

        /**
         * @return int
         */
        public function getAdjacentMeetingCount()
        {
                return $this->AdjacentMeetingCount;
        }

        /**
         * @param int $AdjacentMeetingCount
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setAdjacentMeetingCount($AdjacentMeetingCount)
        {
                $this->AdjacentMeetingCount = $AdjacentMeetingCount;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfAllItemsType
         */
        public function getConflictingMeetings()
        {
                return $this->ConflictingMeetings;
        }

        /**
         * @param NonEmptyArrayOfAllItemsType $ConflictingMeetings
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setConflictingMeetings($ConflictingMeetings)
        {
                $this->ConflictingMeetings = $ConflictingMeetings;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfAllItemsType
         */
        public function getAdjacentMeetings()
        {
                return $this->AdjacentMeetings;
        }

        /**
         * @param NonEmptyArrayOfAllItemsType $AdjacentMeetings
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setAdjacentMeetings($AdjacentMeetings)
        {
                $this->AdjacentMeetings = $AdjacentMeetings;
                return $this;
        }

        /**
         * @return string
         */
        public function getDuration()
        {
                return $this->Duration;
        }

        /**
         * @param string $Duration
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setDuration($Duration)
        {
                $this->Duration = $Duration;
                return $this;
        }

        /**
         * @return string
         */
        public function getTimeZone()
        {
                return $this->TimeZone;
        }

        /**
         * @param string $TimeZone
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setTimeZone($TimeZone)
        {
                $this->TimeZone = $TimeZone;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getAppointmentReplyTime()
        {
                if ($this->AppointmentReplyTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->AppointmentReplyTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $AppointmentReplyTime
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setAppointmentReplyTime(\DateTime $AppointmentReplyTime = null)
        {
                if ($AppointmentReplyTime == null) {
                        $this->AppointmentReplyTime = null;
                } else {
                        $this->AppointmentReplyTime = $AppointmentReplyTime->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return int
         */
        public function getAppointmentSequenceNumber()
        {
                return $this->AppointmentSequenceNumber;
        }

        /**
         * @param int $AppointmentSequenceNumber
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setAppointmentSequenceNumber($AppointmentSequenceNumber)
        {
                $this->AppointmentSequenceNumber = $AppointmentSequenceNumber;
                return $this;
        }

        /**
         * @return int
         */
        public function getAppointmentState()
        {
                return $this->AppointmentState;
        }

        /**
         * @param int $AppointmentState
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setAppointmentState($AppointmentState)
        {
                $this->AppointmentState = $AppointmentState;
                return $this;
        }

        /**
         * @return RecurrenceType
         */
        public function getRecurrence()
        {
                return $this->Recurrence;
        }

        /**
         * @param RecurrenceType $Recurrence
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setRecurrence($Recurrence)
        {
                $this->Recurrence = $Recurrence;
                return $this;
        }

        /**
         * @return OccurrenceInfoType
         */
        public function getFirstOccurrence()
        {
                return $this->FirstOccurrence;
        }

        /**
         * @param OccurrenceInfoType $FirstOccurrence
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setFirstOccurrence($FirstOccurrence)
        {
                $this->FirstOccurrence = $FirstOccurrence;
                return $this;
        }

        /**
         * @return OccurrenceInfoType
         */
        public function getLastOccurrence()
        {
                return $this->LastOccurrence;
        }

        /**
         * @param OccurrenceInfoType $LastOccurrence
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setLastOccurrence($LastOccurrence)
        {
                $this->LastOccurrence = $LastOccurrence;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfOccurrenceInfoType
         */
        public function getModifiedOccurrences()
        {
                return $this->ModifiedOccurrences;
        }

        /**
         * @param NonEmptyArrayOfOccurrenceInfoType $ModifiedOccurrences
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setModifiedOccurrences($ModifiedOccurrences)
        {
                $this->ModifiedOccurrences = $ModifiedOccurrences;
                return $this;
        }

        /**
         * @return NonEmptyArrayOfDeletedOccurrencesType
         */
        public function getDeletedOccurrences()
        {
                return $this->DeletedOccurrences;
        }

        /**
         * @param NonEmptyArrayOfDeletedOccurrencesType $DeletedOccurrences
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setDeletedOccurrences($DeletedOccurrences)
        {
                $this->DeletedOccurrences = $DeletedOccurrences;
                return $this;
        }

        /**
         * @return TimeZoneType
         */
        public function getMeetingTimeZone()
        {
                return $this->MeetingTimeZone;
        }

        /**
         * @param TimeZoneType $MeetingTimeZone
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setMeetingTimeZone($MeetingTimeZone)
        {
                $this->MeetingTimeZone = $MeetingTimeZone;
                return $this;
        }

        /**
         * @return TimeZoneDefinitionType
         */
        public function getStartTimeZone()
        {
                return $this->StartTimeZone;
        }

        /**
         * @param TimeZoneDefinitionType $StartTimeZone
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setStartTimeZone($StartTimeZone)
        {
                $this->StartTimeZone = $StartTimeZone;
                return $this;
        }

        /**
         * @return TimeZoneDefinitionType
         */
        public function getEndTimeZone()
        {
                return $this->EndTimeZone;
        }

        /**
         * @param TimeZoneDefinitionType $EndTimeZone
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setEndTimeZone($EndTimeZone)
        {
                $this->EndTimeZone = $EndTimeZone;
                return $this;
        }

        /**
         * @return int
         */
        public function getConferenceType()
        {
                return $this->ConferenceType;
        }

        /**
         * @param int $ConferenceType
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setConferenceType($ConferenceType)
        {
                $this->ConferenceType = $ConferenceType;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getAllowNewTimeProposal()
        {
                return $this->AllowNewTimeProposal;
        }

        /**
         * @param boolean $AllowNewTimeProposal
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setAllowNewTimeProposal($AllowNewTimeProposal)
        {
                $this->AllowNewTimeProposal = $AllowNewTimeProposal;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIsOnlineMeeting()
        {
                return $this->IsOnlineMeeting;
        }

        /**
         * @param boolean $IsOnlineMeeting
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setIsOnlineMeeting($IsOnlineMeeting)
        {
                $this->IsOnlineMeeting = $IsOnlineMeeting;
                return $this;
        }

        /**
         * @return string
         */
        public function getMeetingWorkspaceUrl()
        {
                return $this->MeetingWorkspaceUrl;
        }

        /**
         * @param string $MeetingWorkspaceUrl
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setMeetingWorkspaceUrl($MeetingWorkspaceUrl)
        {
                $this->MeetingWorkspaceUrl = $MeetingWorkspaceUrl;
                return $this;
        }

        /**
         * @return string
         */
        public function getNetShowUrl()
        {
                return $this->NetShowUrl;
        }

        /**
         * @param string $NetShowUrl
         * @return \UUP\Exchange\Types\CalendarItemType
         */
        public function setNetShowUrl($NetShowUrl)
        {
                $this->NetShowUrl = $NetShowUrl;
                return $this;
        }

}
