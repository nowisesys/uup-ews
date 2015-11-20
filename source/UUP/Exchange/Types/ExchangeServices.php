<?php

namespace UUP\Exchange\Types;

class ExchangeServices extends \SoapClient
{

        /**
         * @var array $classmap The defined classes
         */
        private static $classmap = array(
                'MailboxCultureType'                                 => 'UUP\\Exchange\\Types\\MailboxCultureType',
                'SidAndAttributesType'                               => 'UUP\\Exchange\\Types\\SidAndAttributesType',
                'NonEmptyArrayOfGroupIdentifiersType'                => 'UUP\\Exchange\\Types\\NonEmptyArrayOfGroupIdentifiersType',
                'NonEmptyArrayOfRestrictedGroupIdentifiersType'      => 'UUP\\Exchange\\Types\\NonEmptyArrayOfRestrictedGroupIdentifiersType',
                'SerializedSecurityContextType'                      => 'UUP\\Exchange\\Types\\SerializedSecurityContextType',
                'ConnectingSIDType'                                  => 'UUP\\Exchange\\Types\\ConnectingSIDType',
                'ExchangeImpersonationType'                          => 'UUP\\Exchange\\Types\\ExchangeImpersonationType',
                'OpenAsAdminOrSystemServiceType'                     => 'UUP\\Exchange\\Types\\OpenAsAdminOrSystemServiceType',
                'ProxySecurityContextType'                           => 'UUP\\Exchange\\Types\\ProxySecurityContextType',
                'ServerVersionInfo'                                  => 'UUP\\Exchange\\Types\\ServerVersionInfo',
                'RequestServerVersion'                               => 'UUP\\Exchange\\Types\\RequestServerVersion',
                'BaseEmailAddressType'                               => 'UUP\\Exchange\\Types\\BaseEmailAddressType',
                'EmailAddressType'                                   => 'UUP\\Exchange\\Types\\EmailAddressType',
                'ArrayOfEmailAddressesType'                          => 'UUP\\Exchange\\Types\\ArrayOfEmailAddressesType',
                'DirectoryEntryType'                                 => 'UUP\\Exchange\\Types\\DirectoryEntryType',
                'RoomType'                                           => 'UUP\\Exchange\\Types\\RoomType',
                'ArrayOfRoomsType'                                   => 'UUP\\Exchange\\Types\\ArrayOfRoomsType',
                'ArrayOfRecipientsType'                              => 'UUP\\Exchange\\Types\\ArrayOfRecipientsType',
                'SingleRecipientType'                                => 'UUP\\Exchange\\Types\\SingleRecipientType',
                'BasePathToElementType'                              => 'UUP\\Exchange\\Types\\BasePathToElementType',
                'PathToUnindexedFieldType'                           => 'UUP\\Exchange\\Types\\PathToUnindexedFieldType',
                'PathToIndexedFieldType'                             => 'UUP\\Exchange\\Types\\PathToIndexedFieldType',
                'PathToExceptionFieldType'                           => 'UUP\\Exchange\\Types\\PathToExceptionFieldType',
                'PathToExtendedFieldType'                            => 'UUP\\Exchange\\Types\\PathToExtendedFieldType',
                'NonEmptyArrayOfPathsToElementType'                  => 'UUP\\Exchange\\Types\\NonEmptyArrayOfPathsToElementType',
                'NonEmptyArrayOfPropertyValuesType'                  => 'UUP\\Exchange\\Types\\NonEmptyArrayOfPropertyValuesType',
                'ExtendedPropertyType'                               => 'UUP\\Exchange\\Types\\ExtendedPropertyType',
                'FolderResponseShapeType'                            => 'UUP\\Exchange\\Types\\FolderResponseShapeType',
                'ItemResponseShapeType'                              => 'UUP\\Exchange\\Types\\ItemResponseShapeType',
                'AttachmentResponseShapeType'                        => 'UUP\\Exchange\\Types\\AttachmentResponseShapeType',
                'ChangeDescriptionType'                              => 'UUP\\Exchange\\Types\\ChangeDescriptionType',
                'ItemChangeDescriptionType'                          => 'UUP\\Exchange\\Types\\ItemChangeDescriptionType',
                'FolderChangeDescriptionType'                        => 'UUP\\Exchange\\Types\\FolderChangeDescriptionType',
                'SetItemFieldType'                                   => 'UUP\\Exchange\\Types\\SetItemFieldType',
                'SetFolderFieldType'                                 => 'UUP\\Exchange\\Types\\SetFolderFieldType',
                'DeleteItemFieldType'                                => 'UUP\\Exchange\\Types\\DeleteItemFieldType',
                'DeleteFolderFieldType'                              => 'UUP\\Exchange\\Types\\DeleteFolderFieldType',
                'AppendToItemFieldType'                              => 'UUP\\Exchange\\Types\\AppendToItemFieldType',
                'AppendToFolderFieldType'                            => 'UUP\\Exchange\\Types\\AppendToFolderFieldType',
                'NonEmptyArrayOfItemChangeDescriptionsType'          => 'UUP\\Exchange\\Types\\NonEmptyArrayOfItemChangeDescriptionsType',
                'NonEmptyArrayOfFolderChangeDescriptionsType'        => 'UUP\\Exchange\\Types\\NonEmptyArrayOfFolderChangeDescriptionsType',
                'ItemChangeType'                                     => 'UUP\\Exchange\\Types\\ItemChangeType',
                'NonEmptyArrayOfItemChangesType'                     => 'UUP\\Exchange\\Types\\NonEmptyArrayOfItemChangesType',
                'InternetHeaderType'                                 => 'UUP\\Exchange\\Types\\InternetHeaderType',
                'NonEmptyArrayOfInternetHeadersType'                 => 'UUP\\Exchange\\Types\\NonEmptyArrayOfInternetHeadersType',
                'RequestAttachmentIdType'                            => 'UUP\\Exchange\\Types\\RequestAttachmentIdType',
                'AttachmentIdType'                                   => 'UUP\\Exchange\\Types\\AttachmentIdType',
                'RootItemIdType'                                     => 'UUP\\Exchange\\Types\\RootItemIdType',
                'NonEmptyArrayOfRequestAttachmentIdsType'            => 'UUP\\Exchange\\Types\\NonEmptyArrayOfRequestAttachmentIdsType',
                'AttachmentType'                                     => 'UUP\\Exchange\\Types\\AttachmentType',
                'ItemAttachmentType'                                 => 'UUP\\Exchange\\Types\\ItemAttachmentType',
                'SyncFolderItemsCreateOrUpdateType'                  => 'UUP\\Exchange\\Types\\SyncFolderItemsCreateOrUpdateType',
                'FileAttachmentType'                                 => 'UUP\\Exchange\\Types\\FileAttachmentType',
                'ArrayOfAttachmentsType'                             => 'UUP\\Exchange\\Types\\ArrayOfAttachmentsType',
                'NonEmptyArrayOfAttachmentsType'                     => 'UUP\\Exchange\\Types\\NonEmptyArrayOfAttachmentsType',
                'BodyType'                                           => 'UUP\\Exchange\\Types\\BodyType',
                'BaseFolderIdType'                                   => 'UUP\\Exchange\\Types\\BaseFolderIdType',
                'DistinguishedFolderIdType'                          => 'UUP\\Exchange\\Types\\DistinguishedFolderIdType',
                'FolderIdType'                                       => 'UUP\\Exchange\\Types\\FolderIdType',
                'NonEmptyArrayOfBaseFolderIdsType'                   => 'UUP\\Exchange\\Types\\NonEmptyArrayOfBaseFolderIdsType',
                'TargetFolderIdType'                                 => 'UUP\\Exchange\\Types\\TargetFolderIdType',
                'NonEmptyArrayOfUploadItemsType'                     => 'UUP\\Exchange\\Types\\NonEmptyArrayOfUploadItemsType',
                'UploadItemType'                                     => 'UUP\\Exchange\\Types\\UploadItemType',
                'FindFolderParentType'                               => 'UUP\\Exchange\\Types\\FindFolderParentType',
                'BaseFolderType'                                     => 'UUP\\Exchange\\Types\\BaseFolderType',
                'ManagedFolderInformationType'                       => 'UUP\\Exchange\\Types\\ManagedFolderInformationType',
                'FolderType'                                         => 'UUP\\Exchange\\Types\\FolderType',
                'CalendarFolderType'                                 => 'UUP\\Exchange\\Types\\CalendarFolderType',
                'ContactsFolderType'                                 => 'UUP\\Exchange\\Types\\ContactsFolderType',
                'SearchFolderType'                                   => 'UUP\\Exchange\\Types\\SearchFolderType',
                'TasksFolderType'                                    => 'UUP\\Exchange\\Types\\TasksFolderType',
                'NonEmptyArrayOfFoldersType'                         => 'UUP\\Exchange\\Types\\NonEmptyArrayOfFoldersType',
                'ArrayOfFoldersType'                                 => 'UUP\\Exchange\\Types\\ArrayOfFoldersType',
                'BaseItemIdType'                                     => 'UUP\\Exchange\\Types\\BaseItemIdType',
                'ItemIdType'                                         => 'UUP\\Exchange\\Types\\ItemIdType',
                'NonEmptyArrayOfBaseItemIdsType'                     => 'UUP\\Exchange\\Types\\NonEmptyArrayOfBaseItemIdsType',
                'ArrayOfBaseItemIdsType'                             => 'UUP\\Exchange\\Types\\ArrayOfBaseItemIdsType',
                'NonEmptyArrayOfItemIdsType'                         => 'UUP\\Exchange\\Types\\NonEmptyArrayOfItemIdsType',
                'ResponseObjectCoreType'                             => 'UUP\\Exchange\\Types\\ResponseObjectCoreType',
                'ResponseObjectType'                                 => 'UUP\\Exchange\\Types\\ResponseObjectType',
                'NonEmptyArrayOfResponseObjectsType'                 => 'UUP\\Exchange\\Types\\NonEmptyArrayOfResponseObjectsType',
                'FolderChangeType'                                   => 'UUP\\Exchange\\Types\\FolderChangeType',
                'NonEmptyArrayOfFolderChangesType'                   => 'UUP\\Exchange\\Types\\NonEmptyArrayOfFolderChangesType',
                'WellKnownResponseObjectType'                        => 'UUP\\Exchange\\Types\\WellKnownResponseObjectType',
                'SmartResponseBaseType'                              => 'UUP\\Exchange\\Types\\SmartResponseBaseType',
                'SmartResponseType'                                  => 'UUP\\Exchange\\Types\\SmartResponseType',
                'ReplyToItemType'                                    => 'UUP\\Exchange\\Types\\ReplyToItemType',
                'ReplyAllToItemType'                                 => 'UUP\\Exchange\\Types\\ReplyAllToItemType',
                'ForwardItemType'                                    => 'UUP\\Exchange\\Types\\ForwardItemType',
                'CancelCalendarItemType'                             => 'UUP\\Exchange\\Types\\CancelCalendarItemType',
                'ReferenceItemResponseType'                          => 'UUP\\Exchange\\Types\\ReferenceItemResponseType',
                'SuppressReadReceiptType'                            => 'UUP\\Exchange\\Types\\SuppressReadReceiptType',
                'FindItemParentType'                                 => 'UUP\\Exchange\\Types\\FindItemParentType',
                'ItemType'                                           => 'UUP\\Exchange\\Types\\ItemType',
                'ArrayOfItemClassType'                               => 'UUP\\Exchange\\Types\\ArrayOfItemClassType',
                'ConversationActionType'                             => 'UUP\\Exchange\\Types\\ConversationActionType',
                'NonEmptyArrayOfApplyConversationActionType'         => 'UUP\\Exchange\\Types\\NonEmptyArrayOfApplyConversationActionType',
                'ConversationType'                                   => 'UUP\\Exchange\\Types\\ConversationType',
                'ArrayOfConversationsType'                           => 'UUP\\Exchange\\Types\\ArrayOfConversationsType',
                'ArrayOfStringsType'                                 => 'UUP\\Exchange\\Types\\ArrayOfStringsType',
                'ArrayOfRealItemsType'                               => 'UUP\\Exchange\\Types\\ArrayOfRealItemsType',
                'NonEmptyArrayOfAllItemsType'                        => 'UUP\\Exchange\\Types\\NonEmptyArrayOfAllItemsType',
                'AcceptItemType'                                     => 'UUP\\Exchange\\Types\\AcceptItemType',
                'TentativelyAcceptItemType'                          => 'UUP\\Exchange\\Types\\TentativelyAcceptItemType',
                'DeclineItemType'                                    => 'UUP\\Exchange\\Types\\DeclineItemType',
                'RemoveItemType'                                     => 'UUP\\Exchange\\Types\\RemoveItemType',
                'PostReplyItemBaseType'                              => 'UUP\\Exchange\\Types\\PostReplyItemBaseType',
                'PostReplyItemType'                                  => 'UUP\\Exchange\\Types\\PostReplyItemType',
                'MimeContentType'                                    => 'UUP\\Exchange\\Types\\MimeContentType',
                'MessageType'                                        => 'UUP\\Exchange\\Types\\MessageType',
                'TaskType'                                           => 'UUP\\Exchange\\Types\\TaskType',
                'PostItemType'                                       => 'UUP\\Exchange\\Types\\PostItemType',
                'BasePagingType'                                     => 'UUP\\Exchange\\Types\\BasePagingType',
                'IndexedPageViewType'                                => 'UUP\\Exchange\\Types\\IndexedPageViewType',
                'FractionalPageViewType'                             => 'UUP\\Exchange\\Types\\FractionalPageViewType',
                'CalendarViewType'                                   => 'UUP\\Exchange\\Types\\CalendarViewType',
                'ContactsViewType'                                   => 'UUP\\Exchange\\Types\\ContactsViewType',
                'ResolutionType'                                     => 'UUP\\Exchange\\Types\\ResolutionType',
                'ArrayOfResolutionType'                              => 'UUP\\Exchange\\Types\\ArrayOfResolutionType',
                'ArrayOfDLExpansionType'                             => 'UUP\\Exchange\\Types\\ArrayOfDLExpansionType',
                'NonEmptyArrayOfTimeZoneIdType'                      => 'UUP\\Exchange\\Types\\NonEmptyArrayOfTimeZoneIdType',
                'ArrayOfTimeZoneDefinitionType'                      => 'UUP\\Exchange\\Types\\ArrayOfTimeZoneDefinitionType',
                'AttendeeType'                                       => 'UUP\\Exchange\\Types\\AttendeeType',
                'NonEmptyArrayOfAttendeesType'                       => 'UUP\\Exchange\\Types\\NonEmptyArrayOfAttendeesType',
                'OccurrenceItemIdType'                               => 'UUP\\Exchange\\Types\\OccurrenceItemIdType',
                'RecurringMasterItemIdType'                          => 'UUP\\Exchange\\Types\\RecurringMasterItemIdType',
                'RecurrencePatternBaseType'                          => 'UUP\\Exchange\\Types\\RecurrencePatternBaseType',
                'IntervalRecurrencePatternBaseType'                  => 'UUP\\Exchange\\Types\\IntervalRecurrencePatternBaseType',
                'RegeneratingPatternBaseType'                        => 'UUP\\Exchange\\Types\\RegeneratingPatternBaseType',
                'DailyRegeneratingPatternType'                       => 'UUP\\Exchange\\Types\\DailyRegeneratingPatternType',
                'WeeklyRegeneratingPatternType'                      => 'UUP\\Exchange\\Types\\WeeklyRegeneratingPatternType',
                'MonthlyRegeneratingPatternType'                     => 'UUP\\Exchange\\Types\\MonthlyRegeneratingPatternType',
                'YearlyRegeneratingPatternType'                      => 'UUP\\Exchange\\Types\\YearlyRegeneratingPatternType',
                'RelativeYearlyRecurrencePatternType'                => 'UUP\\Exchange\\Types\\RelativeYearlyRecurrencePatternType',
                'AbsoluteYearlyRecurrencePatternType'                => 'UUP\\Exchange\\Types\\AbsoluteYearlyRecurrencePatternType',
                'RelativeMonthlyRecurrencePatternType'               => 'UUP\\Exchange\\Types\\RelativeMonthlyRecurrencePatternType',
                'AbsoluteMonthlyRecurrencePatternType'               => 'UUP\\Exchange\\Types\\AbsoluteMonthlyRecurrencePatternType',
                'WeeklyRecurrencePatternType'                        => 'UUP\\Exchange\\Types\\WeeklyRecurrencePatternType',
                'DailyRecurrencePatternType'                         => 'UUP\\Exchange\\Types\\DailyRecurrencePatternType',
                'TimeChangeType'                                     => 'UUP\\Exchange\\Types\\TimeChangeType',
                'TimeZoneType'                                       => 'UUP\\Exchange\\Types\\TimeZoneType',
                'TimeZoneContextType'                                => 'UUP\\Exchange\\Types\\TimeZoneContextType',
                'TransitionTargetType'                               => 'UUP\\Exchange\\Types\\TransitionTargetType',
                'TransitionType'                                     => 'UUP\\Exchange\\Types\\TransitionType',
                'AbsoluteDateTransitionType'                         => 'UUP\\Exchange\\Types\\AbsoluteDateTransitionType',
                'RecurringTimeTransitionType'                        => 'UUP\\Exchange\\Types\\RecurringTimeTransitionType',
                'RecurringDateTransitionType'                        => 'UUP\\Exchange\\Types\\RecurringDateTransitionType',
                'RecurringDayTransitionType'                         => 'UUP\\Exchange\\Types\\RecurringDayTransitionType',
                'TimeZoneDefinitionType'                             => 'UUP\\Exchange\\Types\\TimeZoneDefinitionType',
                'NonEmptyArrayOfPeriodsType'                         => 'UUP\\Exchange\\Types\\NonEmptyArrayOfPeriodsType',
                'PeriodType'                                         => 'UUP\\Exchange\\Types\\PeriodType',
                'ArrayOfTransitionsGroupsType'                       => 'UUP\\Exchange\\Types\\ArrayOfTransitionsGroupsType',
                'ArrayOfTransitionsType'                             => 'UUP\\Exchange\\Types\\ArrayOfTransitionsType',
                'RecurrenceRangeBaseType'                            => 'UUP\\Exchange\\Types\\RecurrenceRangeBaseType',
                'NoEndRecurrenceRangeType'                           => 'UUP\\Exchange\\Types\\NoEndRecurrenceRangeType',
                'EndDateRecurrenceRangeType'                         => 'UUP\\Exchange\\Types\\EndDateRecurrenceRangeType',
                'NumberedRecurrenceRangeType'                        => 'UUP\\Exchange\\Types\\NumberedRecurrenceRangeType',
                'RecurrenceType'                                     => 'UUP\\Exchange\\Types\\RecurrenceType',
                'TaskRecurrenceType'                                 => 'UUP\\Exchange\\Types\\TaskRecurrenceType',
                'OccurrenceInfoType'                                 => 'UUP\\Exchange\\Types\\OccurrenceInfoType',
                'NonEmptyArrayOfOccurrenceInfoType'                  => 'UUP\\Exchange\\Types\\NonEmptyArrayOfOccurrenceInfoType',
                'DeletedOccurrenceInfoType'                          => 'UUP\\Exchange\\Types\\DeletedOccurrenceInfoType',
                'NonEmptyArrayOfDeletedOccurrencesType'              => 'UUP\\Exchange\\Types\\NonEmptyArrayOfDeletedOccurrencesType',
                'CalendarItemType'                                   => 'UUP\\Exchange\\Types\\CalendarItemType',
                'MeetingMessageType'                                 => 'UUP\\Exchange\\Types\\MeetingMessageType',
                'MeetingRequestMessageType'                          => 'UUP\\Exchange\\Types\\MeetingRequestMessageType',
                'MeetingResponseMessageType'                         => 'UUP\\Exchange\\Types\\MeetingResponseMessageType',
                'MeetingCancellationMessageType'                     => 'UUP\\Exchange\\Types\\MeetingCancellationMessageType',
                'CompleteNameType'                                   => 'UUP\\Exchange\\Types\\CompleteNameType',
                'ImAddressDictionaryEntryType'                       => 'UUP\\Exchange\\Types\\ImAddressDictionaryEntryType',
                'EmailAddressDictionaryEntryType'                    => 'UUP\\Exchange\\Types\\EmailAddressDictionaryEntryType',
                'PhoneNumberDictionaryEntryType'                     => 'UUP\\Exchange\\Types\\PhoneNumberDictionaryEntryType',
                'PhysicalAddressDictionaryEntryType'                 => 'UUP\\Exchange\\Types\\PhysicalAddressDictionaryEntryType',
                'ImAddressDictionaryType'                            => 'UUP\\Exchange\\Types\\ImAddressDictionaryType',
                'EmailAddressDictionaryType'                         => 'UUP\\Exchange\\Types\\EmailAddressDictionaryType',
                'PhoneNumberDictionaryType'                          => 'UUP\\Exchange\\Types\\PhoneNumberDictionaryType',
                'PhysicalAddressDictionaryType'                      => 'UUP\\Exchange\\Types\\PhysicalAddressDictionaryType',
                'MembersListType'                                    => 'UUP\\Exchange\\Types\\MembersListType',
                'MemberType'                                         => 'UUP\\Exchange\\Types\\MemberType',
                'ContactItemType'                                    => 'UUP\\Exchange\\Types\\ContactItemType',
                'ArrayOfBinaryType'                                  => 'UUP\\Exchange\\Types\\ArrayOfBinaryType',
                'DistributionListType'                               => 'UUP\\Exchange\\Types\\DistributionListType',
                'SearchParametersType'                               => 'UUP\\Exchange\\Types\\SearchParametersType',
                'ConstantValueType'                                  => 'UUP\\Exchange\\Types\\ConstantValueType',
                'SearchExpressionType'                               => 'UUP\\Exchange\\Types\\SearchExpressionType',
                'AggregateOnType'                                    => 'UUP\\Exchange\\Types\\AggregateOnType',
                'BaseGroupByType'                                    => 'UUP\\Exchange\\Types\\BaseGroupByType',
                'GroupByType'                                        => 'UUP\\Exchange\\Types\\GroupByType',
                'DistinguishedGroupByType'                           => 'UUP\\Exchange\\Types\\DistinguishedGroupByType',
                'GroupedItemsType'                                   => 'UUP\\Exchange\\Types\\GroupedItemsType',
                'ArrayOfGroupedItemsType'                            => 'UUP\\Exchange\\Types\\ArrayOfGroupedItemsType',
                'ExistsType'                                         => 'UUP\\Exchange\\Types\\ExistsType',
                'FieldURIOrConstantType'                             => 'UUP\\Exchange\\Types\\FieldURIOrConstantType',
                'TwoOperandExpressionType'                           => 'UUP\\Exchange\\Types\\TwoOperandExpressionType',
                'ExcludesValueType'                                  => 'UUP\\Exchange\\Types\\ExcludesValueType',
                'ExcludesType'                                       => 'UUP\\Exchange\\Types\\ExcludesType',
                'IsEqualToType'                                      => 'UUP\\Exchange\\Types\\IsEqualToType',
                'IsNotEqualToType'                                   => 'UUP\\Exchange\\Types\\IsNotEqualToType',
                'IsGreaterThanType'                                  => 'UUP\\Exchange\\Types\\IsGreaterThanType',
                'IsGreaterThanOrEqualToType'                         => 'UUP\\Exchange\\Types\\IsGreaterThanOrEqualToType',
                'IsLessThanType'                                     => 'UUP\\Exchange\\Types\\IsLessThanType',
                'IsLessThanOrEqualToType'                            => 'UUP\\Exchange\\Types\\IsLessThanOrEqualToType',
                'ContainsExpressionType'                             => 'UUP\\Exchange\\Types\\ContainsExpressionType',
                'NotType'                                            => 'UUP\\Exchange\\Types\\NotType',
                'MultipleOperandBooleanExpressionType'               => 'UUP\\Exchange\\Types\\MultipleOperandBooleanExpressionType',
                'AndType'                                            => 'UUP\\Exchange\\Types\\AndType',
                'OrType'                                             => 'UUP\\Exchange\\Types\\OrType',
                'RestrictionType'                                    => 'UUP\\Exchange\\Types\\RestrictionType',
                'FieldOrderType'                                     => 'UUP\\Exchange\\Types\\FieldOrderType',
                'NonEmptyArrayOfFieldOrdersType'                     => 'UUP\\Exchange\\Types\\NonEmptyArrayOfFieldOrdersType',
                'NonEmptyArrayOfFolderNamesType'                     => 'UUP\\Exchange\\Types\\NonEmptyArrayOfFolderNamesType',
                'BaseNotificationEventType'                          => 'UUP\\Exchange\\Types\\BaseNotificationEventType',
                'BaseObjectChangedEventType'                         => 'UUP\\Exchange\\Types\\BaseObjectChangedEventType',
                'ModifiedEventType'                                  => 'UUP\\Exchange\\Types\\ModifiedEventType',
                'MovedCopiedEventType'                               => 'UUP\\Exchange\\Types\\MovedCopiedEventType',
                'NotificationType'                                   => 'UUP\\Exchange\\Types\\NotificationType',
                'NonEmptyArrayOfNotificationEventTypesType'          => 'UUP\\Exchange\\Types\\NonEmptyArrayOfNotificationEventTypesType',
                'BaseSubscriptionRequestType'                        => 'UUP\\Exchange\\Types\\BaseSubscriptionRequestType',
                'PushSubscriptionRequestType'                        => 'UUP\\Exchange\\Types\\PushSubscriptionRequestType',
                'PullSubscriptionRequestType'                        => 'UUP\\Exchange\\Types\\PullSubscriptionRequestType',
                'StreamingSubscriptionRequestType'                   => 'UUP\\Exchange\\Types\\StreamingSubscriptionRequestType',
                'NonEmptyArrayOfSubscriptionIdsType'                 => 'UUP\\Exchange\\Types\\NonEmptyArrayOfSubscriptionIdsType',
                'NonEmptyArrayOfNotificationsType'                   => 'UUP\\Exchange\\Types\\NonEmptyArrayOfNotificationsType',
                'SyncFolderItemsDeleteType'                          => 'UUP\\Exchange\\Types\\SyncFolderItemsDeleteType',
                'SyncFolderItemsReadFlagType'                        => 'UUP\\Exchange\\Types\\SyncFolderItemsReadFlagType',
                'SyncFolderItemsChangesType'                         => 'UUP\\Exchange\\Types\\SyncFolderItemsChangesType',
                'SyncFolderHierarchyCreateOrUpdateType'              => 'UUP\\Exchange\\Types\\SyncFolderHierarchyCreateOrUpdateType',
                'SyncFolderHierarchyDeleteType'                      => 'UUP\\Exchange\\Types\\SyncFolderHierarchyDeleteType',
                'SyncFolderHierarchyChangesType'                     => 'UUP\\Exchange\\Types\\SyncFolderHierarchyChangesType',
                'RequestTypeHeader'                                  => 'UUP\\Exchange\\Types\\RequestTypeHeader',
                'CalendarEventDetails'                               => 'UUP\\Exchange\\Types\\CalendarEventDetails',
                'CalendarEvent'                                      => 'UUP\\Exchange\\Types\\CalendarEvent',
                'ArrayOfCalendarEvent'                               => 'UUP\\Exchange\\Types\\ArrayOfCalendarEvent',
                'Duration'                                           => 'UUP\\Exchange\\Types\\Duration',
                'EmailAddress'                                       => 'UUP\\Exchange\\Types\\EmailAddress',
                'FreeBusyViewOptionsType'                            => 'UUP\\Exchange\\Types\\FreeBusyViewOptionsType',
                'WorkingPeriod'                                      => 'UUP\\Exchange\\Types\\WorkingPeriod',
                'ArrayOfWorkingPeriod'                               => 'UUP\\Exchange\\Types\\ArrayOfWorkingPeriod',
                'SerializableTimeZoneTime'                           => 'UUP\\Exchange\\Types\\SerializableTimeZoneTime',
                'SerializableTimeZone'                               => 'UUP\\Exchange\\Types\\SerializableTimeZone',
                'WorkingHours'                                       => 'UUP\\Exchange\\Types\\WorkingHours',
                'FreeBusyView'                                       => 'UUP\\Exchange\\Types\\FreeBusyView',
                'MailboxData'                                        => 'UUP\\Exchange\\Types\\MailboxData',
                'ArrayOfMailboxData'                                 => 'UUP\\Exchange\\Types\\ArrayOfMailboxData',
                'SuggestionsViewOptionsType'                         => 'UUP\\Exchange\\Types\\SuggestionsViewOptionsType',
                'ArrayOfAttendeeConflictData'                        => 'UUP\\Exchange\\Types\\ArrayOfAttendeeConflictData',
                'AttendeeConflictData'                               => 'UUP\\Exchange\\Types\\AttendeeConflictData',
                'UnknownAttendeeConflictData'                        => 'UUP\\Exchange\\Types\\UnknownAttendeeConflictData',
                'TooBigGroupAttendeeConflictData'                    => 'UUP\\Exchange\\Types\\TooBigGroupAttendeeConflictData',
                'IndividualAttendeeConflictData'                     => 'UUP\\Exchange\\Types\\IndividualAttendeeConflictData',
                'GroupAttendeeConflictData'                          => 'UUP\\Exchange\\Types\\GroupAttendeeConflictData',
                'Suggestion'                                         => 'UUP\\Exchange\\Types\\Suggestion',
                'ArrayOfSuggestion'                                  => 'UUP\\Exchange\\Types\\ArrayOfSuggestion',
                'SuggestionDayResult'                                => 'UUP\\Exchange\\Types\\SuggestionDayResult',
                'ArrayOfSuggestionDayResult'                         => 'UUP\\Exchange\\Types\\ArrayOfSuggestionDayResult',
                'ReplyBody'                                          => 'UUP\\Exchange\\Types\\ReplyBody',
                'UserOofSettings'                                    => 'UUP\\Exchange\\Types\\UserOofSettings',
                'Value'                                              => 'UUP\\Exchange\\Types\\Value',
                'AlternateIdBaseType'                                => 'UUP\\Exchange\\Types\\AlternateIdBaseType',
                'AlternateIdType'                                    => 'UUP\\Exchange\\Types\\AlternateIdType',
                'AlternatePublicFolderIdType'                        => 'UUP\\Exchange\\Types\\AlternatePublicFolderIdType',
                'AlternatePublicFolderItemIdType'                    => 'UUP\\Exchange\\Types\\AlternatePublicFolderItemIdType',
                'NonEmptyArrayOfAlternateIdsType'                    => 'UUP\\Exchange\\Types\\NonEmptyArrayOfAlternateIdsType',
                'UserIdType'                                         => 'UUP\\Exchange\\Types\\UserIdType',
                'ArrayOfPermissionsType'                             => 'UUP\\Exchange\\Types\\ArrayOfPermissionsType',
                'ArrayOfCalendarPermissionsType'                     => 'UUP\\Exchange\\Types\\ArrayOfCalendarPermissionsType',
                'ArrayOfUnknownEntriesType'                          => 'UUP\\Exchange\\Types\\ArrayOfUnknownEntriesType',
                'BasePermissionType'                                 => 'UUP\\Exchange\\Types\\BasePermissionType',
                'PermissionType'                                     => 'UUP\\Exchange\\Types\\PermissionType',
                'CalendarPermissionType'                             => 'UUP\\Exchange\\Types\\CalendarPermissionType',
                'PermissionSetType'                                  => 'UUP\\Exchange\\Types\\PermissionSetType',
                'CalendarPermissionSetType'                          => 'UUP\\Exchange\\Types\\CalendarPermissionSetType',
                'EffectiveRightsType'                                => 'UUP\\Exchange\\Types\\EffectiveRightsType',
                'ArrayOfDelegateUserType'                            => 'UUP\\Exchange\\Types\\ArrayOfDelegateUserType',
                'ArrayOfUserIdType'                                  => 'UUP\\Exchange\\Types\\ArrayOfUserIdType',
                'DelegateUserType'                                   => 'UUP\\Exchange\\Types\\DelegateUserType',
                'DelegatePermissionsType'                            => 'UUP\\Exchange\\Types\\DelegatePermissionsType',
                'ConflictResultsType'                                => 'UUP\\Exchange\\Types\\ConflictResultsType',
                'OutOfOfficeMailTip'                                 => 'UUP\\Exchange\\Types\\OutOfOfficeMailTip',
                'SmtpDomainList'                                     => 'UUP\\Exchange\\Types\\SmtpDomainList',
                'SmtpDomain'                                         => 'UUP\\Exchange\\Types\\SmtpDomain',
                'MailTips'                                           => 'UUP\\Exchange\\Types\\MailTips',
                'ServiceConfiguration'                               => 'UUP\\Exchange\\Types\\ServiceConfiguration',
                'MailTipsServiceConfiguration'                       => 'UUP\\Exchange\\Types\\MailTipsServiceConfiguration',
                'UnifiedMessageServiceConfiguration'                 => 'UUP\\Exchange\\Types\\UnifiedMessageServiceConfiguration',
                'ArrayOfSmtpAddressType'                             => 'UUP\\Exchange\\Types\\ArrayOfSmtpAddressType',
                'ArrayOfEncryptedSharedFolderDataType'               => 'UUP\\Exchange\\Types\\ArrayOfEncryptedSharedFolderDataType',
                'EncryptedSharedFolderDataType'                      => 'UUP\\Exchange\\Types\\EncryptedSharedFolderDataType',
                'EncryptedDataContainerType'                         => 'UUP\\Exchange\\Types\\EncryptedDataContainerType',
                'ArrayOfInvalidRecipientsType'                       => 'UUP\\Exchange\\Types\\ArrayOfInvalidRecipientsType',
                'InvalidRecipientType'                               => 'UUP\\Exchange\\Types\\InvalidRecipientType',
                'AcceptSharingInvitationType'                        => 'UUP\\Exchange\\Types\\AcceptSharingInvitationType',
                'PhoneCallIdType'                                    => 'UUP\\Exchange\\Types\\PhoneCallIdType',
                'PhoneCallInformationType'                           => 'UUP\\Exchange\\Types\\PhoneCallInformationType',
                'UserConfigurationNameType'                          => 'UUP\\Exchange\\Types\\UserConfigurationNameType',
                'UserConfigurationDictionaryObjectType'              => 'UUP\\Exchange\\Types\\UserConfigurationDictionaryObjectType',
                'UserConfigurationDictionaryEntryType'               => 'UUP\\Exchange\\Types\\UserConfigurationDictionaryEntryType',
                'UserConfigurationDictionaryType'                    => 'UUP\\Exchange\\Types\\UserConfigurationDictionaryType',
                'UserConfigurationType'                              => 'UUP\\Exchange\\Types\\UserConfigurationType',
                'ProtectionRulesServiceConfiguration'                => 'UUP\\Exchange\\Types\\ProtectionRulesServiceConfiguration',
                'ArrayOfProtectionRulesType'                         => 'UUP\\Exchange\\Types\\ArrayOfProtectionRulesType',
                'ProtectionRuleType'                                 => 'UUP\\Exchange\\Types\\ProtectionRuleType',
                'ProtectionRuleConditionType'                        => 'UUP\\Exchange\\Types\\ProtectionRuleConditionType',
                'ProtectionRuleAndType'                              => 'UUP\\Exchange\\Types\\ProtectionRuleAndType',
                'ProtectionRuleRecipientIsType'                      => 'UUP\\Exchange\\Types\\ProtectionRuleRecipientIsType',
                'ProtectionRuleSenderDepartmentsType'                => 'UUP\\Exchange\\Types\\ProtectionRuleSenderDepartmentsType',
                'ProtectionRuleActionType'                           => 'UUP\\Exchange\\Types\\ProtectionRuleActionType',
                'ProtectionRuleArgumentType'                         => 'UUP\\Exchange\\Types\\ProtectionRuleArgumentType',
                'FindMessageTrackingSearchResultType'                => 'UUP\\Exchange\\Types\\FindMessageTrackingSearchResultType',
                'ArrayOfFindMessageTrackingSearchResultType'         => 'UUP\\Exchange\\Types\\ArrayOfFindMessageTrackingSearchResultType',
                'RecipientTrackingEventType'                         => 'UUP\\Exchange\\Types\\RecipientTrackingEventType',
                'MessageTrackingReportType'                          => 'UUP\\Exchange\\Types\\MessageTrackingReportType',
                'TrackingPropertyType'                               => 'UUP\\Exchange\\Types\\TrackingPropertyType',
                'ArrayOfTrackingPropertiesType'                      => 'UUP\\Exchange\\Types\\ArrayOfTrackingPropertiesType',
                'ArrayOfArraysOfTrackingPropertiesType'              => 'UUP\\Exchange\\Types\\ArrayOfArraysOfTrackingPropertiesType',
                'ArrayOfRecipientTrackingEventType'                  => 'UUP\\Exchange\\Types\\ArrayOfRecipientTrackingEventType',
                'RulePredicateSizeRangeType'                         => 'UUP\\Exchange\\Types\\RulePredicateSizeRangeType',
                'RulePredicateDateRangeType'                         => 'UUP\\Exchange\\Types\\RulePredicateDateRangeType',
                'RulePredicatesType'                                 => 'UUP\\Exchange\\Types\\RulePredicatesType',
                'RuleActionsType'                                    => 'UUP\\Exchange\\Types\\RuleActionsType',
                'RuleType'                                           => 'UUP\\Exchange\\Types\\RuleType',
                'ArrayOfRulesType'                                   => 'UUP\\Exchange\\Types\\ArrayOfRulesType',
                'RuleValidationErrorType'                            => 'UUP\\Exchange\\Types\\RuleValidationErrorType',
                'ArrayOfRuleValidationErrorsType'                    => 'UUP\\Exchange\\Types\\ArrayOfRuleValidationErrorsType',
                'RuleOperationType'                                  => 'UUP\\Exchange\\Types\\RuleOperationType',
                'ArrayOfRuleOperationsType'                          => 'UUP\\Exchange\\Types\\ArrayOfRuleOperationsType',
                'CreateRuleOperationType'                            => 'UUP\\Exchange\\Types\\CreateRuleOperationType',
                'SetRuleOperationType'                               => 'UUP\\Exchange\\Types\\SetRuleOperationType',
                'DeleteRuleOperationType'                            => 'UUP\\Exchange\\Types\\DeleteRuleOperationType',
                'RuleOperationErrorType'                             => 'UUP\\Exchange\\Types\\RuleOperationErrorType',
                'ArrayOfRuleOperationErrorsType'                     => 'UUP\\Exchange\\Types\\ArrayOfRuleOperationErrorsType',
                'ArrayOfSearchItemKindsType'                         => 'UUP\\Exchange\\Types\\ArrayOfSearchItemKindsType',
                'UserMailboxType'                                    => 'UUP\\Exchange\\Types\\UserMailboxType',
                'ArrayOfUserMailboxesType'                           => 'UUP\\Exchange\\Types\\ArrayOfUserMailboxesType',
                'KeywordStatisticsSearchResultType'                  => 'UUP\\Exchange\\Types\\KeywordStatisticsSearchResultType',
                'MailboxStatisticsSearchResultType'                  => 'UUP\\Exchange\\Types\\MailboxStatisticsSearchResultType',
                'ResponseMessageType'                                => 'UUP\\Exchange\\Types\\ResponseMessageType',
                'MessageXml'                                         => 'UUP\\Exchange\\Types\\MessageXml',
                'ArrayOfResponseMessagesType'                        => 'UUP\\Exchange\\Types\\ArrayOfResponseMessagesType',
                'BaseResponseMessageType'                            => 'UUP\\Exchange\\Types\\BaseResponseMessageType',
                'BaseRequestType'                                    => 'UUP\\Exchange\\Types\\BaseRequestType',
                'GetFolderType'                                      => 'UUP\\Exchange\\Types\\GetFolderType',
                'UploadItemsType'                                    => 'UUP\\Exchange\\Types\\UploadItemsType',
                'UploadItemsResponseMessageType'                     => 'UUP\\Exchange\\Types\\UploadItemsResponseMessageType',
                'UploadItemsResponseType'                            => 'UUP\\Exchange\\Types\\UploadItemsResponseType',
                'ExportItemsType'                                    => 'UUP\\Exchange\\Types\\ExportItemsType',
                'ExportItemsResponseMessageType'                     => 'UUP\\Exchange\\Types\\ExportItemsResponseMessageType',
                'ExportItemsResponseType'                            => 'UUP\\Exchange\\Types\\ExportItemsResponseType',
                'CreateFolderType'                                   => 'UUP\\Exchange\\Types\\CreateFolderType',
                'FindFolderType'                                     => 'UUP\\Exchange\\Types\\FindFolderType',
                'FolderInfoResponseMessageType'                      => 'UUP\\Exchange\\Types\\FolderInfoResponseMessageType',
                'FindFolderResponseMessageType'                      => 'UUP\\Exchange\\Types\\FindFolderResponseMessageType',
                'FindFolderResponseType'                             => 'UUP\\Exchange\\Types\\FindFolderResponseType',
                'DeleteFolderType'                                   => 'UUP\\Exchange\\Types\\DeleteFolderType',
                'DeleteFolderResponseType'                           => 'UUP\\Exchange\\Types\\DeleteFolderResponseType',
                'EmptyFolderType'                                    => 'UUP\\Exchange\\Types\\EmptyFolderType',
                'EmptyFolderResponseType'                            => 'UUP\\Exchange\\Types\\EmptyFolderResponseType',
                'BaseMoveCopyFolderType'                             => 'UUP\\Exchange\\Types\\BaseMoveCopyFolderType',
                'MoveFolderType'                                     => 'UUP\\Exchange\\Types\\MoveFolderType',
                'CopyFolderType'                                     => 'UUP\\Exchange\\Types\\CopyFolderType',
                'UpdateFolderType'                                   => 'UUP\\Exchange\\Types\\UpdateFolderType',
                'CreateFolderResponseType'                           => 'UUP\\Exchange\\Types\\CreateFolderResponseType',
                'GetFolderResponseType'                              => 'UUP\\Exchange\\Types\\GetFolderResponseType',
                'UpdateFolderResponseType'                           => 'UUP\\Exchange\\Types\\UpdateFolderResponseType',
                'MoveFolderResponseType'                             => 'UUP\\Exchange\\Types\\MoveFolderResponseType',
                'CopyFolderResponseType'                             => 'UUP\\Exchange\\Types\\CopyFolderResponseType',
                'GetItemType'                                        => 'UUP\\Exchange\\Types\\GetItemType',
                'CreateItemType'                                     => 'UUP\\Exchange\\Types\\CreateItemType',
                'UpdateItemType'                                     => 'UUP\\Exchange\\Types\\UpdateItemType',
                'ItemInfoResponseMessageType'                        => 'UUP\\Exchange\\Types\\ItemInfoResponseMessageType',
                'UpdateItemResponseMessageType'                      => 'UUP\\Exchange\\Types\\UpdateItemResponseMessageType',
                'DeleteItemType'                                     => 'UUP\\Exchange\\Types\\DeleteItemType',
                'AttachmentInfoResponseMessageType'                  => 'UUP\\Exchange\\Types\\AttachmentInfoResponseMessageType',
                'DeleteAttachmentResponseMessageType'                => 'UUP\\Exchange\\Types\\DeleteAttachmentResponseMessageType',
                'BaseMoveCopyItemType'                               => 'UUP\\Exchange\\Types\\BaseMoveCopyItemType',
                'MoveItemType'                                       => 'UUP\\Exchange\\Types\\MoveItemType',
                'CopyItemType'                                       => 'UUP\\Exchange\\Types\\CopyItemType',
                'SendItemType'                                       => 'UUP\\Exchange\\Types\\SendItemType',
                'SendItemResponseType'                               => 'UUP\\Exchange\\Types\\SendItemResponseType',
                'FindItemType'                                       => 'UUP\\Exchange\\Types\\FindItemType',
                'FindConversationType'                               => 'UUP\\Exchange\\Types\\FindConversationType',
                'FindConversationResponseMessageType'                => 'UUP\\Exchange\\Types\\FindConversationResponseMessageType',
                'ApplyConversationActionType'                        => 'UUP\\Exchange\\Types\\ApplyConversationActionType',
                'ApplyConversationActionResponseType'                => 'UUP\\Exchange\\Types\\ApplyConversationActionResponseType',
                'CreateAttachmentType'                               => 'UUP\\Exchange\\Types\\CreateAttachmentType',
                'CreateAttachmentResponseType'                       => 'UUP\\Exchange\\Types\\CreateAttachmentResponseType',
                'DeleteAttachmentType'                               => 'UUP\\Exchange\\Types\\DeleteAttachmentType',
                'DeleteAttachmentResponseType'                       => 'UUP\\Exchange\\Types\\DeleteAttachmentResponseType',
                'GetAttachmentType'                                  => 'UUP\\Exchange\\Types\\GetAttachmentType',
                'GetAttachmentResponseType'                          => 'UUP\\Exchange\\Types\\GetAttachmentResponseType',
                'CreateItemResponseType'                             => 'UUP\\Exchange\\Types\\CreateItemResponseType',
                'UpdateItemResponseType'                             => 'UUP\\Exchange\\Types\\UpdateItemResponseType',
                'GetItemResponseType'                                => 'UUP\\Exchange\\Types\\GetItemResponseType',
                'MoveItemResponseType'                               => 'UUP\\Exchange\\Types\\MoveItemResponseType',
                'CopyItemResponseType'                               => 'UUP\\Exchange\\Types\\CopyItemResponseType',
                'DeleteItemResponseType'                             => 'UUP\\Exchange\\Types\\DeleteItemResponseType',
                'FindItemResponseMessageType'                        => 'UUP\\Exchange\\Types\\FindItemResponseMessageType',
                'FindItemResponseType'                               => 'UUP\\Exchange\\Types\\FindItemResponseType',
                'ResolveNamesType'                                   => 'UUP\\Exchange\\Types\\ResolveNamesType',
                'ResolveNamesResponseMessageType'                    => 'UUP\\Exchange\\Types\\ResolveNamesResponseMessageType',
                'ResolveNamesResponseType'                           => 'UUP\\Exchange\\Types\\ResolveNamesResponseType',
                'GetPasswordExpirationDateType'                      => 'UUP\\Exchange\\Types\\GetPasswordExpirationDateType',
                'GetPasswordExpirationDateResponseMessageType'       => 'UUP\\Exchange\\Types\\GetPasswordExpirationDateResponseMessageType',
                'GetMailTipsType'                                    => 'UUP\\Exchange\\Types\\GetMailTipsType',
                'GetMailTipsResponseMessageType'                     => 'UUP\\Exchange\\Types\\GetMailTipsResponseMessageType',
                'ArrayOfMailTipsResponseMessageType'                 => 'UUP\\Exchange\\Types\\ArrayOfMailTipsResponseMessageType',
                'MailTipsResponseMessageType'                        => 'UUP\\Exchange\\Types\\MailTipsResponseMessageType',
                'PlayOnPhoneType'                                    => 'UUP\\Exchange\\Types\\PlayOnPhoneType',
                'PlayOnPhoneResponseMessageType'                     => 'UUP\\Exchange\\Types\\PlayOnPhoneResponseMessageType',
                'GetPhoneCallInformationType'                        => 'UUP\\Exchange\\Types\\GetPhoneCallInformationType',
                'GetPhoneCallInformationResponseMessageType'         => 'UUP\\Exchange\\Types\\GetPhoneCallInformationResponseMessageType',
                'DisconnectPhoneCallType'                            => 'UUP\\Exchange\\Types\\DisconnectPhoneCallType',
                'DisconnectPhoneCallResponseMessageType'             => 'UUP\\Exchange\\Types\\DisconnectPhoneCallResponseMessageType',
                'ExpandDLType'                                       => 'UUP\\Exchange\\Types\\ExpandDLType',
                'ExpandDLResponseMessageType'                        => 'UUP\\Exchange\\Types\\ExpandDLResponseMessageType',
                'ExpandDLResponseType'                               => 'UUP\\Exchange\\Types\\ExpandDLResponseType',
                'GetServerTimeZonesType'                             => 'UUP\\Exchange\\Types\\GetServerTimeZonesType',
                'GetServerTimeZonesResponseMessageType'              => 'UUP\\Exchange\\Types\\GetServerTimeZonesResponseMessageType',
                'GetServerTimeZonesResponseType'                     => 'UUP\\Exchange\\Types\\GetServerTimeZonesResponseType',
                'CreateManagedFolderRequestType'                     => 'UUP\\Exchange\\Types\\CreateManagedFolderRequestType',
                'CreateManagedFolderResponseType'                    => 'UUP\\Exchange\\Types\\CreateManagedFolderResponseType',
                'SubscribeType'                                      => 'UUP\\Exchange\\Types\\SubscribeType',
                'SubscribeResponseMessageType'                       => 'UUP\\Exchange\\Types\\SubscribeResponseMessageType',
                'SubscribeResponseType'                              => 'UUP\\Exchange\\Types\\SubscribeResponseType',
                'UnsubscribeType'                                    => 'UUP\\Exchange\\Types\\UnsubscribeType',
                'UnsubscribeResponseType'                            => 'UUP\\Exchange\\Types\\UnsubscribeResponseType',
                'GetEventsType'                                      => 'UUP\\Exchange\\Types\\GetEventsType',
                'GetEventsResponseMessageType'                       => 'UUP\\Exchange\\Types\\GetEventsResponseMessageType',
                'GetEventsResponseType'                              => 'UUP\\Exchange\\Types\\GetEventsResponseType',
                'GetStreamingEventsType'                             => 'UUP\\Exchange\\Types\\GetStreamingEventsType',
                'GetStreamingEventsResponseMessageType'              => 'UUP\\Exchange\\Types\\GetStreamingEventsResponseMessageType',
                'GetStreamingEventsResponseType'                     => 'UUP\\Exchange\\Types\\GetStreamingEventsResponseType',
                'SendNotificationResponseMessageType'                => 'UUP\\Exchange\\Types\\SendNotificationResponseMessageType',
                'SendNotificationResponseType'                       => 'UUP\\Exchange\\Types\\SendNotificationResponseType',
                'SendNotificationResultType'                         => 'UUP\\Exchange\\Types\\SendNotificationResultType',
                'SyncFolderHierarchyType'                            => 'UUP\\Exchange\\Types\\SyncFolderHierarchyType',
                'SyncFolderHierarchyResponseMessageType'             => 'UUP\\Exchange\\Types\\SyncFolderHierarchyResponseMessageType',
                'SyncFolderHierarchyResponseType'                    => 'UUP\\Exchange\\Types\\SyncFolderHierarchyResponseType',
                'SyncFolderItemsType'                                => 'UUP\\Exchange\\Types\\SyncFolderItemsType',
                'SyncFolderItemsResponseMessageType'                 => 'UUP\\Exchange\\Types\\SyncFolderItemsResponseMessageType',
                'SyncFolderItemsResponseType'                        => 'UUP\\Exchange\\Types\\SyncFolderItemsResponseType',
                'GetUserAvailabilityRequestType'                     => 'UUP\\Exchange\\Types\\GetUserAvailabilityRequestType',
                'FreeBusyResponseType'                               => 'UUP\\Exchange\\Types\\FreeBusyResponseType',
                'ArrayOfFreeBusyResponse'                            => 'UUP\\Exchange\\Types\\ArrayOfFreeBusyResponse',
                'SuggestionsResponseType'                            => 'UUP\\Exchange\\Types\\SuggestionsResponseType',
                'GetUserAvailabilityResponseType'                    => 'UUP\\Exchange\\Types\\GetUserAvailabilityResponseType',
                'GetUserOofSettingsRequest'                          => 'UUP\\Exchange\\Types\\GetUserOofSettingsRequest',
                'GetUserOofSettingsResponse'                         => 'UUP\\Exchange\\Types\\GetUserOofSettingsResponse',
                'SetUserOofSettingsRequest'                          => 'UUP\\Exchange\\Types\\SetUserOofSettingsRequest',
                'SetUserOofSettingsResponse'                         => 'UUP\\Exchange\\Types\\SetUserOofSettingsResponse',
                'ConvertIdType'                                      => 'UUP\\Exchange\\Types\\ConvertIdType',
                'ConvertIdResponseType'                              => 'UUP\\Exchange\\Types\\ConvertIdResponseType',
                'ConvertIdResponseMessageType'                       => 'UUP\\Exchange\\Types\\ConvertIdResponseMessageType',
                'GetDelegateType'                                    => 'UUP\\Exchange\\Types\\GetDelegateType',
                'GetDelegateResponseMessageType'                     => 'UUP\\Exchange\\Types\\GetDelegateResponseMessageType',
                'ArrayOfDelegateUserResponseMessageType'             => 'UUP\\Exchange\\Types\\ArrayOfDelegateUserResponseMessageType',
                'DelegateUserResponseMessageType'                    => 'UUP\\Exchange\\Types\\DelegateUserResponseMessageType',
                'AddDelegateType'                                    => 'UUP\\Exchange\\Types\\AddDelegateType',
                'BaseDelegateResponseMessageType'                    => 'UUP\\Exchange\\Types\\BaseDelegateResponseMessageType',
                'BaseDelegateType'                                   => 'UUP\\Exchange\\Types\\BaseDelegateType',
                'AddDelegateResponseMessageType'                     => 'UUP\\Exchange\\Types\\AddDelegateResponseMessageType',
                'RemoveDelegateType'                                 => 'UUP\\Exchange\\Types\\RemoveDelegateType',
                'RemoveDelegateResponseMessageType'                  => 'UUP\\Exchange\\Types\\RemoveDelegateResponseMessageType',
                'UpdateDelegateType'                                 => 'UUP\\Exchange\\Types\\UpdateDelegateType',
                'UpdateDelegateResponseMessageType'                  => 'UUP\\Exchange\\Types\\UpdateDelegateResponseMessageType',
                'GetSharingMetadataType'                             => 'UUP\\Exchange\\Types\\GetSharingMetadataType',
                'GetSharingMetadataResponseMessageType'              => 'UUP\\Exchange\\Types\\GetSharingMetadataResponseMessageType',
                'RefreshSharingFolderType'                           => 'UUP\\Exchange\\Types\\RefreshSharingFolderType',
                'RefreshSharingFolderResponseMessageType'            => 'UUP\\Exchange\\Types\\RefreshSharingFolderResponseMessageType',
                'GetSharingFolderType'                               => 'UUP\\Exchange\\Types\\GetSharingFolderType',
                'GetSharingFolderResponseMessageType'                => 'UUP\\Exchange\\Types\\GetSharingFolderResponseMessageType',
                'CreateUserConfigurationType'                        => 'UUP\\Exchange\\Types\\CreateUserConfigurationType',
                'CreateUserConfigurationResponseType'                => 'UUP\\Exchange\\Types\\CreateUserConfigurationResponseType',
                'DeleteUserConfigurationType'                        => 'UUP\\Exchange\\Types\\DeleteUserConfigurationType',
                'DeleteUserConfigurationResponseType'                => 'UUP\\Exchange\\Types\\DeleteUserConfigurationResponseType',
                'GetUserConfigurationType'                           => 'UUP\\Exchange\\Types\\GetUserConfigurationType',
                'GetUserConfigurationResponseMessageType'            => 'UUP\\Exchange\\Types\\GetUserConfigurationResponseMessageType',
                'GetUserConfigurationResponseType'                   => 'UUP\\Exchange\\Types\\GetUserConfigurationResponseType',
                'UpdateUserConfigurationType'                        => 'UUP\\Exchange\\Types\\UpdateUserConfigurationType',
                'UpdateUserConfigurationResponseType'                => 'UUP\\Exchange\\Types\\UpdateUserConfigurationResponseType',
                'GetRoomListsType'                                   => 'UUP\\Exchange\\Types\\GetRoomListsType',
                'GetRoomListsResponseMessageType'                    => 'UUP\\Exchange\\Types\\GetRoomListsResponseMessageType',
                'GetRoomsType'                                       => 'UUP\\Exchange\\Types\\GetRoomsType',
                'GetRoomsResponseMessageType'                        => 'UUP\\Exchange\\Types\\GetRoomsResponseMessageType',
                'ArrayOfServiceConfigurationType'                    => 'UUP\\Exchange\\Types\\ArrayOfServiceConfigurationType',
                'GetServiceConfigurationType'                        => 'UUP\\Exchange\\Types\\GetServiceConfigurationType',
                'GetServiceConfigurationResponseMessageType'         => 'UUP\\Exchange\\Types\\GetServiceConfigurationResponseMessageType',
                'ArrayOfServiceConfigurationResponseMessageType'     => 'UUP\\Exchange\\Types\\ArrayOfServiceConfigurationResponseMessageType',
                'ServiceConfigurationResponseMessageType'            => 'UUP\\Exchange\\Types\\ServiceConfigurationResponseMessageType',
                'FindMessageTrackingReportRequestType'               => 'UUP\\Exchange\\Types\\FindMessageTrackingReportRequestType',
                'FindMessageTrackingReportResponseMessageType'       => 'UUP\\Exchange\\Types\\FindMessageTrackingReportResponseMessageType',
                'GetMessageTrackingReportRequestType'                => 'UUP\\Exchange\\Types\\GetMessageTrackingReportRequestType',
                'GetMessageTrackingReportResponseMessageType'        => 'UUP\\Exchange\\Types\\GetMessageTrackingReportResponseMessageType',
                'GetInboxRulesRequestType'                           => 'UUP\\Exchange\\Types\\GetInboxRulesRequestType',
                'GetInboxRulesResponseType'                          => 'UUP\\Exchange\\Types\\GetInboxRulesResponseType',
                'UpdateInboxRulesRequestType'                        => 'UUP\\Exchange\\Types\\UpdateInboxRulesRequestType',
                'UpdateInboxRulesResponseType'                       => 'UUP\\Exchange\\Types\\UpdateInboxRulesResponseType',
                'FindMailboxStatisticsByKeywordsType'                => 'UUP\\Exchange\\Types\\FindMailboxStatisticsByKeywordsType',
                'FindMailboxStatisticsByKeywordsResponseType'        => 'UUP\\Exchange\\Types\\FindMailboxStatisticsByKeywordsResponseType',
                'FindMailboxStatisticsByKeywordsResponseMessageType' => 'UUP\\Exchange\\Types\\FindMailboxStatisticsByKeywordsResponseMessageType',
        );

