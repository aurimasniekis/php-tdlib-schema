<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the block state of a message sender. Currently, only users and supergroup chats can be blocked.
 */
class ToggleMessageSenderIsBlocked extends TdFunction
{
    public const TYPE_NAME = 'toggleMessageSenderIsBlocked';

    /**
     * Message Sender.
     */
    protected MessageSender $sender;

    /**
     * New value of is_blocked.
     */
    protected bool $isBlocked;

    public function __construct(MessageSender $sender, bool $isBlocked)
    {
        $this->sender    = $sender;
        $this->isBlocked = $isBlocked;
    }

    public static function fromArray(array $array): ToggleMessageSenderIsBlocked
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sender']),
            $array['is_blocked'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'sender'     => $this->sender->typeSerialize(),
            'is_blocked' => $this->isBlocked,
        ];
    }

    public function getSender(): MessageSender
    {
        return $this->sender;
    }

    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }
}
