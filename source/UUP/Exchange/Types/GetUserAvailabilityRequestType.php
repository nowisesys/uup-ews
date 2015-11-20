<?php

namespace UUP\Exchange\Types;

class GetUserAvailabilityRequestType extends BaseRequestType
{

        /**
         * @var SerializableTimeZone $TimeZone
         */
        protected $TimeZone = null;
        /**
         * @var ArrayOfMailboxData $MailboxDataArray
         */
        protected $MailboxDataArray = null;
        /**
         * @var FreeBusyViewOptionsType $FreeBusyViewOptions
         */
        protected $FreeBusyViewOptions = null;
        /**
         * @var SuggestionsViewOptionsType $SuggestionsViewOptions
         */
        protected $SuggestionsViewOptions = null;

        /**
         * @param SerializableTimeZone $TimeZone
         * @param ArrayOfMailboxData $MailboxDataArray
         * @param FreeBusyViewOptionsType $FreeBusyViewOptions
         * @param SuggestionsViewOptionsType $SuggestionsViewOptions
         */
        public function __construct($TimeZone = null, $MailboxDataArray = null, $FreeBusyViewOptions = null, $SuggestionsViewOptions = null)
        {
                $this->TimeZone = $TimeZone;
                $this->MailboxDataArray = $MailboxDataArray;
                $this->FreeBusyViewOptions = $FreeBusyViewOptions;
                $this->SuggestionsViewOptions = $SuggestionsViewOptions;
        }

        /**
         * @return SerializableTimeZone
         */
        public function getTimeZone()
        {
                return $this->TimeZone;
        }

        /**
         * @param SerializableTimeZone $TimeZone
         * @return \UUP\Exchange\Types\GetUserAvailabilityRequestType
         */
        public function setTimeZone($TimeZone)
        {
                $this->TimeZone = $TimeZone;
                return $this;
        }

        /**
         * @return ArrayOfMailboxData
         */
        public function getMailboxDataArray()
        {
                return $this->MailboxDataArray;
        }

        /**
         * @param ArrayOfMailboxData $MailboxDataArray
         * @return \UUP\Exchange\Types\GetUserAvailabilityRequestType
         */
        public function setMailboxDataArray($MailboxDataArray)
        {
                $this->MailboxDataArray = $MailboxDataArray;
                return $this;
        }

        /**
         * @return FreeBusyViewOptionsType
         */
        public function getFreeBusyViewOptions()
        {
                return $this->FreeBusyViewOptions;
        }

        /**
         * @param FreeBusyViewOptionsType $FreeBusyViewOptions
         * @return \UUP\Exchange\Types\GetUserAvailabilityRequestType
         */
        public function setFreeBusyViewOptions($FreeBusyViewOptions)
        {
                $this->FreeBusyViewOptions = $FreeBusyViewOptions;
                return $this;
        }

        /**
         * @return SuggestionsViewOptionsType
         */
        public function getSuggestionsViewOptions()
        {
                return $this->SuggestionsViewOptions;
        }

        /**
         * @param SuggestionsViewOptionsType $SuggestionsViewOptions
         * @return \UUP\Exchange\Types\GetUserAvailabilityRequestType
         */
        public function setSuggestionsViewOptions($SuggestionsViewOptions)
        {
                $this->SuggestionsViewOptions = $SuggestionsViewOptions;
                return $this;
        }

}
