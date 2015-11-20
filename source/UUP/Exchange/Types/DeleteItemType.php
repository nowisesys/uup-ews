<?php

namespace UUP\Exchange\Types;

class DeleteItemType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfBaseItemIdsType $ItemIds
         */
        protected $ItemIds = null;
        /**
         * @var DisposalType $DeleteType
         */
        protected $DeleteType = null;
        /**
         * @var CalendarItemCreateOrDeleteOperationType $SendMeetingCancellations
         */
        protected $SendMeetingCancellations = null;
        /**
         * @var AffectedTaskOccurrencesType $AffectedTaskOccurrences
         */
        protected $AffectedTaskOccurrences = null;

        /**
         * @param NonEmptyArrayOfBaseItemIdsType $ItemIds
         * @param DisposalType $DeleteType
         * @param CalendarItemCreateOrDeleteOperationType $SendMeetingCancellations
         * @param AffectedTaskOccurrencesType $AffectedTaskOccurrences
         */
        public function __construct($ItemIds = null, $DeleteType = null, $SendMeetingCancellations = null, $AffectedTaskOccurrences = null)
        {
                $this->ItemIds = $ItemIds;
                $this->DeleteType = $DeleteType;
                $this->SendMeetingCancellations = $SendMeetingCancellations;
                $this->AffectedTaskOccurrences = $AffectedTaskOccurrences;
        }

        /**
         * @return NonEmptyArrayOfBaseItemIdsType
         */
        public function getItemIds()
        {
                return $this->ItemIds;
        }

        /**
         * @param NonEmptyArrayOfBaseItemIdsType $ItemIds
         * @return \UUP\Exchange\Types\DeleteItemType
         */
        public function setItemIds($ItemIds)
        {
                $this->ItemIds = $ItemIds;
                return $this;
        }

        /**
         * @return DisposalType
         */
        public function getDeleteType()
        {
                return $this->DeleteType;
        }

        /**
         * @param DisposalType $DeleteType
         * @return \UUP\Exchange\Types\DeleteItemType
         */
        public function setDeleteType($DeleteType)
        {
                $this->DeleteType = $DeleteType;
                return $this;
        }

        /**
         * @return CalendarItemCreateOrDeleteOperationType
         */
        public function getSendMeetingCancellations()
        {
                return $this->SendMeetingCancellations;
        }

        /**
         * @param CalendarItemCreateOrDeleteOperationType $SendMeetingCancellations
         * @return \UUP\Exchange\Types\DeleteItemType
         */
        public function setSendMeetingCancellations($SendMeetingCancellations)
        {
                $this->SendMeetingCancellations = $SendMeetingCancellations;
                return $this;
        }

        /**
         * @return AffectedTaskOccurrencesType
         */
        public function getAffectedTaskOccurrences()
        {
                return $this->AffectedTaskOccurrences;
        }

        /**
         * @param AffectedTaskOccurrencesType $AffectedTaskOccurrences
         * @return \UUP\Exchange\Types\DeleteItemType
         */
        public function setAffectedTaskOccurrences($AffectedTaskOccurrences)
        {
                $this->AffectedTaskOccurrences = $AffectedTaskOccurrences;
                return $this;
        }

}
