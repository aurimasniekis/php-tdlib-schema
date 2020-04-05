<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Edits the content of a live location in an inline message sent via a bot; for bots only.
 */
class EditInlineMessageLiveLocation extends TdFunction
{
    public const TYPE_NAME = 'editInlineMessageLiveLocation';

    /**
     * Inline message identifier.
     *
     * @var string
     */
    protected string $inlineMessageId;

    /**
     * The new message reply markup.
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * New location content of the message; may be null. Pass null to stop sharing the live location.
     *
     * @var Location|null
     */
    protected ?Location $location;

    public function __construct(string $inlineMessageId, ReplyMarkup $replyMarkup, ?Location $location)
    {
        $this->inlineMessageId = $inlineMessageId;
        $this->replyMarkup     = $replyMarkup;
        $this->location        = $location;
    }

    public static function fromArray(array $array): EditInlineMessageLiveLocation
    {
        return new static(
            $array['inline_message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            (null !== $array['location'] ? TdSchemaRegistry::fromArray($array['location']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
            'reply_markup'      => $this->replyMarkup->typeSerialize(),
            'location'          => (null !== $this->location ? $this->location : null),
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

    public function getLocation(): ?Location
    {
        return $this->location;
    }
}
