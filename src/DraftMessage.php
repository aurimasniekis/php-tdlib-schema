<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a message draft
 */
class DraftMessage extends TdObject
{
    public const TYPE_NAME = 'draftMessage';

    /**
     * Identifier of the message to reply to; 0 if none
     *
     * @var int
     */
    protected int $replyToMessageId;

    /**
     * Point in time (Unix timestamp) when the draft was created
     *
     * @var int
     */
    protected int $date;

    /**
     * Content of the message draft; must be of the type inputMessageText
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageText;

    public function __construct(int $replyToMessageId, int $date, InputMessageContent $inputMessageText)
    {
        $this->replyToMessageId = $replyToMessageId;
        $this->date = $date;
        $this->inputMessageText = $inputMessageText;
    }

    public static function fromArray(array $array): DraftMessage
    {
        return new static(
            $array['reply_to_message_id'],
            $array['date'],
            TdSchemaRegistry::fromArray($array['input_message_text']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'reply_to_message_id' => $this->replyToMessageId,
            'date' => $this->date,
            'input_message_text' => $this->inputMessageText->typeSerialize(),
        ];
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getInputMessageText(): InputMessageContent
    {
        return $this->inputMessageText;
    }
}
