<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat. (Can be a private chat, basic group, supergroup, or secret chat).
 */
class Chat extends TdObject
{
    public const TYPE_NAME = 'chat';

    /**
     * Chat unique identifier.
     *
     * @var int
     */
    protected int $id;

    /**
     * Type of the chat.
     *
     * @var ChatType
     */
    protected ChatType $type;

    /**
     * A chat list to which the chat belongs; may be null.
     *
     * @var ChatList|null
     */
    protected ?ChatList $chatList;

    /**
     * Chat title.
     *
     * @var string
     */
    protected string $title;

    /**
     * Chat photo; may be null.
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $photo;

    /**
     * Actions that non-administrator chat members are allowed to take in the chat.
     *
     * @var ChatPermissions
     */
    protected ChatPermissions $permissions;

    /**
     * Last message in the chat; may be null.
     *
     * @var Message|null
     */
    protected ?Message $lastMessage;

    /**
     * Descending parameter by which chats are sorted in the main chat list. If the order number of two chats is the same, they must be sorted in descending order by ID. If 0, the position of the chat in the list is undetermined.
     *
     * @var string
     */
    protected string $order;

    /**
     * True, if the chat is pinned.
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * True, if the chat is marked as unread.
     *
     * @var bool
     */
    protected bool $isMarkedAsUnread;

    /**
     * True, if the chat is sponsored by the user's MTProxy server.
     *
     * @var bool
     */
    protected bool $isSponsored;

    /**
     * True, if the chat has scheduled messages.
     *
     * @var bool
     */
    protected bool $hasScheduledMessages;

    /**
     * True, if the chat messages can be deleted only for the current user while other users will continue to see the messages.
     *
     * @var bool
     */
    protected bool $canBeDeletedOnlyForSelf;

    /**
     * True, if the chat messages can be deleted for all users.
     *
     * @var bool
     */
    protected bool $canBeDeletedForAllUsers;

    /**
     * True, if the chat can be reported to Telegram moderators through reportChat.
     *
     * @var bool
     */
    protected bool $canBeReported;

    /**
     * Default value of the disable_notification parameter, used when a message is sent to the chat.
     *
     * @var bool
     */
    protected bool $defaultDisableNotification;

    /**
     * Number of unread messages in the chat.
     *
     * @var int
     */
    protected int $unreadCount;

    /**
     * Identifier of the last read incoming message.
     *
     * @var int
     */
    protected int $lastReadInboxMessageId;

    /**
     * Identifier of the last read outgoing message.
     *
     * @var int
     */
    protected int $lastReadOutboxMessageId;

    /**
     * Number of unread messages with a mention/reply in the chat.
     *
     * @var int
     */
    protected int $unreadMentionCount;

    /**
     * Notification settings for this chat.
     *
     * @var ChatNotificationSettings
     */
    protected ChatNotificationSettings $notificationSettings;

    /**
     * Describes actions which should be possible to do through a chat action bar; may be null.
     *
     * @var ChatActionBar|null
     */
    protected ?ChatActionBar $actionBar;

    /**
     * Identifier of the pinned message in the chat; 0 if none.
     *
     * @var int
     */
    protected int $pinnedMessageId;

    /**
     * Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat.
     *
     * @var int
     */
    protected int $replyMarkupMessageId;

    /**
     * A draft of a message in the chat; may be null.
     *
     * @var DraftMessage|null
     */
    protected ?DraftMessage $draftMessage;

    /**
     * Contains client-specific data associated with the chat. (For example, the chat position or local chat notification settings can be stored here.) Persistent if the message database is used.
     *
     * @var string
     */
    protected string $clientData;

    public function __construct(
        int $id,
        ChatType $type,
        ?ChatList $chatList,
        string $title,
        ?ChatPhoto $photo,
        ChatPermissions $permissions,
        ?Message $lastMessage,
        string $order,
        bool $isPinned,
        bool $isMarkedAsUnread,
        bool $isSponsored,
        bool $hasScheduledMessages,
        bool $canBeDeletedOnlyForSelf,
        bool $canBeDeletedForAllUsers,
        bool $canBeReported,
        bool $defaultDisableNotification,
        int $unreadCount,
        int $lastReadInboxMessageId,
        int $lastReadOutboxMessageId,
        int $unreadMentionCount,
        ChatNotificationSettings $notificationSettings,
        ?ChatActionBar $actionBar,
        int $pinnedMessageId,
        int $replyMarkupMessageId,
        ?DraftMessage $draftMessage,
        string $clientData
    ) {
        $this->id                         = $id;
        $this->type                       = $type;
        $this->chatList                   = $chatList;
        $this->title                      = $title;
        $this->photo                      = $photo;
        $this->permissions                = $permissions;
        $this->lastMessage                = $lastMessage;
        $this->order                      = $order;
        $this->isPinned                   = $isPinned;
        $this->isMarkedAsUnread           = $isMarkedAsUnread;
        $this->isSponsored                = $isSponsored;
        $this->hasScheduledMessages       = $hasScheduledMessages;
        $this->canBeDeletedOnlyForSelf    = $canBeDeletedOnlyForSelf;
        $this->canBeDeletedForAllUsers    = $canBeDeletedForAllUsers;
        $this->canBeReported              = $canBeReported;
        $this->defaultDisableNotification = $defaultDisableNotification;
        $this->unreadCount                = $unreadCount;
        $this->lastReadInboxMessageId     = $lastReadInboxMessageId;
        $this->lastReadOutboxMessageId    = $lastReadOutboxMessageId;
        $this->unreadMentionCount         = $unreadMentionCount;
        $this->notificationSettings       = $notificationSettings;
        $this->actionBar                  = $actionBar;
        $this->pinnedMessageId            = $pinnedMessageId;
        $this->replyMarkupMessageId       = $replyMarkupMessageId;
        $this->draftMessage               = $draftMessage;
        $this->clientData                 = $clientData;
    }

