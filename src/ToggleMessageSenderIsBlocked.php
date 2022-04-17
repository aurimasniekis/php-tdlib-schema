<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the block state of a message sender. Currently, only users and supergroup chats can be blocked
 */
class ToggleMessageSenderIsBlocked extends TdFunction
{
    public const TYPE_NAME = 'toggleMessageSenderIsBlocked';

    /**
     * Identifier of a message sender to block/unblock
     *
     * @var MessageSender
     */
    protected MessageSender $senderId;

    /**
     * New value of is_blocked
     *
     * @var bool
     */
    protected bool $isBlocked;

    public function __construct(MessageSender $senderId, bool $isBlocked)
    {
        $this->senderId = $senderId;
        $this->isBlocked = $isBlocked;
    }

    public static function fromArray(array $array): ToggleMessageSenderIsBlocked
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['is_blocked'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sender_id' => $this->senderId->typeSerialize(),
            'is_blocked' => $this->isBlocked,
        ];
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }
}
