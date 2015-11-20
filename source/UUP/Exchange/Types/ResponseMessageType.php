<?php

namespace UUP\Exchange\Types;

class ResponseMessageType
{

        /**
         * @var string $MessageText
         */
        protected $MessageText = null;
        /**
         * @var ResponseCodeType $ResponseCode
         */
        protected $ResponseCode = null;
        /**
         * @var int $DescriptiveLinkKey
         */
        protected $DescriptiveLinkKey = null;
        /**
         * @var MessageXml $MessageXml
         */
        protected $MessageXml = null;
        /**
         * @var ResponseClassType $ResponseClass
         */
        protected $ResponseClass = null;

        /**
         * @param ResponseClassType $ResponseClass
         */
        public function __construct($ResponseClass = null)
        {
                $this->ResponseClass = $ResponseClass;
        }

        /**
         * @return string
         */
        public function getMessageText()
        {
                return $this->MessageText;
        }

        /**
         * @param string $MessageText
         * @return \UUP\Exchange\Types\ResponseMessageType
         */
        public function setMessageText($MessageText)
        {
                $this->MessageText = $MessageText;
                return $this;
        }

        /**
         * @return ResponseCodeType
         */
        public function getResponseCode()
        {
                return $this->ResponseCode;
        }

        /**
         * @param ResponseCodeType $ResponseCode
         * @return \UUP\Exchange\Types\ResponseMessageType
         */
        public function setResponseCode($ResponseCode)
        {
                $this->ResponseCode = $ResponseCode;
                return $this;
        }

        /**
         * @return int
         */
        public function getDescriptiveLinkKey()
        {
                return $this->DescriptiveLinkKey;
        }

        /**
         * @param int $DescriptiveLinkKey
         * @return \UUP\Exchange\Types\ResponseMessageType
         */
        public function setDescriptiveLinkKey($DescriptiveLinkKey)
        {
                $this->DescriptiveLinkKey = $DescriptiveLinkKey;
                return $this;
        }

        /**
         * @return MessageXml
         */
        public function getMessageXml()
        {
                return $this->MessageXml;
        }

        /**
         * @param MessageXml $MessageXml
         * @return \UUP\Exchange\Types\ResponseMessageType
         */
        public function setMessageXml($MessageXml)
        {
                $this->MessageXml = $MessageXml;
                return $this;
        }

        /**
         * @return ResponseClassType
         */
        public function getResponseClass()
        {
                return $this->ResponseClass;
        }

        /**
         * @param ResponseClassType $ResponseClass
         * @return \UUP\Exchange\Types\ResponseMessageType
         */
        public function setResponseClass($ResponseClass)
        {
                $this->ResponseClass = $ResponseClass;
                return $this;
        }

}
