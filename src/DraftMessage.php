<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a message draft.
 */
class DraftMessage extends TdObject
{
    public const TYPE_NAME = 'draftMessage';

    /**
     * Identifier of the message to reply to; 0 if none.
     *
     * @var int
     */
    protected int $replyToMessageId;

    /**
     * Content of the message draft; this should always be of type inputMessageText.
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageText;

    public function __construct(int $replyToMessageId, InputMessageContent $inputMessageText)
    {
        $this->replyToMessageId = $replyToMessageId;
        $this->inputMessageText = $inputMessageText;
    }

    public static function fromArray(array $array): DraftMessage
    {
        return new static(
            $array['reply_to_message_id'],
            TdSchemaRegistry::fromArray($array['input_message_text']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'reply_to_message_id' => $this->replyToMessageId,
            'input_message_text'  => $this->inputMessageText->typeSerialize(),
        ];
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getInputMessageText(): InputMessageContent
    {
        return $this->inputMessageText;
    }
}
