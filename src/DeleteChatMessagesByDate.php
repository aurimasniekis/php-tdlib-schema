<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes all messages between the specified dates in a chat. Supported only for private chats and basic groups. Messages sent in the last 30 seconds will not be deleted
 */
class DeleteChatMessagesByDate extends TdFunction
{
    public const TYPE_NAME = 'deleteChatMessagesByDate';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The minimum date of the messages to delete
     *
     * @var int
     */
    protected int $minDate;

    /**
     * The maximum date of the messages to delete
     *
     * @var int
     */
    protected int $maxDate;

    /**
     * Pass true to delete chat messages for all users; private chats only
     *
     * @var bool
     */
    protected bool $revoke;

    public function __construct(int $chatId, int $minDate, int $maxDate, bool $revoke)
    {
        $this->chatId = $chatId;
        $this->minDate = $minDate;
        $this->maxDate = $maxDate;
        $this->revoke = $revoke;
    }

    public static function fromArray(array $array): DeleteChatMessagesByDate
    {
        return new static(
            $array['chat_id'],
            $array['min_date'],
            $array['max_date'],
            $array['revoke'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'min_date' => $this->minDate,
            'max_date' => $this->maxDate,
            'revoke' => $this->revoke,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMinDate(): int
    {
        return $this->minDate;
    }

    public function getMaxDate(): int
    {
        return $this->maxDate;
    }

    public function getRevoke(): bool
    {
        return $this->revoke;
    }
}
