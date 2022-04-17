<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns users voted for the specified option in a non-anonymous polls. For optimal performance, the number of returned users is chosen by TDLib
 */
class GetPollVoters extends TdFunction
{
    public const TYPE_NAME = 'getPollVoters';

    /**
     * Identifier of the chat to which the poll belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message containing the poll
     *
     * @var int
     */
    protected int $messageId;

    /**
     * 0-based identifier of the answer option
     *
     * @var int
     */
    protected int $optionId;

    /**
     * Number of users to skip in the result; must be non-negative
     *
     * @var int
     */
    protected int $offset;

    /**
     * The maximum number of users to be returned; must be positive and can't be greater than 50. For optimal performance, the number of returned users is chosen by TDLib and can be smaller than the specified limit, even if the end of the voter list has not been reached
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $chatId, int $messageId, int $optionId, int $offset, int $limit)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->optionId = $optionId;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetPollVoters
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['option_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'option_id' => $this->optionId,
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getOptionId(): int
    {
        return $this->optionId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