        /**
         * @param array $options A array of config values
         * @param string $wsdl The wsdl file to use
         */
        public function __construct(array $options = array(), $wsdl = 'config/services.wsdl')
        {
                foreach (self::$classmap as $key => $value) {
                        if (!isset($options['classmap'][$key])) {
                                $options['classmap'][$key] = $value;
                        }
                }
                $options = array_merge(array(
                        'features' => 1,
                    ), $options);
                parent::__construct($wsdl, $options);
        }

        /**
         * @param ResolveNamesType $request
         * @return ResolveNamesResponseType
         */
        public function ResolveNames(ResolveNamesType $request)
        {
                return $this->__soapCall('ResolveNames', array($request));
        }

        /**
         * @param ExpandDLType $request
         * @return ExpandDLResponseType
         */
        public function ExpandDL(ExpandDLType $request)
        {
                return $this->__soapCall('ExpandDL', array($request));
        }

        /**
         * @param GetServerTimeZonesType $request
         * @return GetServerTimeZonesResponseType
         */
        public function GetServerTimeZones(GetServerTimeZonesType $request)
        {
                return $this->__soapCall('GetServerTimeZones', array($request));
        }

        /**
         * @param FindFolderType $request
         * @return FindFolderResponseType
         */
        public function FindFolder(FindFolderType $request)
        {
                return $this->__soapCall('FindFolder', array($request));
        }

