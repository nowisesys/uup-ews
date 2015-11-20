<?php

namespace UUP\Exchange\Types;

class TransitionTargetType
{

        /**
         * @var string $_
         */
        protected $_ = null;
        /**
         * @var TransitionTargetKindType $Kind
         */
        protected $Kind = null;

        /**
         * @param string $_
         * @param TransitionTargetKindType $Kind
         */
        public function __construct($_ = null, $Kind = null)
        {
                $this->_ = $_;
                $this->Kind = $Kind;
        }

        /**
         * @return string
         */
        public function get_()
        {
                return $this->_;
        }

        /**
         * @param string $_
         * @return \UUP\Exchange\Types\TransitionTargetType
         */
        public function set_($_)
        {
                $this->_ = $_;
                return $this;
        }

        /**
         * @return TransitionTargetKindType
         */
        public function getKind()
        {
                return $this->Kind;
        }

        /**
         * @param TransitionTargetKindType $Kind
         * @return \UUP\Exchange\Types\TransitionTargetType
         */
        public function setKind($Kind)
        {
                $this->Kind = $Kind;
                return $this;
        }

}
