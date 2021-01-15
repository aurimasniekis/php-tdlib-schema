<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The linked chat of a supergroup was changed.
 */
class ChatEventLinkedChatChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventLinkedChatChanged';

    /**
     * Previous supergroup linked chat identifier.
     *
     * @var int
     */
    protected int $oldLinkedChatId;

    /**
     * New supergroup linked chat identifier.
     *
     * @var int
     */
    protected int $newLinkedChatId;

    public function __construct(int $oldLinkedChatId, int $newLinkedChatId)
    {
        parent::__construct();

        $this->oldLinkedChatId = $oldLinkedChatId;
        $this->newLinkedChatId = $newLinkedChatId;
    }

    public static function fromArray(array $array): ChatEventLinkedChatChanged
    {
        return new static(
            $array['old_linked_chat_id'],
            $array['new_linked_chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'old_linked_chat_id' => $this->oldLinkedChatId,
            'new_linked_chat_id' => $this->newLinkedChatId,
        ];
    }

    public function getOldLinkedChatId(): int
    {
        return $this->oldLinkedChatId;
    }

    public function getNewLinkedChatId(): int
    {
        return $this->newLinkedChatId;
    }
}
