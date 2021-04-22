<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat was blocked or unblocked.
 */
class UpdateChatIsBlocked extends Update
{
    public const TYPE_NAME = 'updateChatIsBlocked';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * New value of is_blocked.
     */
    protected bool $isBlocked;

    public function __construct(int $chatId, bool $isBlocked)
    {
        parent::__construct();

        $this->chatId    = $chatId;
        $this->isBlocked = $isBlocked;
    }

    public static function fromArray(array $array): UpdateChatIsBlocked
    {
        return new static(
            $array['chat_id'],
            $array['is_blocked'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'is_blocked' => $this->isBlocked,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }
}
