<?php

namespace UUP\Exchange\Types;

class ArrayOfResponseMessagesType
{

        /**
         * @var ItemInfoResponseMessageType $CreateItemResponseMessage
         */
        protected $CreateItemResponseMessage = null;
        /**
         * @var ResponseMessageType $DeleteItemResponseMessage
         */
        protected $DeleteItemResponseMessage = null;
        /**
         * @var ItemInfoResponseMessageType $GetItemResponseMessage
         */
        protected $GetItemResponseMessage = null;
        /**
         * @var UpdateItemResponseMessageType $UpdateItemResponseMessage
         */
        protected $UpdateItemResponseMessage = null;
        /**
         * @var ResponseMessageType $SendItemResponseMessage
         */
        protected $SendItemResponseMessage = null;
        /**
         * @var ResponseMessageType $DeleteFolderResponseMessage
         */
        protected $DeleteFolderResponseMessage = null;
        /**
         * @var ResponseMessageType $EmptyFolderResponseMessage
         */
        protected $EmptyFolderResponseMessage = null;
        /**
         * @var FolderInfoResponseMessageType $CreateFolderResponseMessage
         */
        protected $CreateFolderResponseMessage = null;
        /**
         * @var FolderInfoResponseMessageType $GetFolderResponseMessage
         */
        protected $GetFolderResponseMessage = null;
        /**
         * @var FindFolderResponseMessageType $FindFolderResponseMessage
         */
        protected $FindFolderResponseMessage = null;
        /**
         * @var FolderInfoResponseMessageType $UpdateFolderResponseMessage
         */
        protected $UpdateFolderResponseMessage = null;
        /**
         * @var FolderInfoResponseMessageType $MoveFolderResponseMessage
         */
        protected $MoveFolderResponseMessage = null;
        /**
         * @var FolderInfoResponseMessageType $CopyFolderResponseMessage
         */
        protected $CopyFolderResponseMessage = null;
        /**
         * @var AttachmentInfoResponseMessageType $CreateAttachmentResponseMessage
         */
        protected $CreateAttachmentResponseMessage = null;
        /**
         * @var DeleteAttachmentResponseMessageType $DeleteAttachmentResponseMessage
         */
        protected $DeleteAttachmentResponseMessage = null;
        /**
         * @var AttachmentInfoResponseMessageType $GetAttachmentResponseMessage
         */
        protected $GetAttachmentResponseMessage = null;
        /**
         * @var UploadItemsResponseMessageType $UploadItemsResponseMessage
         */
        protected $UploadItemsResponseMessage = null;
        /**
         * @var ExportItemsResponseMessageType $ExportItemsResponseMessage
         */
        protected $ExportItemsResponseMessage = null;
        /**
         * @var FindItemResponseMessageType $FindItemResponseMessage
         */
        protected $FindItemResponseMessage = null;
        /**
         * @var ItemInfoResponseMessageType $MoveItemResponseMessage
         */
        protected $MoveItemResponseMessage = null;
        /**
         * @var ItemInfoResponseMessageType $CopyItemResponseMessage
         */
        protected $CopyItemResponseMessage = null;
        /**
         * @var ResolveNamesResponseMessageType $ResolveNamesResponseMessage
         */
        protected $ResolveNamesResponseMessage = null;
        /**
         * @var ExpandDLResponseMessageType $ExpandDLResponseMessage
         */
        protected $ExpandDLResponseMessage = null;
        /**
         * @var GetServerTimeZonesResponseMessageType $GetServerTimeZonesResponseMessage
         */
        protected $GetServerTimeZonesResponseMessage = null;
        /**
         * @var GetEventsResponseMessageType $GetEventsResponseMessage
         */
        protected $GetEventsResponseMessage = null;
        /**
         * @var GetStreamingEventsResponseMessageType $GetStreamingEventsResponseMessage
         */
        protected $GetStreamingEventsResponseMessage = null;
        /**
         * @var SubscribeResponseMessageType $SubscribeResponseMessage
         */
        protected $SubscribeResponseMessage = null;
        /**
         * @var ResponseMessageType $UnsubscribeResponseMessage
         */
        protected $UnsubscribeResponseMessage = null;
        /**
         * @var SendNotificationResponseMessageType $SendNotificationResponseMessage
         */
        protected $SendNotificationResponseMessage = null;
        /**
         * @var SyncFolderHierarchyResponseMessageType $SyncFolderHierarchyResponseMessage
         */
        protected $SyncFolderHierarchyResponseMessage = null;
        /**
         * @var SyncFolderItemsResponseMessageType $SyncFolderItemsResponseMessage
         */
        protected $SyncFolderItemsResponseMessage = null;
        /**
         * @var FolderInfoResponseMessageType $CreateManagedFolderResponseMessage
         */
        protected $CreateManagedFolderResponseMessage = null;
        /**
         * @var ConvertIdResponseMessageType $ConvertIdResponseMessage
         */
        protected $ConvertIdResponseMessage = null;
        /**
         * @var GetSharingMetadataResponseMessageType $GetSharingMetadataResponseMessage
         */
        protected $GetSharingMetadataResponseMessage = null;
        /**
         * @var RefreshSharingFolderResponseMessageType $RefreshSharingFolderResponseMessage
         */
        protected $RefreshSharingFolderResponseMessage = null;
        /**
         * @var GetSharingFolderResponseMessageType $GetSharingFolderResponseMessage
         */
        protected $GetSharingFolderResponseMessage = null;
        /**
         * @var ResponseMessageType $CreateUserConfigurationResponseMessage
         */
        protected $CreateUserConfigurationResponseMessage = null;
        /**
         * @var ResponseMessageType $DeleteUserConfigurationResponseMessage
         */
        protected $DeleteUserConfigurationResponseMessage = null;
        /**
         * @var GetUserConfigurationResponseMessageType $GetUserConfigurationResponseMessage
         */
        protected $GetUserConfigurationResponseMessage = null;
        /**
         * @var ResponseMessageType $UpdateUserConfigurationResponseMessage
         */
        protected $UpdateUserConfigurationResponseMessage = null;
        /**
         * @var GetRoomListsResponseMessageType $GetRoomListsResponse
         */
        protected $GetRoomListsResponse = null;
        /**
         * @var GetRoomsResponseMessageType $GetRoomsResponse
         */
        protected $GetRoomsResponse = null;
        /**
         * @var ResponseMessageType $ApplyConversationActionResponseMessage
         */
        protected $ApplyConversationActionResponseMessage = null;
        /**
         * @var FindMailboxStatisticsByKeywordsResponseMessageType $FindMailboxStatisticsByKeywordsResponseMessage
         */
        protected $FindMailboxStatisticsByKeywordsResponseMessage = null;
        /**
         * @var GetPasswordExpirationDateResponseMessageType $GetPasswordExpirationDateResponse
         */
        protected $GetPasswordExpirationDateResponse = null;

