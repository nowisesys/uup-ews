<?php

namespace UUP\Exchange\Types;

class MailboxStatisticsSearchResultType
{

        /**
         * @var UserMailboxType $UserMailbox
         */
        protected $UserMailbox = null;
        /**
         * @var KeywordStatisticsSearchResultType $KeywordStatisticsSearchResult
         */
        protected $KeywordStatisticsSearchResult = null;

        /**
         * @param UserMailboxType $UserMailbox
         */
        public function __construct($UserMailbox = null)
        {
                $this->UserMailbox = $UserMailbox;
        }

        /**
         * @return UserMailboxType
         */
        public function getUserMailbox()
        {
                return $this->UserMailbox;
        }

        /**
         * @param UserMailboxType $UserMailbox
         * @return \UUP\Exchange\Types\MailboxStatisticsSearchResultType
         */
        public function setUserMailbox($UserMailbox)
        {
                $this->UserMailbox = $UserMailbox;
                return $this;
        }

        /**
         * @return KeywordStatisticsSearchResultType
         */
        public function getKeywordStatisticsSearchResult()
        {
                return $this->KeywordStatisticsSearchResult;
        }

        /**
         * @param KeywordStatisticsSearchResultType $KeywordStatisticsSearchResult
         * @return \UUP\Exchange\Types\MailboxStatisticsSearchResultType
         */
        public function setKeywordStatisticsSearchResult($KeywordStatisticsSearchResult)
        {
                $this->KeywordStatisticsSearchResult = $KeywordStatisticsSearchResult;
                return $this;
        }

}
