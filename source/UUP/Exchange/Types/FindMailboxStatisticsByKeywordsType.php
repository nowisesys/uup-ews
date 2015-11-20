<?php

namespace UUP\Exchange\Types;

class FindMailboxStatisticsByKeywordsType extends BaseRequestType
{

        /**
         * @var ArrayOfUserMailboxesType $Mailboxes
         */
        protected $Mailboxes = null;
        /**
         * @var ArrayOfStringsType $Keywords
         */
        protected $Keywords = null;
        /**
         * @var string $Language
         */
        protected $Language = null;
        /**
         * @var ArrayOfSmtpAddressType $Senders
         */
        protected $Senders = null;
        /**
         * @var ArrayOfSmtpAddressType $Recipients
         */
        protected $Recipients = null;
        /**
         * @var \DateTime $FromDate
         */
        protected $FromDate = null;
        /**
         * @var \DateTime $ToDate
         */
        protected $ToDate = null;
        /**
         * @var ArrayOfSearchItemKindsType $MessageTypes
         */
        protected $MessageTypes = null;
        /**
         * @var boolean $SearchDumpster
         */
        protected $SearchDumpster = null;
        /**
         * @var boolean $IncludePersonalArchive
         */
        protected $IncludePersonalArchive = null;
        /**
         * @var boolean $IncludeUnsearchableItems
         */
        protected $IncludeUnsearchableItems = null;

        /**
         * @param ArrayOfUserMailboxesType $Mailboxes
         * @param ArrayOfStringsType $Keywords
         */
        public function __construct($Mailboxes = null, $Keywords = null)
        {
                $this->Mailboxes = $Mailboxes;
                $this->Keywords = $Keywords;
        }

        /**
         * @return ArrayOfUserMailboxesType
         */
        public function getMailboxes()
        {
                return $this->Mailboxes;
        }

        /**
         * @param ArrayOfUserMailboxesType $Mailboxes
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setMailboxes($Mailboxes)
        {
                $this->Mailboxes = $Mailboxes;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getKeywords()
        {
                return $this->Keywords;
        }

        /**
         * @param ArrayOfStringsType $Keywords
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setKeywords($Keywords)
        {
                $this->Keywords = $Keywords;
                return $this;
        }

        /**
         * @return string
         */
        public function getLanguage()
        {
                return $this->Language;
        }

        /**
         * @param string $Language
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setLanguage($Language)
        {
                $this->Language = $Language;
                return $this;
        }

        /**
         * @return ArrayOfSmtpAddressType
         */
        public function getSenders()
        {
                return $this->Senders;
        }

        /**
         * @param ArrayOfSmtpAddressType $Senders
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setSenders($Senders)
        {
                $this->Senders = $Senders;
                return $this;
        }

        /**
         * @return ArrayOfSmtpAddressType
         */
        public function getRecipients()
        {
                return $this->Recipients;
        }

        /**
         * @param ArrayOfSmtpAddressType $Recipients
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setRecipients($Recipients)
        {
                $this->Recipients = $Recipients;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getFromDate()
        {
                if ($this->FromDate == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->FromDate);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $FromDate
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setFromDate(\DateTime $FromDate = null)
        {
                if ($FromDate == null) {
                        $this->FromDate = null;
                } else {
                        $this->FromDate = $FromDate->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getToDate()
        {
                if ($this->ToDate == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->ToDate);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $ToDate
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setToDate(\DateTime $ToDate = null)
        {
                if ($ToDate == null) {
                        $this->ToDate = null;
                } else {
                        $this->ToDate = $ToDate->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return ArrayOfSearchItemKindsType
         */
        public function getMessageTypes()
        {
                return $this->MessageTypes;
        }

        /**
         * @param ArrayOfSearchItemKindsType $MessageTypes
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setMessageTypes($MessageTypes)
        {
                $this->MessageTypes = $MessageTypes;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getSearchDumpster()
        {
                return $this->SearchDumpster;
        }

        /**
         * @param boolean $SearchDumpster
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setSearchDumpster($SearchDumpster)
        {
                $this->SearchDumpster = $SearchDumpster;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIncludePersonalArchive()
        {
                return $this->IncludePersonalArchive;
        }

        /**
         * @param boolean $IncludePersonalArchive
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setIncludePersonalArchive($IncludePersonalArchive)
        {
                $this->IncludePersonalArchive = $IncludePersonalArchive;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getIncludeUnsearchableItems()
        {
                return $this->IncludeUnsearchableItems;
        }

        /**
         * @param boolean $IncludeUnsearchableItems
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsType
         */
        public function setIncludeUnsearchableItems($IncludeUnsearchableItems)
        {
                $this->IncludeUnsearchableItems = $IncludeUnsearchableItems;
                return $this;
        }

}
