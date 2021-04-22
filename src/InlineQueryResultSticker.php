<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a sticker.
 */
class InlineQueryResultSticker extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultSticker';

    /**
     * Unique identifier of the query result.
     */
    protected string $id;

    /**
     * Sticker.
     */
    protected Sticker $sticker;

    public function __construct(string $id, Sticker $sticker)
    {
        parent::__construct();

        $this->id      = $id;
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): InlineQueryResultSticker
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'id'      => $this->id,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }
}
