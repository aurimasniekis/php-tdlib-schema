<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Edits the content of a message with an animation, an audio, a document, a photo or a video in an inline message sent via a bot; for bots only.
 */
class EditInlineMessageMedia extends TdFunction
{
    public const TYPE_NAME = 'editInlineMessageMedia';

    /**
     * Inline message identifier.
     */
    protected string $inlineMessageId;

    /**
     * The new message reply markup; for bots only.
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * New content of the message. Must be one of the following types: InputMessageAnimation, InputMessageAudio, InputMessageDocument, InputMessagePhoto or InputMessageVideo.
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(string $inlineMessageId, ReplyMarkup $replyMarkup, InputMessageContent $inputMessageContent)
    {
        $this->inlineMessageId     = $inlineMessageId;
        $this->replyMarkup         = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): EditInlineMessageMedia
    {
        return new static(
            $array['inline_message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'inline_message_id'     => $this->inlineMessageId,
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
