<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat was pinned or unpinned.
 */
class UpdateChatIsPinned extends Update
{
    public const TYPE_NAME = 'updateChatIsPinned';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * New value of is_pinned.
     */
    protected bool $isPinned;

    /**
     * New value of the chat order.
     */
    protected string $order;

    public function __construct(int $chatId, bool $isPinned, string $order)
    {
        parent::__construct();

        $this->chatId   = $chatId;
        $this->isPinned = $isPinned;
        $this->order    = $order;
    }

    public static function fromArray(array $array): UpdateChatIsPinned
    {
        return new static(
            $array['chat_id'],
            $array['is_pinned'],
            $array['order'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'is_pinned' => $this->isPinned,
            'order'     => $this->order,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getOrder(): string
    {
        return $this->order;
    }
}