        /**
         * @param FindItemType $request
         * @return FindItemResponseType
         */
        public function FindItem(FindItemType $request)
        {
                return $this->__soapCall('FindItem', array($request));
        }

        /**
         * @param GetFolderType $request
         * @return GetFolderResponseType
         */
        public function GetFolder(GetFolderType $request)
        {
                return $this->__soapCall('GetFolder', array($request));
        }

        /**
         * @param ConvertIdType $request
         * @return ConvertIdResponseType
         */
        public function ConvertId(ConvertIdType $request)
        {
                return $this->__soapCall('ConvertId', array($request));
        }

        /**
         * @param UploadItemsType $request
         * @return UploadItemsResponseType
         */
        public function UploadItems(UploadItemsType $request)
        {
                return $this->__soapCall('UploadItems', array($request));
        }

        /**
         * @param ExportItemsType $request
         * @return ExportItemsResponseType
         */
        public function ExportItems(ExportItemsType $request)
        {
                return $this->__soapCall('ExportItems', array($request));
        }

        /**
         * @param CreateFolderType $request
         * @return CreateFolderResponseType
         */
        public function CreateFolder(CreateFolderType $request)
        {
                return $this->__soapCall('CreateFolder', array($request));
        }

        /**
         * @param DeleteFolderType $request
         * @return DeleteFolderResponseType
         */
        public function DeleteFolder(DeleteFolderType $request)
        {
                return $this->__soapCall('DeleteFolder', array($request));
        }

