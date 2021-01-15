<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the slow mode delay of a chat. Available only for supergroups; requires can_restrict_members rights.
 */
class SetChatSlowModeDelay extends TdFunction
{
    public const TYPE_NAME = 'setChatSlowModeDelay';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New slow mode delay for the chat; must be one of 0, 10, 30, 60, 300, 900, 3600.
     *
     * @var int
     */
    protected int $slowModeDelay;

    public function __construct(int $chatId, int $slowModeDelay)
    {
        $this->chatId        = $chatId;
        $this->slowModeDelay = $slowModeDelay;
    }

    public static function fromArray(array $array): SetChatSlowModeDelay
    {
        return new static(
            $array['chat_id'],
            $array['slow_mode_delay'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'slow_mode_delay' => $this->slowModeDelay,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSlowModeDelay(): int
    {
        return $this->slowModeDelay;
    }
}
