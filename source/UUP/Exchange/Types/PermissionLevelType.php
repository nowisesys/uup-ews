<?php

namespace UUP\Exchange\Types;

class PermissionLevelType
{

        const __default = 'None';
        const None = 'None';
        const Owner = 'Owner';
        const PublishingEditor = 'PublishingEditor';
        const Editor = 'Editor';
        const PublishingAuthor = 'PublishingAuthor';
        const Author = 'Author';
        const NoneditingAuthor = 'NoneditingAuthor';
        const Reviewer = 'Reviewer';
        const Contributor = 'Contributor';
        const Custom = 'Custom';

}
