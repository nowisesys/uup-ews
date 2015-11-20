<?php

namespace UUP\Exchange\Types;

class UnifiedMessageServiceConfiguration extends ServiceConfiguration
{

        /**
         * @var boolean $UmEnabled
         */
        protected $UmEnabled = null;
        /**
         * @var string $PlayOnPhoneDialString
         */
        protected $PlayOnPhoneDialString = null;
        /**
         * @var boolean $PlayOnPhoneEnabled
         */
        protected $PlayOnPhoneEnabled = null;

        /**
         * @param boolean $UmEnabled
         * @param string $PlayOnPhoneDialString
         * @param boolean $PlayOnPhoneEnabled
         */
        public function __construct($UmEnabled = null, $PlayOnPhoneDialString = null, $PlayOnPhoneEnabled = null)
        {
                $this->UmEnabled = $UmEnabled;
                $this->PlayOnPhoneDialString = $PlayOnPhoneDialString;
                $this->PlayOnPhoneEnabled = $PlayOnPhoneEnabled;
        }

        /**
         * @return boolean
         */
        public function getUmEnabled()
        {
                return $this->UmEnabled;
        }

        /**
         * @param boolean $UmEnabled
         * @return \UUP\Exchange\Types\UnifiedMessageServiceConfiguration
         */
        public function setUmEnabled($UmEnabled)
        {
                $this->UmEnabled = $UmEnabled;
                return $this;
        }

        /**
         * @return string
         */
        public function getPlayOnPhoneDialString()
        {
                return $this->PlayOnPhoneDialString;
        }

        /**
         * @param string $PlayOnPhoneDialString
         * @return \UUP\Exchange\Types\UnifiedMessageServiceConfiguration
         */
        public function setPlayOnPhoneDialString($PlayOnPhoneDialString)
        {
                $this->PlayOnPhoneDialString = $PlayOnPhoneDialString;
                return $this;
        }

        /**
         * @return boolean
         */
        public function getPlayOnPhoneEnabled()
        {
                return $this->PlayOnPhoneEnabled;
        }

        /**
         * @param boolean $PlayOnPhoneEnabled
         * @return \UUP\Exchange\Types\UnifiedMessageServiceConfiguration
         */
        public function setPlayOnPhoneEnabled($PlayOnPhoneEnabled)
        {
                $this->PlayOnPhoneEnabled = $PlayOnPhoneEnabled;
                return $this;
        }

}
