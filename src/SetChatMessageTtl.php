<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the message TTL in a chat. Requires can_delete_messages administrator right in basic groups, supergroups and channels Message TTL can't be changed in a chat with the current user (Saved Messages) and the chat 777000 (Telegram)
 */
class SetChatMessageTtl extends TdFunction
{
    public const TYPE_NAME = 'setChatMessageTtl';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New TTL value, in seconds; must be one of 0, 86400, 7 * 86400, or 31 * 86400 unless the chat is secret
     *
     * @var int
     */
    protected int $ttl;

    public function __construct(int $chatId, int $ttl)
    {
        $this->chatId = $chatId;
        $this->ttl = $ttl;
    }

    public static function fromArray(array $array): SetChatMessageTtl
    {
        return new static(
            $array['chat_id'],
            $array['ttl'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'ttl' => $this->ttl,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }
}
