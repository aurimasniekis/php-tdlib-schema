<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a message.
 */
class Message extends TdObject
{
    public const TYPE_NAME = 'message';

    /**
     * Message identifier, unique for the chat to which the message belongs.
     *
     * @var int
     */
    protected int $id;

    /**
     * Identifier of the user who sent the message; 0 if unknown. Currently, it is unknown for channel posts and for channel posts automatically forwarded to discussion group.
     *
     * @var int
     */
    protected int $senderUserId;

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Information about the sending state of the message; may be null.
     *
     * @var MessageSendingState|null
     */
    protected ?MessageSendingState $sendingState;

    /**
     * Information about the scheduling state of the message; may be null.
     *
     * @var MessageSchedulingState|null
     */
    protected ?MessageSchedulingState $schedulingState;

    /**
     * True, if the message is outgoing.
     *
     * @var bool
     */
    protected bool $isOutgoing;

    /**
     * True, if the message can be edited. For live location and poll messages this fields shows whether editMessageLiveLocation or stopPoll can be used with this message by the client.
     *
     * @var bool
     */
    protected bool $canBeEdited;

    /**
     * True, if the message can be forwarded.
     *
     * @var bool
     */
    protected bool $canBeForwarded;

    /**
     * True, if the message can be deleted only for the current user while other users will continue to see it.
     *
     * @var bool
     */
    protected bool $canBeDeletedOnlyForSelf;

    /**
     * True, if the message can be deleted for all users.
     *
     * @var bool
     */
    protected bool $canBeDeletedForAllUsers;

    /**
     * True, if the message is a channel post. All messages to channels are channel posts, all other messages are not channel posts.
     *
     * @var bool
     */
    protected bool $isChannelPost;

    /**
     * True, if the message contains an unread mention for the current user.
     *
     * @var bool
     */
    protected bool $containsUnreadMention;

    /**
     * Point in time (Unix timestamp) when the message was sent.
     *
     * @var int
     */
    protected int $date;

    /**
     * Point in time (Unix timestamp) when the message was last edited.
     *
     * @var int
     */
    protected int $editDate;

    /**
     * Information about the initial message sender; may be null.
     *
     * @var MessageForwardInfo|null
     */
    protected ?MessageForwardInfo $forwardInfo;

    /**
     * If non-zero, the identifier of the message this message is replying to; can be the identifier of a deleted message.
     *
     * @var int
     */
    protected int $replyToMessageId;

    /**
     * For self-destructing messages, the message's TTL (Time To Live), in seconds; 0 if none. TDLib will send updateDeleteMessages or updateMessageContent once the TTL expires.
     *
     * @var int
     */
    protected int $ttl;

    /**
     * Time left before the message expires, in seconds.
     *
     * @var float
     */
    protected float $ttlExpiresIn;

    /**
     * If non-zero, the user identifier of the bot through which this message was sent.
     *
     * @var int
     */
    protected int $viaBotUserId;

    /**
     * For channel posts, optional author signature.
     *
     * @var string
     */
    protected string $authorSignature;

    /**
     * Number of times this message was viewed.
     *
     * @var int
     */
    protected int $views;

    /**
     * Unique identifier of an album this message belongs to. Only photos and videos can be grouped together in albums.
     *
     * @var int
     */
    protected int $mediaAlbumId;

    /**
     * If non-empty, contains a human-readable description of the reason why access to this message must be restricted.
     *
     * @var string
     */
    protected string $restrictionReason;

    /**
     * Content of the message.
     *
     * @var MessageContent
     */
    protected MessageContent $content;

    /**
     * Reply markup for the message; may be null.
     *
     * @var ReplyMarkup|null
     */
    protected ?ReplyMarkup $replyMarkup;

    public function __construct(
        int $id,
        int $senderUserId,
        int $chatId,
        ?MessageSendingState $sendingState,
        ?MessageSchedulingState $schedulingState,
        bool $isOutgoing,
        bool $canBeEdited,
        bool $canBeForwarded,
        bool $canBeDeletedOnlyForSelf,
        bool $canBeDeletedForAllUsers,
        bool $isChannelPost,
        bool $containsUnreadMention,
        int $date,
        int $editDate,
        ?MessageForwardInfo $forwardInfo,
        int $replyToMessageId,
        int $ttl,
        float $ttlExpiresIn,
        int $viaBotUserId,
        string $authorSignature,
        int $views,
        int $mediaAlbumId,
        string $restrictionReason,
        MessageContent $content,
        ?ReplyMarkup $replyMarkup
    ) {
        $this->id                      = $id;
        $this->senderUserId            = $senderUserId;
        $this->chatId                  = $chatId;
        $this->sendingState            = $sendingState;
        $this->schedulingState         = $schedulingState;
        $this->isOutgoing              = $isOutgoing;
        $this->canBeEdited             = $canBeEdited;
        $this->canBeForwarded          = $canBeForwarded;
        $this->canBeDeletedOnlyForSelf = $canBeDeletedOnlyForSelf;
        $this->canBeDeletedForAllUsers = $canBeDeletedForAllUsers;
        $this->isChannelPost           = $isChannelPost;
        $this->containsUnreadMention   = $containsUnreadMention;
        $this->date                    = $date;
        $this->editDate                = $editDate;
        $this->forwardInfo             = $forwardInfo;
        $this->replyToMessageId        = $replyToMessageId;
        $this->ttl                     = $ttl;
        $this->ttlExpiresIn            = $ttlExpiresIn;
        $this->viaBotUserId            = $viaBotUserId;
        $this->authorSignature         = $authorSignature;
        $this->views                   = $views;
        $this->mediaAlbumId            = $mediaAlbumId;
        $this->restrictionReason       = $restrictionReason;
        $this->content                 = $content;
        $this->replyMarkup             = $replyMarkup;
    }

