<?php

namespace UUP\Exchange\Types;

class TaskStatusType
{

        const __default = 'NotStarted';
        const NotStarted = 'NotStarted';
        const InProgress = 'InProgress';
        const Completed = 'Completed';
        const WaitingOnOthers = 'WaitingOnOthers';
        const Deferred = 'Deferred';

}
