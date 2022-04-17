<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A list of chats belonging to a chat filter
 */
class ChatListFilter extends ChatList
{
    public const TYPE_NAME = 'chatListFilter';

    /**
     * Chat filter identifier
     *
     * @var int
     */
    protected int $chatFilterId;

    public function __construct(int $chatFilterId)
    {
        parent::__construct();

        $this->chatFilterId = $chatFilterId;
    }

    public static function fromArray(array $array): ChatListFilter
    {
        return new static(
            $array['chat_filter_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_filter_id' => $this->chatFilterId,
        ];
    }

    public function getChatFilterId(): int
    {
        return $this->chatFilterId;
    }
}