        /**
         * @param ItemInfoResponseMessageType $CreateItemResponseMessage
         * @param ResponseMessageType $DeleteItemResponseMessage
         * @param ItemInfoResponseMessageType $GetItemResponseMessage
         * @param UpdateItemResponseMessageType $UpdateItemResponseMessage
         * @param ResponseMessageType $SendItemResponseMessage
         * @param ResponseMessageType $DeleteFolderResponseMessage
         * @param ResponseMessageType $EmptyFolderResponseMessage
         * @param FolderInfoResponseMessageType $CreateFolderResponseMessage
         * @param FolderInfoResponseMessageType $GetFolderResponseMessage
         * @param FindFolderResponseMessageType $FindFolderResponseMessage
         * @param FolderInfoResponseMessageType $UpdateFolderResponseMessage
         * @param FolderInfoResponseMessageType $MoveFolderResponseMessage
         * @param FolderInfoResponseMessageType $CopyFolderResponseMessage
         * @param AttachmentInfoResponseMessageType $CreateAttachmentResponseMessage
         * @param DeleteAttachmentResponseMessageType $DeleteAttachmentResponseMessage
         * @param AttachmentInfoResponseMessageType $GetAttachmentResponseMessage
         * @param UploadItemsResponseMessageType $UploadItemsResponseMessage
         * @param ExportItemsResponseMessageType $ExportItemsResponseMessage
         * @param FindItemResponseMessageType $FindItemResponseMessage
         * @param ItemInfoResponseMessageType $MoveItemResponseMessage
         * @param ItemInfoResponseMessageType $CopyItemResponseMessage
         * @param ResolveNamesResponseMessageType $ResolveNamesResponseMessage
         * @param ExpandDLResponseMessageType $ExpandDLResponseMessage
         * @param GetServerTimeZonesResponseMessageType $GetServerTimeZonesResponseMessage
         * @param GetEventsResponseMessageType $GetEventsResponseMessage
         * @param GetStreamingEventsResponseMessageType $GetStreamingEventsResponseMessage
         * @param SubscribeResponseMessageType $SubscribeResponseMessage
         * @param ResponseMessageType $UnsubscribeResponseMessage
         * @param SendNotificationResponseMessageType $SendNotificationResponseMessage
         * @param SyncFolderHierarchyResponseMessageType $SyncFolderHierarchyResponseMessage
         * @param SyncFolderItemsResponseMessageType $SyncFolderItemsResponseMessage
         * @param FolderInfoResponseMessageType $CreateManagedFolderResponseMessage
         * @param ConvertIdResponseMessageType $ConvertIdResponseMessage
         * @param GetSharingMetadataResponseMessageType $GetSharingMetadataResponseMessage
         * @param RefreshSharingFolderResponseMessageType $RefreshSharingFolderResponseMessage
         * @param GetSharingFolderResponseMessageType $GetSharingFolderResponseMessage
         * @param ResponseMessageType $CreateUserConfigurationResponseMessage
         * @param ResponseMessageType $DeleteUserConfigurationResponseMessage
         * @param GetUserConfigurationResponseMessageType $GetUserConfigurationResponseMessage
         * @param ResponseMessageType $UpdateUserConfigurationResponseMessage
         * @param GetRoomListsResponseMessageType $GetRoomListsResponse
         * @param GetRoomsResponseMessageType $GetRoomsResponse
         * @param ResponseMessageType $ApplyConversationActionResponseMessage
         * @param FindMailboxStatisticsByKeywordsResponseMessageType $FindMailboxStatisticsByKeywordsResponseMessage
         * @param GetPasswordExpirationDateResponseMessageType $GetPasswordExpirationDateResponse
         */
        public function __construct($CreateItemResponseMessage = null, $DeleteItemResponseMessage = null, $GetItemResponseMessage = null, $UpdateItemResponseMessage = null, $SendItemResponseMessage = null, $DeleteFolderResponseMessage = null, $EmptyFolderResponseMessage = null, $CreateFolderResponseMessage = null, $GetFolderResponseMessage = null, $FindFolderResponseMessage = null, $UpdateFolderResponseMessage = null, $MoveFolderResponseMessage = null, $CopyFolderResponseMessage = null, $CreateAttachmentResponseMessage = null, $DeleteAttachmentResponseMessage = null, $GetAttachmentResponseMessage = null, $UploadItemsResponseMessage = null, $ExportItemsResponseMessage = null, $FindItemResponseMessage = null, $MoveItemResponseMessage = null, $CopyItemResponseMessage = null, $ResolveNamesResponseMessage = null, $ExpandDLResponseMessage = null, $GetServerTimeZonesResponseMessage = null, $GetEventsResponseMessage = null, $GetStreamingEventsResponseMessage = null, $SubscribeResponseMessage = null, $UnsubscribeResponseMessage = null, $SendNotificationResponseMessage = null, $SyncFolderHierarchyResponseMessage = null, $SyncFolderItemsResponseMessage = null, $CreateManagedFolderResponseMessage = null, $ConvertIdResponseMessage = null, $GetSharingMetadataResponseMessage = null, $RefreshSharingFolderResponseMessage = null, $GetSharingFolderResponseMessage = null, $CreateUserConfigurationResponseMessage = null, $DeleteUserConfigurationResponseMessage = null, $GetUserConfigurationResponseMessage = null, $UpdateUserConfigurationResponseMessage = null, $GetRoomListsResponse = null, $GetRoomsResponse = null, $ApplyConversationActionResponseMessage = null, $FindMailboxStatisticsByKeywordsResponseMessage = null, $GetPasswordExpirationDateResponse = null)
        {
                $this->CreateItemResponseMessage = $CreateItemResponseMessage;
                $this->DeleteItemResponseMessage = $DeleteItemResponseMessage;
                $this->GetItemResponseMessage = $GetItemResponseMessage;
                $this->UpdateItemResponseMessage = $UpdateItemResponseMessage;
                $this->SendItemResponseMessage = $SendItemResponseMessage;
                $this->DeleteFolderResponseMessage = $DeleteFolderResponseMessage;
                $this->EmptyFolderResponseMessage = $EmptyFolderResponseMessage;
                $this->CreateFolderResponseMessage = $CreateFolderResponseMessage;
                $this->GetFolderResponseMessage = $GetFolderResponseMessage;
                $this->FindFolderResponseMessage = $FindFolderResponseMessage;
                $this->UpdateFolderResponseMessage = $UpdateFolderResponseMessage;
                $this->MoveFolderResponseMessage = $MoveFolderResponseMessage;
                $this->CopyFolderResponseMessage = $CopyFolderResponseMessage;
                $this->CreateAttachmentResponseMessage = $CreateAttachmentResponseMessage;
                $this->DeleteAttachmentResponseMessage = $DeleteAttachmentResponseMessage;
                $this->GetAttachmentResponseMessage = $GetAttachmentResponseMessage;
                $this->UploadItemsResponseMessage = $UploadItemsResponseMessage;
                $this->ExportItemsResponseMessage = $ExportItemsResponseMessage;
                $this->FindItemResponseMessage = $FindItemResponseMessage;
                $this->MoveItemResponseMessage = $MoveItemResponseMessage;
                $this->CopyItemResponseMessage = $CopyItemResponseMessage;
                $this->ResolveNamesResponseMessage = $ResolveNamesResponseMessage;
                $this->ExpandDLResponseMessage = $ExpandDLResponseMessage;
                $this->GetServerTimeZonesResponseMessage = $GetServerTimeZonesResponseMessage;
                $this->GetEventsResponseMessage = $GetEventsResponseMessage;
                $this->GetStreamingEventsResponseMessage = $GetStreamingEventsResponseMessage;
                $this->SubscribeResponseMessage = $SubscribeResponseMessage;
                $this->UnsubscribeResponseMessage = $UnsubscribeResponseMessage;
                $this->SendNotificationResponseMessage = $SendNotificationResponseMessage;
                $this->SyncFolderHierarchyResponseMessage = $SyncFolderHierarchyResponseMessage;
                $this->SyncFolderItemsResponseMessage = $SyncFolderItemsResponseMessage;
                $this->CreateManagedFolderResponseMessage = $CreateManagedFolderResponseMessage;
                $this->ConvertIdResponseMessage = $ConvertIdResponseMessage;
                $this->GetSharingMetadataResponseMessage = $GetSharingMetadataResponseMessage;
                $this->RefreshSharingFolderResponseMessage = $RefreshSharingFolderResponseMessage;
                $this->GetSharingFolderResponseMessage = $GetSharingFolderResponseMessage;
                $this->CreateUserConfigurationResponseMessage = $CreateUserConfigurationResponseMessage;
                $this->DeleteUserConfigurationResponseMessage = $DeleteUserConfigurationResponseMessage;
                $this->GetUserConfigurationResponseMessage = $GetUserConfigurationResponseMessage;
                $this->UpdateUserConfigurationResponseMessage = $UpdateUserConfigurationResponseMessage;
                $this->GetRoomListsResponse = $GetRoomListsResponse;
                $this->GetRoomsResponse = $GetRoomsResponse;
                $this->ApplyConversationActionResponseMessage = $ApplyConversationActionResponseMessage;
                $this->FindMailboxStatisticsByKeywordsResponseMessage = $FindMailboxStatisticsByKeywordsResponseMessage;
                $this->GetPasswordExpirationDateResponse = $GetPasswordExpirationDateResponse;
        }

