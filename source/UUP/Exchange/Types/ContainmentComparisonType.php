<?php

namespace UUP\Exchange\Types;

class ContainmentComparisonType
{

        const __default = 'Exact';
        const Exact = 'Exact';
        const IgnoreCase = 'IgnoreCase';
        const IgnoreNonSpacingCharacters = 'IgnoreNonSpacingCharacters';
        const Loose = 'Loose';
        const IgnoreCaseAndNonSpacingCharacters = 'IgnoreCaseAndNonSpacingCharacters';
        const LooseAndIgnoreCase = 'LooseAndIgnoreCase';
        const LooseAndIgnoreNonSpace = 'LooseAndIgnoreNonSpace';
        const LooseAndIgnoreCaseAndIgnoreNonSpace = 'LooseAndIgnoreCaseAndIgnoreNonSpace';

}
