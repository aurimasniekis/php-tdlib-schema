<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the last message sent in a chat no later than the specified date
 */
class GetChatMessageByDate extends TdFunction
{
    public const TYPE_NAME = 'getChatMessageByDate';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Point in time (Unix timestamp) relative to which to search for messages
     *
     * @var int
     */
    protected int $date;

    public function __construct(int $chatId, int $date)
    {
        $this->chatId = $chatId;
        $this->date = $date;
    }

    public static function fromArray(array $array): GetChatMessageByDate
    {
        return new static(
            $array['chat_id'],
            $array['date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'date' => $this->date,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDate(): int
    {
        return $this->date;
    }
}
