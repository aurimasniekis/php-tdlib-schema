<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about the recent locations of chat members that were sent to the chat. Returns up to 1 location message per user
 */
class SearchChatRecentLocationMessages extends TdFunction
{
    public const TYPE_NAME = 'searchChatRecentLocationMessages';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The maximum number of messages to be returned
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $chatId, int $limit)
    {
        $this->chatId = $chatId;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchChatRecentLocationMessages
    {
        return new static(
            $array['chat_id'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'limit' => $this->limit,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
