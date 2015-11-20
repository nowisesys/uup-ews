<?php

namespace UUP\Exchange\Types;

class TaskDelegateStateType
{

        const __default = 'NoMatch';
        const NoMatch = 'NoMatch';
        const OwnNew = 'OwnNew';
        const Owned = 'Owned';
        const Accepted = 'Accepted';
        const Declined = 'Declined';
        const Max = 'Max';

}