        /**
         * @param EmptyFolderType $request
         * @return EmptyFolderResponseType
         */
        public function EmptyFolder(EmptyFolderType $request)
        {
                return $this->__soapCall('EmptyFolder', array($request));
        }

        /**
         * @param UpdateFolderType $request
         * @return UpdateFolderResponseType
         */
        public function UpdateFolder(UpdateFolderType $request)
        {
                return $this->__soapCall('UpdateFolder', array($request));
        }

        /**
         * @param MoveFolderType $request
         * @return MoveFolderResponseType
         */
        public function MoveFolder(MoveFolderType $request)
        {
                return $this->__soapCall('MoveFolder', array($request));
        }

        /**
         * @param CopyFolderType $request
         * @return CopyFolderResponseType
         */
        public function CopyFolder(CopyFolderType $request)
        {
                return $this->__soapCall('CopyFolder', array($request));
        }

        /**
         * @param SubscribeType $request
         * @return SubscribeResponseType
         */
        public function Subscribe(SubscribeType $request)
        {
                return $this->__soapCall('Subscribe', array($request));
        }

        /**
         * @param UnsubscribeType $request
         * @return UnsubscribeResponseType
         */
        public function Unsubscribe(UnsubscribeType $request)
        {
                return $this->__soapCall('Unsubscribe', array($request));
        }

