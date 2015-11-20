<?php

namespace UUP\Exchange\Types;

class RuleValidationErrorCodeType
{

        const __default = 'ADOperationFailure';
        const ADOperationFailure = 'ADOperationFailure';
        const ConnectedAccountNotFound = 'ConnectedAccountNotFound';
        const CreateWithRuleId = 'CreateWithRuleId';
        const EmptyValueFound = 'EmptyValueFound';
        const DuplicatedPriority = 'DuplicatedPriority';
        const DuplicatedOperationOnTheSameRule = 'DuplicatedOperationOnTheSameRule';
        const FolderDoesNotExist = 'FolderDoesNotExist';
        const InvalidAddress = 'InvalidAddress';
        const InvalidDateRange = 'InvalidDateRange';
        const InvalidFolderId = 'InvalidFolderId';
        const InvalidSizeRange = 'InvalidSizeRange';
        const InvalidValue = 'InvalidValue';
        const MessageClassificationNotFound = 'MessageClassificationNotFound';
        const MissingAction = 'MissingAction';
        const MissingParameter = 'MissingParameter';
        const MissingRangeValue = 'MissingRangeValue';
        const NotSettable = 'NotSettable';
        const RecipientDoesNotExist = 'RecipientDoesNotExist';
        const RuleNotFound = 'RuleNotFound';
        const SizeLessThanZero = 'SizeLessThanZero';
        const StringValueTooBig = 'StringValueTooBig';
        const UnsupportedAddress = 'UnsupportedAddress';
        const UnexpectedError = 'UnexpectedError';
        const UnsupportedRule = 'UnsupportedRule';

}
