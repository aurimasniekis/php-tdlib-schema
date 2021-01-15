<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the user answer to a poll. A poll in quiz mode can be answered only once.
 */
class SetPollAnswer extends TdFunction
{
    public const TYPE_NAME = 'setPollAnswer';

    /**
     * Identifier of the chat to which the poll belongs.
     */
    protected int $chatId;

    /**
     * Identifier of the message containing the poll.
     */
    protected int $messageId;

    /**
     * 0-based identifiers of answer options, chosen by the user. User can choose more than 1 answer option only is the poll allows multiple answers.
     *
     * @var int[]
     */
    protected array $optionIds;

    public function __construct(int $chatId, int $messageId, array $optionIds)
    {
        $this->chatId    = $chatId;
        $this->messageId = $messageId;
        $this->optionIds = $optionIds;
    }

    public static function fromArray(array $array): SetPollAnswer
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['option_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'option_ids' => $this->optionIds,
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

    public function getOptionIds(): array
    {
        return $this->optionIds;
    }
}
