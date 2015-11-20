<?php

namespace UUP\Exchange\Types;

class GetUserOofSettingsResponse
{

        /**
         * @var ResponseMessageType $ResponseMessage
         */
        protected $ResponseMessage = null;
        /**
         * @var UserOofSettings $OofSettings
         */
        protected $OofSettings = null;
        /**
         * @var ExternalAudience $AllowExternalOof
         */
        protected $AllowExternalOof = null;

        /**
         * @param ResponseMessageType $ResponseMessage
         * @param UserOofSettings $OofSettings
         */
        public function __construct($ResponseMessage = null, $OofSettings = null)
        {
                $this->ResponseMessage = $ResponseMessage;
                $this->OofSettings = $OofSettings;
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
         * @return \UUP\Exchange\Types\GetUserOofSettingsResponse
         */
        public function setResponseMessage($ResponseMessage)
        {
                $this->ResponseMessage = $ResponseMessage;
                return $this;
        }

        /**
         * @return UserOofSettings
         */
        public function getOofSettings()
        {
                return $this->OofSettings;
        }

        /**
         * @param UserOofSettings $OofSettings
         * @return \UUP\Exchange\Types\GetUserOofSettingsResponse
         */
        public function setOofSettings($OofSettings)
        {
                $this->OofSettings = $OofSettings;
                return $this;
        }

        /**
         * @return ExternalAudience
         */
        public function getAllowExternalOof()
        {
                return $this->AllowExternalOof;
        }

        /**
         * @param ExternalAudience $AllowExternalOof
         * @return \UUP\Exchange\Types\GetUserOofSettingsResponse
         */
        public function setAllowExternalOof($AllowExternalOof)
        {
                $this->AllowExternalOof = $AllowExternalOof;
                return $this;
        }

}
