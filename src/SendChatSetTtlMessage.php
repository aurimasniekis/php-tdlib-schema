<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the current TTL setting (sets a new self-destruct timer) in a secret chat and sends the corresponding message
 */
class SendChatSetTtlMessage extends TdFunction
{
    public const TYPE_NAME = 'sendChatSetTtlMessage';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New TTL value, in seconds
     *
     * @var int
     */
    protected int $ttl;

    public function __construct(int $chatId, int $ttl)
    {
        $this->chatId = $chatId;
        $this->ttl = $ttl;
    }

    public static function fromArray(array $array): SendChatSetTtlMessage
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