    public static function fromArray(array $array): Message
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            $array['chat_id'],
            (null !== $array['sending_state'] ? TdSchemaRegistry::fromArray($array['sending_state']) : null),
            (null !== $array['scheduling_state'] ? TdSchemaRegistry::fromArray($array['scheduling_state']) : null),
            $array['is_outgoing'],
            $array['can_be_edited'],
            $array['can_be_forwarded'],
            $array['can_be_deleted_only_for_self'],
            $array['can_be_deleted_for_all_users'],
            $array['is_channel_post'],
            $array['contains_unread_mention'],
            $array['date'],
            $array['edit_date'],
            (null !== $array['forward_info'] ? TdSchemaRegistry::fromArray($array['forward_info']) : null),
            $array['reply_to_message_id'],
            $array['ttl'],
            $array['ttl_expires_in'],
            $array['via_bot_user_id'],
            $array['author_signature'],
            $array['views'],
            $array['media_album_id'],
            $array['restriction_reason'],
            TdSchemaRegistry::fromArray($array['content']),
            (null !== $array['reply_markup'] ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                        => static::TYPE_NAME,
            'id'                           => $this->id,
            'sender_user_id'               => $this->senderUserId,
            'chat_id'                      => $this->chatId,
            'sending_state'                => (null !== $this->sendingState ? $this->sendingState : null),
            'scheduling_state'             => (null !== $this->schedulingState ? $this->schedulingState : null),
            'is_outgoing'                  => $this->isOutgoing,
            'can_be_edited'                => $this->canBeEdited,
            'can_be_forwarded'             => $this->canBeForwarded,
            'can_be_deleted_only_for_self' => $this->canBeDeletedOnlyForSelf,
            'can_be_deleted_for_all_users' => $this->canBeDeletedForAllUsers,
            'is_channel_post'              => $this->isChannelPost,
            'contains_unread_mention'      => $this->containsUnreadMention,
            'date'                         => $this->date,
            'edit_date'                    => $this->editDate,
            'forward_info'                 => (null !== $this->forwardInfo ? $this->forwardInfo : null),
            'reply_to_message_id'          => $this->replyToMessageId,
            'ttl'                          => $this->ttl,
            'ttl_expires_in'               => $this->ttlExpiresIn,
            'via_bot_user_id'              => $this->viaBotUserId,
            'author_signature'             => $this->authorSignature,
            'views'                        => $this->views,
            'media_album_id'               => $this->mediaAlbumId,
            'restriction_reason'           => $this->restrictionReason,
            'content'                      => $this->content->typeSerialize(),
            'reply_markup'                 => (null !== $this->replyMarkup ? $this->replyMarkup : null),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSendingState(): ?MessageSendingState
    {
        return $this->sendingState;
    }

    public function getSchedulingState(): ?MessageSchedulingState
    {
        return $this->schedulingState;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getCanBeForwarded(): bool
    {
        return $this->canBeForwarded;
    }

    public function getCanBeDeletedOnlyForSelf(): bool
    {
        return $this->canBeDeletedOnlyForSelf;
    }

    public function getCanBeDeletedForAllUsers(): bool
    {
        return $this->canBeDeletedForAllUsers;
    }

    public function getIsChannelPost(): bool
    {
        return $this->isChannelPost;
    }

    public function getContainsUnreadMention(): bool
    {
        return $this->containsUnreadMention;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getEditDate(): int
    {
        return $this->editDate;
    }

    public function getForwardInfo(): ?MessageForwardInfo
    {
        return $this->forwardInfo;
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }

    public function getTtlExpiresIn(): float
    {
        return $this->ttlExpiresIn;
    }

    public function getViaBotUserId(): int
    {
        return $this->viaBotUserId;
    }

    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }

    public function getViews(): int
    {
        return $this->views;
    }

    public function getMediaAlbumId(): int
    {
        return $this->mediaAlbumId;
    }

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    public function getContent(): MessageContent
    {
        return $this->content;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }
}
