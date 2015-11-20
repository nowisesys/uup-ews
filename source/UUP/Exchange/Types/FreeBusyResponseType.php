<?php

namespace UUP\Exchange\Types;

class FreeBusyResponseType
{

        /**
         * @var ResponseMessageType $ResponseMessage
         */
        protected $ResponseMessage = null;
        /**
         * @var FreeBusyView $FreeBusyView
         */
        protected $FreeBusyView = null;

        public function __construct()
        {
                
        }

        /**
         * @return ResponseMessageType
         */
        public function getResponseMessage()
        {
                return $this->ResponseMessage;
        }

        /**
         * @param ResponseMessageType $ResponseMessage
         * @return \UUP\Exchange\Types\FreeBusyResponseType
         */
        public function setResponseMessage($ResponseMessage)
        {
                $this->ResponseMessage = $ResponseMessage;
                return $this;
        }

        /**
         * @return FreeBusyView
         */
        public function getFreeBusyView()
        {
                return $this->FreeBusyView;
        }

        /**
         * @param FreeBusyView $FreeBusyView
         * @return \UUP\Exchange\Types\FreeBusyResponseType
         */
        public function setFreeBusyView($FreeBusyView)
        {
                $this->FreeBusyView = $FreeBusyView;
                return $this;
        }

}
