<?php

namespace UUP\Exchange\Types;

class DisposalType
{

        const __default = 'HardDelete';
        const HardDelete = 'HardDelete';
        const SoftDelete = 'SoftDelete';
        const MoveToDeletedItems = 'MoveToDeletedItems';

}
