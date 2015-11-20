<?php

namespace UUP\Exchange\Types;

class ConflictResolutionType
{

        const __default = 'NeverOverwrite';
        const NeverOverwrite = 'NeverOverwrite';
        const AutoResolve = 'AutoResolve';
        const AlwaysOverwrite = 'AlwaysOverwrite';

}
