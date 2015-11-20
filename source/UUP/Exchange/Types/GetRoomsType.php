<?php

namespace UUP\Exchange\Types;

class GetRoomsType extends BaseRequestType
{

        /**
         * @var EmailAddressType $RoomList
         */
        protected $RoomList = null;

        /**
         * @param EmailAddressType $RoomList
         */
        public function __construct($RoomList = null)
        {
                $this->RoomList = $RoomList;
        }

        /**
         * @return EmailAddressType
         */
        public function getRoomList()
        {
                return $this->RoomList;
        }

        /**
         * @param EmailAddressType $RoomList
         * @return \UUP\Exchange\Types\GetRoomsType
         */
        public function setRoomList($RoomList)
        {
                $this->RoomList = $RoomList;
                return $this;
        }

}
