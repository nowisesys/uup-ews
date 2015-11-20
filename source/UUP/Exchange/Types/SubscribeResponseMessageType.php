<?php

namespace UUP\Exchange\Types;

class SubscribeResponseMessageType extends ResponseMessageType
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
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                parent::__construct($ResponseClass);
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
         * @return \UUP\Exchange\Types\SubscribeResponseMessageType
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
         * @return \UUP\Exchange\Types\SubscribeResponseMessageType
         */
        public function setWatermark($Watermark)
        {
                $this->Watermark = $Watermark;
                return $this;
        }

}
