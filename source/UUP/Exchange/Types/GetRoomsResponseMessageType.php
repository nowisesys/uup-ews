<?php

namespace UUP\Exchange\Types;

class GetRoomsResponseMessageType extends ResponseMessageType
{

        /**
         * @var ArrayOfRoomsType $Rooms
         */
        protected $Rooms = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
        }

        /**
         * @return ArrayOfRoomsType
         */
        public function getRooms()
        {
                return $this->Rooms;
        }

        /**
         * @param ArrayOfRoomsType $Rooms
         * @return \UUP\Exchange\Types\GetRoomsResponseMessageType
         */
        public function setRooms($Rooms)
        {
                $this->Rooms = $Rooms;
                return $this;
        }

}
