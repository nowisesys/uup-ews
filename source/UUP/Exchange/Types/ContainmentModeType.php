<?php

namespace UUP\Exchange\Types;

class ContainmentModeType
{

        const __default = 'FullString';
        const FullString = 'FullString';
        const Prefixed = 'Prefixed';
        const Substring = 'Substring';
        const PrefixOnWords = 'PrefixOnWords';
        const ExactPhrase = 'ExactPhrase';

}