        /**
         * @return ItemInfoResponseMessageType
         */
        public function getCreateItemResponseMessage()
        {
                return $this->CreateItemResponseMessage;
        }

        /**
         * @param ItemInfoResponseMessageType $CreateItemResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setCreateItemResponseMessage($CreateItemResponseMessage)
        {
                $this->CreateItemResponseMessage = $CreateItemResponseMessage;
                return $this;
        }

        /**
         * @return ResponseMessageType
         */
        public function getDeleteItemResponseMessage()
        {
                return $this->DeleteItemResponseMessage;
        }

        /**
         * @param ResponseMessageType $DeleteItemResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setDeleteItemResponseMessage($DeleteItemResponseMessage)
        {
                $this->DeleteItemResponseMessage = $DeleteItemResponseMessage;
                return $this;
        }

        /**
         * @return ItemInfoResponseMessageType
         */
        public function getGetItemResponseMessage()
        {
                return $this->GetItemResponseMessage;
        }

        /**
         * @param ItemInfoResponseMessageType $GetItemResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetItemResponseMessage($GetItemResponseMessage)
        {
                $this->GetItemResponseMessage = $GetItemResponseMessage;
                return $this;
        }

        /**
         * @return UpdateItemResponseMessageType
         */
        public function getUpdateItemResponseMessage()
        {
                return $this->UpdateItemResponseMessage;
        }

