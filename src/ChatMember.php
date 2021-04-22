<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A user with information about joining/leaving a chat
 */
class ChatMember extends TdObject
{
    public const TYPE_NAME = 'chatMember';

    /**
     * User identifier of the chat member
     *
     * @var int
     */
    protected int $userId;

    /**
     * Identifier of a user that invited/promoted/banned this member in the chat; 0 if unknown
     *
     * @var int
     */
    protected int $inviterUserId;

    /**
     * Point in time (Unix timestamp) when the user joined the chat
     *
     * @var int
     */
    protected int $joinedChatDate;

    /**
     * Status of the member in the chat
     *
     * @var ChatMemberStatus
     */
    protected ChatMemberStatus $status;

    /**
     * If the user is a bot, information about the bot; may be null. Can be null even for a bot if the bot is not the chat member
     *
     * @var BotInfo|null
     */
    protected ?BotInfo $botInfo;

    public function __construct(
        int $userId,
        int $inviterUserId,
        int $joinedChatDate,
        ChatMemberStatus $status,
        ?BotInfo $botInfo
    ) {
        $this->userId = $userId;
        $this->inviterUserId = $inviterUserId;
        $this->joinedChatDate = $joinedChatDate;
        $this->status = $status;
        $this->botInfo = $botInfo;
    }

    public static function fromArray(array $array): ChatMember
    {
        return new static(
            $array['user_id'],
            $array['inviter_user_id'],
            $array['joined_chat_date'],
            TdSchemaRegistry::fromArray($array['status']),
            (isset($array['bot_info']) ? TdSchemaRegistry::fromArray($array['bot_info']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'inviter_user_id' => $this->inviterUserId,
            'joined_chat_date' => $this->joinedChatDate,
            'status' => $this->status->typeSerialize(),
            'bot_info' => (isset($this->botInfo) ? $this->botInfo : null),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getInviterUserId(): int
    {
        return $this->inviterUserId;
    }

    public function getJoinedChatDate(): int
    {
        return $this->joinedChatDate;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }

    public function getBotInfo(): ?BotInfo
    {
        return $this->botInfo;
    }
}
