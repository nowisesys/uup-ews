<?php

namespace UUP\Exchange\Types;

class CalendarItemUpdateOperationType
{

        const __default = 'SendToNone';
        const SendToNone = 'SendToNone';
        const SendOnlyToAll = 'SendOnlyToAll';
        const SendOnlyToChanged = 'SendOnlyToChanged';
        const SendToAllAndSaveCopy = 'SendToAllAndSaveCopy';
        const SendToChangedAndSaveCopy = 'SendToChangedAndSaveCopy';

}