        /**
         * @param UpdateItemResponseMessageType $UpdateItemResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setUpdateItemResponseMessage($UpdateItemResponseMessage)
        {
                $this->UpdateItemResponseMessage = $UpdateItemResponseMessage;
                return $this;
        }

        /**
         * @return ResponseMessageType
         */
        public function getSendItemResponseMessage()
        {
                return $this->SendItemResponseMessage;
        }

        /**
         * @param ResponseMessageType $SendItemResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setSendItemResponseMessage($SendItemResponseMessage)
        {
                $this->SendItemResponseMessage = $SendItemResponseMessage;
                return $this;
        }

        /**
         * @return ResponseMessageType
         */
        public function getDeleteFolderResponseMessage()
        {
                return $this->DeleteFolderResponseMessage;
        }

        /**
         * @param ResponseMessageType $DeleteFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setDeleteFolderResponseMessage($DeleteFolderResponseMessage)
        {
                $this->DeleteFolderResponseMessage = $DeleteFolderResponseMessage;
                return $this;
        }

        /**
         * @return ResponseMessageType
         */
        public function getEmptyFolderResponseMessage()
        {
                return $this->EmptyFolderResponseMessage;
        }

        /**
         * @param ResponseMessageType $EmptyFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setEmptyFolderResponseMessage($EmptyFolderResponseMessage)
        {
                $this->EmptyFolderResponseMessage = $EmptyFolderResponseMessage;
                return $this;
        }

        /**
         * @return FolderInfoResponseMessageType
         */
        public function getCreateFolderResponseMessage()
        {
                return $this->CreateFolderResponseMessage;
        }