        /**
         * @param GetEventsType $request
         * @return GetEventsResponseType
         */
        public function GetEvents(GetEventsType $request)
        {
                return $this->__soapCall('GetEvents', array($request));
        }

        /**
         * @param GetStreamingEventsType $request
         * @return GetStreamingEventsResponseType
         */
        public function GetStreamingEvents(GetStreamingEventsType $request)
        {
                return $this->__soapCall('GetStreamingEvents', array($request));
        }

        /**
         * @param SyncFolderHierarchyType $request
         * @return SyncFolderHierarchyResponseType
         */
        public function SyncFolderHierarchy(SyncFolderHierarchyType $request)
        {
                return $this->__soapCall('SyncFolderHierarchy', array($request));
        }

        /**
         * @param SyncFolderItemsType $request
         * @return SyncFolderItemsResponseType
         */
        public function SyncFolderItems(SyncFolderItemsType $request)
        {
                return $this->__soapCall('SyncFolderItems', array($request));
        }

        /**
         * @param GetItemType $request
         * @return GetItemResponseType
         */
        public function GetItem(GetItemType $request)
        {
                return $this->__soapCall('GetItem', array($request));
        }

        /**
         * @param CreateItemType $request
         * @return CreateItemResponseType
         */
        public function CreateItem(CreateItemType $request)
        {
                return $this->__soapCall('CreateItem', array($request));
        }

