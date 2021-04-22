<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with an invoice from a bot.
 */
class PushMessageContentInvoice extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentInvoice';

    /**
     * Product price.
     */
    protected string $price;

    /**
     * True, if the message is a pinned message with the specified content.
     */
    protected bool $isPinned;

    public function __construct(string $price, bool $isPinned)
    {
        parent::__construct();

        $this->price    = $price;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentInvoice
    {
        return new static(
            $array['price'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'price'     => $this->price,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
