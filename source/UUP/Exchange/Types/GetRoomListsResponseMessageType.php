<?php

namespace UUP\Exchange\Types;

class GetRoomListsResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfEmailAddressesType $RoomLists
         */
        protected $RoomLists = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return ArrayOfEmailAddressesType
         */
        public function getRoomLists()
        {
                return $this->RoomLists;
        }

        /**
         * @param ArrayOfEmailAddressesType $RoomLists
         * @return \UUP\Exchange\Types\GetRoomListsResponseMessageType
         */
        public function setRoomLists($RoomLists)
        {
                $this->RoomLists = $RoomLists;
                return $this;
        }

}
