<?php

namespace UUP\Exchange\Types;

class CalendarPermissionLevelType
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
        const FreeBusyTimeOnly = 'FreeBusyTimeOnly';
        const FreeBusyTimeAndSubjectAndLocation = 'FreeBusyTimeAndSubjectAndLocation';
        const Custom = 'Custom';

}
