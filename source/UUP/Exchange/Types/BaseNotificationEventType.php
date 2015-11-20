<?php

namespace UUP\Exchange\Types;

class BaseNotificationEventType
{

        /**
         * @var WatermarkType $Watermark
         */
        protected $Watermark = null;

        public function __construct()
        {
                
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
         * @return \UUP\Exchange\Types\BaseNotificationEventType
         */
        public function setWatermark($Watermark)
        {
                $this->Watermark = $Watermark;
                return $this;
        }

}
