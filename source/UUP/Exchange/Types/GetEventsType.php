<?php

namespace UUP\Exchange\Types;

class GetEventsType extends BaseRequestType
{

        /**
         * @var SubscriptionIdType $SubscriptionId
         */
        protected $SubscriptionId = null;
        /**
         * @var WatermarkType $Watermark
         */
        protected $Watermark = null;

        /**
         * @param SubscriptionIdType $SubscriptionId
         * @param WatermarkType $Watermark
         */
        public function __construct($SubscriptionId = null, $Watermark = null)
        {
                $this->SubscriptionId = $SubscriptionId;
                $this->Watermark = $Watermark;
        }

        /**
         * @return SubscriptionIdType
         */
        public function getSubscriptionId()
        {
                return $this->SubscriptionId;
        }

        /**
         * @param SubscriptionIdType $SubscriptionId
         * @return \UUP\Exchange\Types\GetEventsType
         */
        public function setSubscriptionId($SubscriptionId)
        {
                $this->SubscriptionId = $SubscriptionId;
                return $this;
        }

        /**
         * @return WatermarkType
         */
        public function getWatermark()
        {
                return $this->Watermark;
        }

        /**
         * @param WatermarkType $Watermark
         * @return \UUP\Exchange\Types\GetEventsType
         */
        public function setWatermark($Watermark)
        {
                $this->Watermark = $Watermark;
                return $this;
        }

}
