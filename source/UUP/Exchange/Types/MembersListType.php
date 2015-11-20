<?php

namespace UUP\Exchange\Types;

class MembersListType
{

        /**
         * @var MemberType[] $Member
         */
        protected $Member = null;

        public function __construct()
        {
                
        }

        /**
         * @return MemberType[]
         */
        public function getMember()
        {
                return $this->Member;
        }

        /**
         * @param MemberType[] $Member
         * @return \UUP\Exchange\Types\MembersListType
         */
        public function setMember(array $Member = null)
        {
                $this->Member = $Member;
                return $this;
        }

}