        /**
         * @param FolderInfoResponseMessageType $CreateFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setCreateFolderResponseMessage($CreateFolderResponseMessage)
        {
                $this->CreateFolderResponseMessage = $CreateFolderResponseMessage;
                return $this;
        }

        /**
         * @return FolderInfoResponseMessageType
         */
        public function getGetFolderResponseMessage()
        {
                return $this->GetFolderResponseMessage;
        }

        /**
         * @param FolderInfoResponseMessageType $GetFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetFolderResponseMessage($GetFolderResponseMessage)
        {
                $this->GetFolderResponseMessage = $GetFolderResponseMessage;
                return $this;
        }

        /**
         * @return FindFolderResponseMessageType
         */
        public function getFindFolderResponseMessage()
        {
                return $this->FindFolderResponseMessage;
        }

        /**
         * @param FindFolderResponseMessageType $FindFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setFindFolderResponseMessage($FindFolderResponseMessage)
        {
                $this->FindFolderResponseMessage = $FindFolderResponseMessage;
                return $this;
        }

        /**
         * @return FolderInfoResponseMessageType
         */
        public function getUpdateFolderResponseMessage()
        {
                return $this->UpdateFolderResponseMessage;
        }

        /**
         * @param FolderInfoResponseMessageType $UpdateFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setUpdateFolderResponseMessage($UpdateFolderResponseMessage)
        {
                $this->UpdateFolderResponseMessage = $UpdateFolderResponseMessage;
                return $this;
        }

        /**
         * @return FolderInfoResponseMessageType
         */
        public function getMoveFolderResponseMessage()
        {
                return $this->MoveFolderResponseMessage;
        }

        /**
         * @param FolderInfoResponseMessageType $MoveFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setMoveFolderResponseMessage($MoveFolderResponseMessage)
        {
                $this->MoveFolderResponseMessage = $MoveFolderResponseMessage;
                return $this;
        }

        /**
         * @return FolderInfoResponseMessageType
         */
        public function getCopyFolderResponseMessage()
        {
                return $this->CopyFolderResponseMessage;
        }

        /**
         * @param FolderInfoResponseMessageType $CopyFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setCopyFolderResponseMessage($CopyFolderResponseMessage)
        {
                $this->CopyFolderResponseMessage = $CopyFolderResponseMessage;
                return $this;
        }

        /**
         * @return AttachmentInfoResponseMessageType
         */
        public function getCreateAttachmentResponseMessage()
        {
                return $this->CreateAttachmentResponseMessage;
        }

        /**
         * @param AttachmentInfoResponseMessageType $CreateAttachmentResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setCreateAttachmentResponseMessage($CreateAttachmentResponseMessage)
        {
                $this->CreateAttachmentResponseMessage = $CreateAttachmentResponseMessage;
                return $this;
        }

        /**
         * @return DeleteAttachmentResponseMessageType
         */
        public function getDeleteAttachmentResponseMessage()
        {
                return $this->DeleteAttachmentResponseMessage;
        }

        /**
         * @param DeleteAttachmentResponseMessageType $DeleteAttachmentResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setDeleteAttachmentResponseMessage($DeleteAttachmentResponseMessage)
        {
                $this->DeleteAttachmentResponseMessage = $DeleteAttachmentResponseMessage;
                return $this;
        }

        /**
         * @return AttachmentInfoResponseMessageType
         */
        public function getGetAttachmentResponseMessage()
        {
                return $this->GetAttachmentResponseMessage;
        }