        /**
         * @param DeleteItemType $request
         * @return DeleteItemResponseType
         */
        public function DeleteItem(DeleteItemType $request)
        {
                return $this->__soapCall('DeleteItem', array($request));
        }

        /**
         * @param UpdateItemType $request
         * @return UpdateItemResponseType
         */
        public function UpdateItem(UpdateItemType $request)
        {
                return $this->__soapCall('UpdateItem', array($request));
        }

        /**
         * @param SendItemType $request
         * @return SendItemResponseType
         */
        public function SendItem(SendItemType $request)
        {
                return $this->__soapCall('SendItem', array($request));
        }

        /**
         * @param MoveItemType $request
         * @return MoveItemResponseType
         */
        public function MoveItem(MoveItemType $request)
        {
                return $this->__soapCall('MoveItem', array($request));
        }

        /**
         * @param CopyItemType $request
         * @return CopyItemResponseType
         */
        public function CopyItem(CopyItemType $request)
        {
                return $this->__soapCall('CopyItem', array($request));
        }

        /**
         * @param CreateAttachmentType $request
         * @return CreateAttachmentResponseType
         */
        public function CreateAttachment(CreateAttachmentType $request)
        {
                return $this->__soapCall('CreateAttachment', array($request));
        }

        /**
         * @param DeleteAttachmentType $request
         * @return DeleteAttachmentResponseType
         */
        public function DeleteAttachment(DeleteAttachmentType $request)
        {
                return $this->__soapCall('DeleteAttachment', array($request));
        }

