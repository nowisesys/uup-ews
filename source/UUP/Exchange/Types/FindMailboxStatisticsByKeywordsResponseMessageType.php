<?php

namespace UUP\Exchange\Types;

class FindMailboxStatisticsByKeywordsResponseMessageType extends ResponseMessageType
{

        /**
         * @var MailboxStatisticsSearchResultType $MailboxStatisticsSearchResult
         */
        protected $MailboxStatisticsSearchResult = null;

        /**
         * @param ResponseClassType $ResponseClass
         * @param MailboxStatisticsSearchResultType $MailboxStatisticsSearchResult
         */
        public function __construct($ResponseClass = null, $MailboxStatisticsSearchResult = null)
        {
                parent::__construct($ResponseClass);
                $this->MailboxStatisticsSearchResult = $MailboxStatisticsSearchResult;
        }

        /**
         * @return MailboxStatisticsSearchResultType
         */
        public function getMailboxStatisticsSearchResult()
        {
                return $this->MailboxStatisticsSearchResult;
        }

        /**
         * @param MailboxStatisticsSearchResultType $MailboxStatisticsSearchResult
         * @return \UUP\Exchange\Types\FindMailboxStatisticsByKeywordsResponseMessageType
         */
        public function setMailboxStatisticsSearchResult($MailboxStatisticsSearchResult)
        {
                $this->MailboxStatisticsSearchResult = $MailboxStatisticsSearchResult;
                return $this;
        }

}
