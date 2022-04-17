<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message TTL was changed
 */
class ChatEventMessageTtlChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMessageTtlChanged';

    /**
     * Previous value of message_ttl
     *
     * @var int
     */
    protected int $oldMessageTtl;

    /**
     * New value of message_ttl
     *
     * @var int
     */
    protected int $newMessageTtl;

    public function __construct(int $oldMessageTtl, int $newMessageTtl)
    {
        parent::__construct();

        $this->oldMessageTtl = $oldMessageTtl;
        $this->newMessageTtl = $newMessageTtl;
    }

    public static function fromArray(array $array): ChatEventMessageTtlChanged
    {
        return new static(
            $array['old_message_ttl'],
            $array['new_message_ttl'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_message_ttl' => $this->oldMessageTtl,
            'new_message_ttl' => $this->newMessageTtl,
        ];
    }

    public function getOldMessageTtl(): int
    {
        return $this->oldMessageTtl;
    }

    public function getNewMessageTtl(): int
    {
        return $this->newMessageTtl;
    }
}
