<?php

namespace UUP\Exchange\Types;

class GetServerTimeZonesType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfTimeZoneIdType $Ids
         */
        protected $Ids = null;
        /**
         * @var boolean $ReturnFullTimeZoneData
         */
        protected $ReturnFullTimeZoneData = null;

        /**
         * @param boolean $ReturnFullTimeZoneData
         */
        public function __construct($ReturnFullTimeZoneData = null)
        {
                $this->ReturnFullTimeZoneData = $ReturnFullTimeZoneData;
        }

        /**
         * @return NonEmptyArrayOfTimeZoneIdType
         */
        public function getIds()
        {
                return $this->Ids;
        }

        /**
         * @param NonEmptyArrayOfTimeZoneIdType $Ids
         * @return \UUP\Exchange\Types\GetServerTimeZonesType
         */
        public function setIds($Ids)
        {
                $this->Ids = $Ids;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getReturnFullTimeZoneData()
        {
                return $this->ReturnFullTimeZoneData;
        }

        /**
         * @param boolean $ReturnFullTimeZoneData
         * @return \UUP\Exchange\Types\GetServerTimeZonesType
         */
        public function setReturnFullTimeZoneData($ReturnFullTimeZoneData)
        {
                $this->ReturnFullTimeZoneData = $ReturnFullTimeZoneData;
                return $this;
        }

}