        /**
         * @param GetAttachmentType $request
         * @return GetAttachmentResponseType
         */
        public function GetAttachment(GetAttachmentType $request)
        {
                return $this->__soapCall('GetAttachment', array($request));
        }

        /**
         * @param CreateManagedFolderRequestType $request
         * @return CreateManagedFolderResponseType
         */
        public function CreateManagedFolder(CreateManagedFolderRequestType $request)
        {
                return $this->__soapCall('CreateManagedFolder', array($request));
        }

        /**
         * @param GetDelegateType $request
         * @return GetDelegateResponseMessageType
         */
        public function GetDelegate(GetDelegateType $request)
        {
                return $this->__soapCall('GetDelegate', array($request));
        }

        /**
         * @param AddDelegateType $request
         * @return AddDelegateResponseMessageType
         */
        public function AddDelegate(AddDelegateType $request)
        {
                return $this->__soapCall('AddDelegate', array($request));
        }

        /**
         * @param RemoveDelegateType $request
         * @return RemoveDelegateResponseMessageType
         */
        public function RemoveDelegate(RemoveDelegateType $request)
        {
                return $this->__soapCall('RemoveDelegate', array($request));
        }

        /**
         * @param UpdateDelegateType $request
         * @return UpdateDelegateResponseMessageType
         */
        public function UpdateDelegate(UpdateDelegateType $request)
        {
                return $this->__soapCall('UpdateDelegate', array($request));
        }

