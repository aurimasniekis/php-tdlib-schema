<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Edits the reply markup of an inline message sent via a bot; for bots only
 */
class EditInlineMessageReplyMarkup extends TdFunction
{
    public const TYPE_NAME = 'editInlineMessageReplyMarkup';

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

    public function __construct(string $inlineMessageId, ReplyMarkup $replyMarkup)
    {
        $this->inlineMessageId = $inlineMessageId;
        $this->replyMarkup = $replyMarkup;
    }

    public static function fromArray(array $array): EditInlineMessageReplyMarkup
    {
        return new static(
            $array['inline_message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
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
}
