<?php

namespace UUP\Exchange\Types;

class ConvertIdType extends BaseRequestType
{

        /**
         * @var NonEmptyArrayOfAlternateIdsType $SourceIds
         */
        protected $SourceIds = null;
        /**
         * @var IdFormatType $DestinationFormat
         */
        protected $DestinationFormat = null;

        /**
         * @param NonEmptyArrayOfAlternateIdsType $SourceIds
         * @param IdFormatType $DestinationFormat
         */
        public function __construct($SourceIds = null, $DestinationFormat = null)
        {
                $this->SourceIds = $SourceIds;
                $this->DestinationFormat = $DestinationFormat;
        }

        /**
         * @return NonEmptyArrayOfAlternateIdsType
         */
        public function getSourceIds()
        {
                return $this->SourceIds;
        }

        /**
         * @param NonEmptyArrayOfAlternateIdsType $SourceIds
         * @return \UUP\Exchange\Types\ConvertIdType
         */
        public function setSourceIds($SourceIds)
        {
                $this->SourceIds = $SourceIds;
                return $this;
        }

        /**
         * @return IdFormatType
         */
        public function getDestinationFormat()
        {
                return $this->DestinationFormat;
        }

        /**
         * @param IdFormatType $DestinationFormat
         * @return \UUP\Exchange\Types\ConvertIdType
         */
        public function setDestinationFormat($DestinationFormat)
        {
                $this->DestinationFormat = $DestinationFormat;
                return $this;
        }

}