        /**
         * @param AttachmentInfoResponseMessageType $GetAttachmentResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetAttachmentResponseMessage($GetAttachmentResponseMessage)
        {
                $this->GetAttachmentResponseMessage = $GetAttachmentResponseMessage;
                return $this;
        }

        /**
         * @return UploadItemsResponseMessageType
         */
        public function getUploadItemsResponseMessage()
        {
                return $this->UploadItemsResponseMessage;
        }

        /**
         * @param UploadItemsResponseMessageType $UploadItemsResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setUploadItemsResponseMessage($UploadItemsResponseMessage)
        {
                $this->UploadItemsResponseMessage = $UploadItemsResponseMessage;
                return $this;
        }

        /**
         * @return ExportItemsResponseMessageType
         */
        public function getExportItemsResponseMessage()
        {
                return $this->ExportItemsResponseMessage;
        }

        /**
         * @param ExportItemsResponseMessageType $ExportItemsResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setExportItemsResponseMessage($ExportItemsResponseMessage)
        {
                $this->ExportItemsResponseMessage = $ExportItemsResponseMessage;
                return $this;
        }

        /**
         * @return FindItemResponseMessageType
         */
        public function getFindItemResponseMessage()
        {
                return $this->FindItemResponseMessage;
        }

        /**
         * @param FindItemResponseMessageType $FindItemResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setFindItemResponseMessage($FindItemResponseMessage)
        {
                $this->FindItemResponseMessage = $FindItemResponseMessage;
                return $this;
        }

        /**
         * @return ItemInfoResponseMessageType
         */
        public function getMoveItemResponseMessage()
        {
                return $this->MoveItemResponseMessage;
        }

        /**
         * @param ItemInfoResponseMessageType $MoveItemResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setMoveItemResponseMessage($MoveItemResponseMessage)
        {
                $this->MoveItemResponseMessage = $MoveItemResponseMessage;
                return $this;
        }

        /**
         * @return ItemInfoResponseMessageType
         */
        public function getCopyItemResponseMessage()
        {
                return $this->CopyItemResponseMessage;
        }

        /**
         * @param ItemInfoResponseMessageType $CopyItemResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setCopyItemResponseMessage($CopyItemResponseMessage)
        {
                $this->CopyItemResponseMessage = $CopyItemResponseMessage;
                return $this;
        }

        /**
         * @return ResolveNamesResponseMessageType
         */
        public function getResolveNamesResponseMessage()
        {
                return $this->ResolveNamesResponseMessage;
        }

        /**
         * @param ResolveNamesResponseMessageType $ResolveNamesResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setResolveNamesResponseMessage($ResolveNamesResponseMessage)
        {
                $this->ResolveNamesResponseMessage = $ResolveNamesResponseMessage;
                return $this;
        }

        /**
         * @return ExpandDLResponseMessageType
         */
        public function getExpandDLResponseMessage()
        {
                return $this->ExpandDLResponseMessage;
        }

        /**
         * @param ExpandDLResponseMessageType $ExpandDLResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setExpandDLResponseMessage($ExpandDLResponseMessage)
        {
                $this->ExpandDLResponseMessage = $ExpandDLResponseMessage;
                return $this;
        }

        /**
         * @return GetServerTimeZonesResponseMessageType
         */
        public function getGetServerTimeZonesResponseMessage()
        {
                return $this->GetServerTimeZonesResponseMessage;
        }

        /**
         * @param GetServerTimeZonesResponseMessageType $GetServerTimeZonesResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetServerTimeZonesResponseMessage($GetServerTimeZonesResponseMessage)
        {
                $this->GetServerTimeZonesResponseMessage = $GetServerTimeZonesResponseMessage;
                return $this;
        }

        /**
         * @return GetEventsResponseMessageType
         */
        public function getGetEventsResponseMessage()
        {
                return $this->GetEventsResponseMessage;
        }

        /**
         * @param GetEventsResponseMessageType $GetEventsResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetEventsResponseMessage($GetEventsResponseMessage)
        {
                $this->GetEventsResponseMessage = $GetEventsResponseMessage;
                return $this;
        }

        /**
         * @return GetStreamingEventsResponseMessageType
         */
        public function getGetStreamingEventsResponseMessage()
        {
                return $this->GetStreamingEventsResponseMessage;
        }

        /**
         * @param GetStreamingEventsResponseMessageType $GetStreamingEventsResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetStreamingEventsResponseMessage($GetStreamingEventsResponseMessage)
        {
                $this->GetStreamingEventsResponseMessage = $GetStreamingEventsResponseMessage;
                return $this;
        }

        /**
         * @return SubscribeResponseMessageType
         */
        public function getSubscribeResponseMessage()
        {
                return $this->SubscribeResponseMessage;
        }

