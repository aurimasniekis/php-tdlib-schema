<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Edits the caption of an inline message sent via a bot; for bots only
 */
class EditInlineMessageCaption extends TdFunction
{
    public const TYPE_NAME = 'editInlineMessageCaption';

    /**
     * Inline message identifier
     *
     * @var string
     */
    protected string $inlineMessageId;

    /**
     * The new message reply markup; pass null if none
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * New message content caption; pass null to remove caption; 0-GetOption("message_caption_length_max") characters
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(string $inlineMessageId, ReplyMarkup $replyMarkup, FormattedText $caption)
    {
        $this->inlineMessageId = $inlineMessageId;
        $this->replyMarkup = $replyMarkup;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): EditInlineMessageCaption
    {
        return new static(
            $array['inline_message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
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

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
