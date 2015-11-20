<?php

namespace UUP\Exchange\Types;

class ArrayOfRoomsType
{

        /**
         * @var RoomType[] $Room
         */
        protected $Room = null;

        public function __construct()
        {
                
        }

        /**
         * @return RoomType[]
         */
        public function getRoom()
        {
                return $this->Room;
        }

        /**
         * @param RoomType[] $Room
         * @return \UUP\Exchange\Types\ArrayOfRoomsType
         */
        public function setRoom(array $Room = null)
        {
                $this->Room = $Room;
                return $this;
        }

}
