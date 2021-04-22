<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A sticker message.
 */
class MessageSticker extends MessageContent
{
    public const TYPE_NAME = 'messageSticker';

    /**
     * The sticker description.
     */
    protected Sticker $sticker;

    public function __construct(Sticker $sticker)
    {
        parent::__construct();

        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): MessageSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }
}
