<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The TTL (Time To Live) setting messages in a secret chat has been changed
 */
class MessageChatSetTtl extends MessageContent
{
    public const TYPE_NAME = 'messageChatSetTtl';

    /**
     * New TTL
     *
     * @var int
     */
    protected int $ttl;

    public function __construct(int $ttl)
    {
        parent::__construct();

        $this->ttl = $ttl;
    }

    public static function fromArray(array $array): MessageChatSetTtl
    {
        return new static(
            $array['ttl'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'ttl' => $this->ttl,
        ];
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }
}
