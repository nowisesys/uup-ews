<?php

namespace UUP\Exchange\Types;

class AbsoluteDateTransitionType extends TransitionType
{

        /**
         * @var \DateTime $DateTime
         */
        protected $DateTime = null;

        /**
         * @param TransitionTargetType $To
         * @param \DateTime $DateTime
         */
        public function __construct($To = null, \DateTime $DateTime = null)
        {
                parent::__construct($To);
                $this->DateTime = $DateTime ? $DateTime->format(\DateTime::ATOM) : null;
        }

        /**
         * @return \DateTime
         */
        public function getDateTime()
        {
                if ($this->DateTime == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->DateTime);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $DateTime
         * @return \UUP\Exchange\Types\AbsoluteDateTransitionType
         */
        public function setDateTime(\DateTime $DateTime)
        {
                $this->DateTime = $DateTime->format(\DateTime::ATOM);
                return $this;
        }

}
