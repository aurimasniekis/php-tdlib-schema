<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the pinned state of a chat. You can pin up to GetOption("pinned_chat_count_max")/GetOption("pinned_archived_chat_count_max") non-secret chats and the same number of secret chats in the main/archive chat list.
 */
class ToggleChatIsPinned extends TdFunction
{
    public const TYPE_NAME = 'toggleChatIsPinned';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New value of is_pinned.
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(int $chatId, bool $isPinned)
    {
        $this->chatId   = $chatId;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): ToggleChatIsPinned
    {
        return new static(
            $array['chat_id'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'is_pinned' => $this->isPinned,
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
}
