<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat was marked as unread or was read.
 */
class UpdateChatIsMarkedAsUnread extends Update
{
    public const TYPE_NAME = 'updateChatIsMarkedAsUnread';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New value of is_marked_as_unread.
     *
     * @var bool
     */
    protected bool $isMarkedAsUnread;

    public function __construct(int $chatId, bool $isMarkedAsUnread)
    {
        parent::__construct();

        $this->chatId           = $chatId;
        $this->isMarkedAsUnread = $isMarkedAsUnread;
    }

    public static function fromArray(array $array): UpdateChatIsMarkedAsUnread
    {
        return new static(
            $array['chat_id'],
            $array['is_marked_as_unread'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'is_marked_as_unread' => $this->isMarkedAsUnread,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }
}