        /**
         * @param CreateUserConfigurationType $request
         * @return CreateUserConfigurationResponseType
         */
        public function CreateUserConfiguration(CreateUserConfigurationType $request)
        {
                return $this->__soapCall('CreateUserConfiguration', array($request));
        }

        /**
         * @param DeleteUserConfigurationType $request
         * @return DeleteUserConfigurationResponseType
         */
        public function DeleteUserConfiguration(DeleteUserConfigurationType $request)
        {
                return $this->__soapCall('DeleteUserConfiguration', array($request));
        }

        /**
         * @param GetUserConfigurationType $request
         * @return GetUserConfigurationResponseType
         */
        public function GetUserConfiguration(GetUserConfigurationType $request)
        {
                return $this->__soapCall('GetUserConfiguration', array($request));
        }

        /**
         * @param UpdateUserConfigurationType $request
         * @return UpdateUserConfigurationResponseType
         */
        public function UpdateUserConfiguration(UpdateUserConfigurationType $request)
        {
                return $this->__soapCall('UpdateUserConfiguration', array($request));
        }

        /**
         * @param GetUserAvailabilityRequestType $GetUserAvailabilityRequest
         * @return GetUserAvailabilityResponseType
         */
        public function GetUserAvailability(GetUserAvailabilityRequestType $GetUserAvailabilityRequest)
        {
                return $this->__soapCall('GetUserAvailability', array($GetUserAvailabilityRequest));
        }

        /**
         * @param GetUserOofSettingsRequest $GetUserOofSettingsRequest
         * @return GetUserOofSettingsResponse
         */
        public function GetUserOofSettings(GetUserOofSettingsRequest $GetUserOofSettingsRequest)
        {
                return $this->__soapCall('GetUserOofSettings', array($GetUserOofSettingsRequest));
        }

        /**
         * @param SetUserOofSettingsRequest $SetUserOofSettingsRequest
         * @return SetUserOofSettingsResponse
         */
        public function SetUserOofSettings(SetUserOofSettingsRequest $SetUserOofSettingsRequest)
        {
                return $this->__soapCall('SetUserOofSettings', array($SetUserOofSettingsRequest));
        }

        /**
         * @param GetServiceConfigurationType $request
         * @return GetServiceConfigurationResponseMessageType
         */
        public function GetServiceConfiguration(GetServiceConfigurationType $request)
        {
                return $this->__soapCall('GetServiceConfiguration', array($request));
        }

        /**
         * @param GetMailTipsType $request
         * @return GetMailTipsResponseMessageType
         */
        public function GetMailTips(GetMailTipsType $request)
        {
                return $this->__soapCall('GetMailTips', array($request));
        }

        /**
         * @param PlayOnPhoneType $request
         * @return PlayOnPhoneResponseMessageType
         */
        public function PlayOnPhone(PlayOnPhoneType $request)
        {
                return $this->__soapCall('PlayOnPhone', array($request));
        }

        /**
         * @param GetPhoneCallInformationType $request
         * @return GetPhoneCallInformationResponseMessageType
         */
        public function GetPhoneCallInformation(GetPhoneCallInformationType $request)
        {
                return $this->__soapCall('GetPhoneCallInformation', array($request));
        }

        /**
         * @param DisconnectPhoneCallType $request
         * @return DisconnectPhoneCallResponseMessageType
         */
        public function DisconnectPhoneCall(DisconnectPhoneCallType $request)
        {
                return $this->__soapCall('DisconnectPhoneCall', array($request));
        }

        /**
         * @param GetSharingMetadataType $request
         * @return GetSharingMetadataResponseMessageType
         */
        public function GetSharingMetadata(GetSharingMetadataType $request)
        {
                return $this->__soapCall('GetSharingMetadata', array($request));
        }

        /**
         * @param RefreshSharingFolderType $request
         * @return RefreshSharingFolderResponseMessageType
         */
        public function RefreshSharingFolder(RefreshSharingFolderType $request)
        {
                return $this->__soapCall('RefreshSharingFolder', array($request));
        }

        /**
         * @param GetSharingFolderType $request
         * @return GetSharingFolderResponseMessageType
         */
        public function GetSharingFolder(GetSharingFolderType $request)
        {
                return $this->__soapCall('GetSharingFolder', array($request));
        }

        /**
         * @param GetRoomListsType $GetRoomListsRequest
         * @return GetRoomListsResponseMessageType
         */
        public function GetRoomLists(GetRoomListsType $GetRoomListsRequest)
        {
                return $this->__soapCall('GetRoomLists', array($GetRoomListsRequest));
        }

        /**
         * @param GetRoomsType $GetRoomsRequest
         * @return GetRoomsResponseMessageType
         */
        public function GetRooms(GetRoomsType $GetRoomsRequest)
        {
                return $this->__soapCall('GetRooms', array($GetRoomsRequest));
        }

        /**
         * @param FindMessageTrackingReportRequestType $request
         * @return FindMessageTrackingReportResponseMessageType
         */
        public function FindMessageTrackingReport(FindMessageTrackingReportRequestType $request)
        {
                return $this->__soapCall('FindMessageTrackingReport', array($request));
        }

        /**
         * @param GetMessageTrackingReportRequestType $request
         * @return GetMessageTrackingReportResponseMessageType
         */
        public function GetMessageTrackingReport(GetMessageTrackingReportRequestType $request)
        {
                return $this->__soapCall('GetMessageTrackingReport', array($request));
        }

        /**
         * @param FindConversationType $request
         * @return FindConversationResponseMessageType
         */
        public function FindConversation(FindConversationType $request)
        {
                return $this->__soapCall('FindConversation', array($request));
        }

        /**
         * @param ApplyConversationActionType $request
         * @return ApplyConversationActionResponseType
         */
        public function ApplyConversationAction(ApplyConversationActionType $request)
        {
                return $this->__soapCall('ApplyConversationAction', array($request));
        }

        /**
         * @param GetInboxRulesRequestType $request
         * @return GetInboxRulesResponseType
         */
        public function GetInboxRules(GetInboxRulesRequestType $request)
        {
                return $this->__soapCall('GetInboxRules', array($request));
        }

        /**
         * @param UpdateInboxRulesRequestType $request
         * @return UpdateInboxRulesResponseType
         */
        public function UpdateInboxRules(UpdateInboxRulesRequestType $request)
        {
                return $this->__soapCall('UpdateInboxRules', array($request));
        }

        /**
         * @param GetPasswordExpirationDateType $request
         * @return GetPasswordExpirationDateResponseMessageType
         */
        public function GetPasswordExpirationDate(GetPasswordExpirationDateType $request)
        {
                return $this->__soapCall('GetPasswordExpirationDate', array($request));
        }

}
