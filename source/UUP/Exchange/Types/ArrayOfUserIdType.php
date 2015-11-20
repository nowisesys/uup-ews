<?php

namespace UUP\Exchange\Types;

class ArrayOfUserIdType
{

        /**
         * @var UserIdType[] $UserId
         */
        protected $UserId = null;

        /**
         * @param UserIdType[] $UserId
         */
        public function __construct(array $UserId = null)
        {
                $this->UserId = $UserId;
        }

        /**
         * @return UserIdType[]
         */
        public function getUserId()
        {
                return $this->UserId;
        }

        /**
         * @param UserIdType[] $UserId
         * @return \UUP\Exchange\Types\ArrayOfUserIdType
         */
        public function setUserId(array $UserId)
        {
                $this->UserId = $UserId;
                return $this;
        }

}