        /**
         * @param SubscribeResponseMessageType $SubscribeResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setSubscribeResponseMessage($SubscribeResponseMessage)
        {
                $this->SubscribeResponseMessage = $SubscribeResponseMessage;
                return $this;
        }

        /**
         * @return ResponseMessageType
         */
        public function getUnsubscribeResponseMessage()
        {
                return $this->UnsubscribeResponseMessage;
        }

        /**
         * @param ResponseMessageType $UnsubscribeResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setUnsubscribeResponseMessage($UnsubscribeResponseMessage)
        {
                $this->UnsubscribeResponseMessage = $UnsubscribeResponseMessage;
                return $this;
        }

        /**
         * @return SendNotificationResponseMessageType
         */
        public function getSendNotificationResponseMessage()
        {
                return $this->SendNotificationResponseMessage;
        }

        /**
         * @param SendNotificationResponseMessageType $SendNotificationResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setSendNotificationResponseMessage($SendNotificationResponseMessage)
        {
                $this->SendNotificationResponseMessage = $SendNotificationResponseMessage;
                return $this;
        }

        /**
         * @return SyncFolderHierarchyResponseMessageType
         */
        public function getSyncFolderHierarchyResponseMessage()
        {
                return $this->SyncFolderHierarchyResponseMessage;
        }

        /**
         * @param SyncFolderHierarchyResponseMessageType $SyncFolderHierarchyResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setSyncFolderHierarchyResponseMessage($SyncFolderHierarchyResponseMessage)
        {
                $this->SyncFolderHierarchyResponseMessage = $SyncFolderHierarchyResponseMessage;
                return $this;
        }

        /**
         * @return SyncFolderItemsResponseMessageType
         */
        public function getSyncFolderItemsResponseMessage()
        {
                return $this->SyncFolderItemsResponseMessage;
        }

        /**
         * @param SyncFolderItemsResponseMessageType $SyncFolderItemsResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setSyncFolderItemsResponseMessage($SyncFolderItemsResponseMessage)
        {
                $this->SyncFolderItemsResponseMessage = $SyncFolderItemsResponseMessage;
                return $this;
        }

        /**
         * @return FolderInfoResponseMessageType
         */
        public function getCreateManagedFolderResponseMessage()
        {
                return $this->CreateManagedFolderResponseMessage;
        }

        /**
         * @param FolderInfoResponseMessageType $CreateManagedFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setCreateManagedFolderResponseMessage($CreateManagedFolderResponseMessage)
        {
                $this->CreateManagedFolderResponseMessage = $CreateManagedFolderResponseMessage;
                return $this;
        }

        /**
         * @return ConvertIdResponseMessageType
         */
        public function getConvertIdResponseMessage()
        {
                return $this->ConvertIdResponseMessage;
        }

        /**
         * @param ConvertIdResponseMessageType $ConvertIdResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setConvertIdResponseMessage($ConvertIdResponseMessage)
        {
                $this->ConvertIdResponseMessage = $ConvertIdResponseMessage;
                return $this;
        }

        /**
         * @return GetSharingMetadataResponseMessageType
         */
        public function getGetSharingMetadataResponseMessage()
        {
                return $this->GetSharingMetadataResponseMessage;
        }

        /**
         * @param GetSharingMetadataResponseMessageType $GetSharingMetadataResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetSharingMetadataResponseMessage($GetSharingMetadataResponseMessage)
        {
                $this->GetSharingMetadataResponseMessage = $GetSharingMetadataResponseMessage;
                return $this;
        }

        /**
         * @return RefreshSharingFolderResponseMessageType
         */
        public function getRefreshSharingFolderResponseMessage()
        {
                return $this->RefreshSharingFolderResponseMessage;
        }

        /**
         * @param RefreshSharingFolderResponseMessageType $RefreshSharingFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setRefreshSharingFolderResponseMessage($RefreshSharingFolderResponseMessage)
        {
                $this->RefreshSharingFolderResponseMessage = $RefreshSharingFolderResponseMessage;
                return $this;
        }

        /**
         * @return GetSharingFolderResponseMessageType
         */
        public function getGetSharingFolderResponseMessage()
        {
                return $this->GetSharingFolderResponseMessage;
        }

