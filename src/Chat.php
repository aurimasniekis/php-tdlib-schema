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
     */
    protected int $id;

    /**
     * Type of the chat.
     */
    protected ChatType $type;

    /**
     * Chat title.
     */
    protected string $title;

    /**
     * Chat photo; may be null.
     */
    protected ?ChatPhotoInfo $photo;

    /**
     * Actions that non-administrator chat members are allowed to take in the chat.
     */
    protected ChatPermissions $permissions;

    /**
     * Last message in the chat; may be null.
     */
    protected ?Message $lastMessage;

    /**
     * Positions of the chat in chat lists.
     *
     * @var ChatPosition[]
     */
    protected array $positions;

    /**
     * True, if the chat is marked as unread.
     */
    protected bool $isMarkedAsUnread;

    /**
     * True, if the chat is blocked by the current user and private messages from the chat can't be received.
     */
    protected bool $isBlocked;

    /**
     * True, if the chat has scheduled messages.
     */
    protected bool $hasScheduledMessages;

    /**
     * True, if the chat messages can be deleted only for the current user while other users will continue to see the messages.
     */
    protected bool $canBeDeletedOnlyForSelf;

    /**
     * True, if the chat messages can be deleted for all users.
     */
    protected bool $canBeDeletedForAllUsers;

    /**
     * True, if the chat can be reported to Telegram moderators through reportChat.
     */
    protected bool $canBeReported;

    /**
     * Default value of the disable_notification parameter, used when a message is sent to the chat.
     */
    protected bool $defaultDisableNotification;

    /**
     * Number of unread messages in the chat.
     */
    protected int $unreadCount;

    /**
     * Identifier of the last read incoming message.
     */
    protected int $lastReadInboxMessageId;

    /**
     * Identifier of the last read outgoing message.
     */
    protected int $lastReadOutboxMessageId;

    /**
     * Number of unread messages with a mention/reply in the chat.
     */
    protected int $unreadMentionCount;

    /**
     * Notification settings for this chat.
     */
    protected ChatNotificationSettings $notificationSettings;

    /**
     * Describes actions which should be possible to do through a chat action bar; may be null.
     */
    protected ?ChatActionBar $actionBar;

    /**
     * Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat.
     */
    protected int $replyMarkupMessageId;

    /**
     * A draft of a message in the chat; may be null.
     */
    protected ?DraftMessage $draftMessage;

    /**
     * Contains application-specific data associated with the chat. (For example, the chat scroll position or local chat notification settings can be stored here.) Persistent if the message database is used.
     */
    protected string $clientData;

    public function __construct(
        int $id,
        ChatType $type,
        string $title,
        ?ChatPhotoInfo $photo,
        ChatPermissions $permissions,
        ?Message $lastMessage,
        array $positions,
        bool $isMarkedAsUnread,
        bool $isBlocked,
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
        int $replyMarkupMessageId,
        ?DraftMessage $draftMessage,
        string $clientData
    ) {
        $this->id                         = $id;
        $this->type                       = $type;
        $this->title                      = $title;
        $this->photo                      = $photo;
        $this->permissions                = $permissions;
        $this->lastMessage                = $lastMessage;
        $this->positions                  = $positions;
        $this->isMarkedAsUnread           = $isMarkedAsUnread;
        $this->isBlocked                  = $isBlocked;
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
        $this->replyMarkupMessageId       = $replyMarkupMessageId;
        $this->draftMessage               = $draftMessage;
        $this->clientData                 = $clientData;
    }

    public static function fromArray(array $array): Chat
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['title'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            TdSchemaRegistry::fromArray($array['permissions']),
            (isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['positions']),
            $array['is_marked_as_unread'],
            $array['is_blocked'],
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
            'title'                        => $this->title,
            'photo'                        => (isset($this->photo) ? $this->photo : null),
            'permissions'                  => $this->permissions->typeSerialize(),
            'last_message'                 => (isset($this->lastMessage) ? $this->lastMessage : null),
            array_map(fn ($x)              => $x->typeSerialize(), $this->positions),
            'is_marked_as_unread'          => $this->isMarkedAsUnread,
            'is_blocked'                   => $this->isBlocked,
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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPhoto(): ?ChatPhotoInfo
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

    public function getPositions(): array
    {
        return $this->positions;
    }

    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
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
