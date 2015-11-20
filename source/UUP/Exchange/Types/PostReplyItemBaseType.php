<?php

namespace UUP\Exchange\Types;

class PostReplyItemBaseType
{

        /**
         * @var string $Subject
         */
        protected $Subject = null;
        /**
         * @var BodyType $Body
         */
        protected $Body = null;
        /**
         * @var ItemIdType $ReferenceItemId
         */
        protected $ReferenceItemId = null;
        /**
         * @var string $ObjectName
         */
        protected $ObjectName = null;

        /**
         * @param string $ObjectName
         */
        public function __construct($ObjectName = null)
        {
                $this->ObjectName = $ObjectName;
        }

        /**
         * @return string
         */
        public function getSubject()
        {
                return $this->Subject;
        }

        /**
         * @param string $Subject
         * @return \UUP\Exchange\Types\PostReplyItemBaseType
         */
        public function setSubject($Subject)
        {
                $this->Subject = $Subject;
                return $this;
        }

        /**
         * @return BodyType
         */
        public function getBody()
        {
                return $this->Body;
        }

        /**
         * @param BodyType $Body
         * @return \UUP\Exchange\Types\PostReplyItemBaseType
         */
        public function setBody($Body)
        {
                $this->Body = $Body;
                return $this;
        }

        /**
         * @return ItemIdType
         */
        public function getReferenceItemId()
        {
                return $this->ReferenceItemId;
        }

        /**
         * @param ItemIdType $ReferenceItemId
         * @return \UUP\Exchange\Types\PostReplyItemBaseType
         */
        public function setReferenceItemId($ReferenceItemId)
        {
                $this->ReferenceItemId = $ReferenceItemId;
                return $this;
        }

        /**
         * @return string
         */
        public function getObjectName()
        {
                return $this->ObjectName;
        }

        /**
         * @param string $ObjectName
         * @return \UUP\Exchange\Types\PostReplyItemBaseType
         */
        public function setObjectName($ObjectName)
        {
                $this->ObjectName = $ObjectName;
                return $this;
        }

}