        /**
         * @param GetSharingFolderResponseMessageType $GetSharingFolderResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetSharingFolderResponseMessage($GetSharingFolderResponseMessage)
        {
                $this->GetSharingFolderResponseMessage = $GetSharingFolderResponseMessage;
                return $this;
        }

        /**
         * @return ResponseMessageType
         */
        public function getCreateUserConfigurationResponseMessage()
        {
                return $this->CreateUserConfigurationResponseMessage;
        }

        /**
         * @param ResponseMessageType $CreateUserConfigurationResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setCreateUserConfigurationResponseMessage($CreateUserConfigurationResponseMessage)
        {
                $this->CreateUserConfigurationResponseMessage = $CreateUserConfigurationResponseMessage;
                return $this;
        }

        /**
         * @return ResponseMessageType
         */
        public function getDeleteUserConfigurationResponseMessage()
        {
                return $this->DeleteUserConfigurationResponseMessage;
        }

        /**
         * @param ResponseMessageType $DeleteUserConfigurationResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setDeleteUserConfigurationResponseMessage($DeleteUserConfigurationResponseMessage)
        {
                $this->DeleteUserConfigurationResponseMessage = $DeleteUserConfigurationResponseMessage;
                return $this;
        }

        /**
         * @return GetUserConfigurationResponseMessageType
         */
        public function getGetUserConfigurationResponseMessage()
        {
                return $this->GetUserConfigurationResponseMessage;
        }

        /**
         * @param GetUserConfigurationResponseMessageType $GetUserConfigurationResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetUserConfigurationResponseMessage($GetUserConfigurationResponseMessage)
        {
                $this->GetUserConfigurationResponseMessage = $GetUserConfigurationResponseMessage;
                return $this;
        }

        /**
         * @return ResponseMessageType
         */
        public function getUpdateUserConfigurationResponseMessage()
        {
                return $this->UpdateUserConfigurationResponseMessage;
        }

        /**
         * @param ResponseMessageType $UpdateUserConfigurationResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setUpdateUserConfigurationResponseMessage($UpdateUserConfigurationResponseMessage)
        {
                $this->UpdateUserConfigurationResponseMessage = $UpdateUserConfigurationResponseMessage;
                return $this;
        }

        /**
         * @return GetRoomListsResponseMessageType
         */
        public function getGetRoomListsResponse()
        {
                return $this->GetRoomListsResponse;
        }

        /**
         * @param GetRoomListsResponseMessageType $GetRoomListsResponse
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetRoomListsResponse($GetRoomListsResponse)
        {
                $this->GetRoomListsResponse = $GetRoomListsResponse;
                return $this;
        }

        /**
         * @return GetRoomsResponseMessageType
         */
        public function getGetRoomsResponse()
        {
                return $this->GetRoomsResponse;
        }

        /**
         * @param GetRoomsResponseMessageType $GetRoomsResponse
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetRoomsResponse($GetRoomsResponse)
        {
                $this->GetRoomsResponse = $GetRoomsResponse;
                return $this;
        }

        /**
         * @return ResponseMessageType
         */
        public function getApplyConversationActionResponseMessage()
        {
                return $this->ApplyConversationActionResponseMessage;
        }

        /**
         * @param ResponseMessageType $ApplyConversationActionResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setApplyConversationActionResponseMessage($ApplyConversationActionResponseMessage)
        {
                $this->ApplyConversationActionResponseMessage = $ApplyConversationActionResponseMessage;
                return $this;
        }

        /**
         * @return FindMailboxStatisticsByKeywordsResponseMessageType
         */
        public function getFindMailboxStatisticsByKeywordsResponseMessage()
        {
                return $this->FindMailboxStatisticsByKeywordsResponseMessage;
        }

        /**
         * @param FindMailboxStatisticsByKeywordsResponseMessageType $FindMailboxStatisticsByKeywordsResponseMessage
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setFindMailboxStatisticsByKeywordsResponseMessage($FindMailboxStatisticsByKeywordsResponseMessage)
        {
                $this->FindMailboxStatisticsByKeywordsResponseMessage = $FindMailboxStatisticsByKeywordsResponseMessage;
                return $this;
        }

        /**
         * @return GetPasswordExpirationDateResponseMessageType
         */
        public function getGetPasswordExpirationDateResponse()
        {
                return $this->GetPasswordExpirationDateResponse;
        }

        /**
         * @param GetPasswordExpirationDateResponseMessageType $GetPasswordExpirationDateResponse
         * @return \UUP\Exchange\Types\ArrayOfResponseMessagesType
         */
        public function setGetPasswordExpirationDateResponse($GetPasswordExpirationDateResponse)
        {
                $this->GetPasswordExpirationDateResponse = $GetPasswordExpirationDateResponse;
                return $this;
        }

}