    public static function fromArray(array $array): Chat
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['type']),
            (isset($array['chat_list']) ? TdSchemaRegistry::fromArray($array['chat_list']) : null),
            $array['title'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            TdSchemaRegistry::fromArray($array['permissions']),
            (isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null),
            $array['order'],
            $array['is_pinned'],
            $array['is_marked_as_unread'],
            $array['is_sponsored'],
            $array['has_scheduled_messages'],
            $array['can_be_deleted_only_for_self'],
            $array['can_be_deleted_for_all_users'],
            $array['can_be_reported'],
            $array['default_disable_notification'],
            $array['unread_count'],
            $array['last_read_inbox_message_id'],
            $array['last_read_outbox_message_id'],
            $array['unread_mention_count'],
            TdSchemaRegistry::fromArray($array['notification_settings']),
            (isset($array['action_bar']) ? TdSchemaRegistry::fromArray($array['action_bar']) : null),
            $array['pinned_message_id'],
            $array['reply_markup_message_id'],
            (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
            $array['client_data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                        => static::TYPE_NAME,
            'id'                           => $this->id,
            'type'                         => $this->type->typeSerialize(),
            'chat_list'                    => (isset($this->chatList) ? $this->chatList : null),
            'title'                        => $this->title,
            'photo'                        => (isset($this->photo) ? $this->photo : null),
            'permissions'                  => $this->permissions->typeSerialize(),
            'last_message'                 => (isset($this->lastMessage) ? $this->lastMessage : null),
            'order'                        => $this->order,
            'is_pinned'                    => $this->isPinned,
            'is_marked_as_unread'          => $this->isMarkedAsUnread,
            'is_sponsored'                 => $this->isSponsored,
            'has_scheduled_messages'       => $this->hasScheduledMessages,
            'can_be_deleted_only_for_self' => $this->canBeDeletedOnlyForSelf,
            'can_be_deleted_for_all_users' => $this->canBeDeletedForAllUsers,
            'can_be_reported'              => $this->canBeReported,
            'default_disable_notification' => $this->defaultDisableNotification,
            'unread_count'                 => $this->unreadCount,
            'last_read_inbox_message_id'   => $this->lastReadInboxMessageId,
            'last_read_outbox_message_id'  => $this->lastReadOutboxMessageId,
            'unread_mention_count'         => $this->unreadMentionCount,
            'notification_settings'        => $this->notificationSettings->typeSerialize(),
            'action_bar'                   => (isset($this->actionBar) ? $this->actionBar : null),
            'pinned_message_id'            => $this->pinnedMessageId,
            'reply_markup_message_id'      => $this->replyMarkupMessageId,
            'draft_message'                => (isset($this->draftMessage) ? $this->draftMessage : null),
            'client_data'                  => $this->clientData,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): ChatType
    {
        return $this->type;
    }

    public function getChatList(): ?ChatList
    {
        return $this->chatList;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }

    public function getLastMessage(): ?Message
    {
        return $this->lastMessage;
    }

    public function getOrder(): string
    {
        return $this->order;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    public function getIsSponsored(): bool
    {
        return $this->isSponsored;
    }

    public function getHasScheduledMessages(): bool
    {
        return $this->hasScheduledMessages;
    }

    public function getCanBeDeletedOnlyForSelf(): bool
    {
        return $this->canBeDeletedOnlyForSelf;
    }

    public function getCanBeDeletedForAllUsers(): bool
    {
        return $this->canBeDeletedForAllUsers;
    }

    public function getCanBeReported(): bool
    {
        return $this->canBeReported;
    }

    public function getDefaultDisableNotification(): bool
    {
        return $this->defaultDisableNotification;
    }

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function getLastReadInboxMessageId(): int
    {
        return $this->lastReadInboxMessageId;
    }

    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }

    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
    }

    public function getNotificationSettings(): ChatNotificationSettings
    {
        return $this->notificationSettings;
    }

    public function getActionBar(): ?ChatActionBar
    {
        return $this->actionBar;
    }

    public function getPinnedMessageId(): int
    {
        return $this->pinnedMessageId;
    }

    public function getReplyMarkupMessageId(): int
    {
        return $this->replyMarkupMessageId;
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }

    public function getClientData(): string
    {
        return $this->clientData;
    }
}
