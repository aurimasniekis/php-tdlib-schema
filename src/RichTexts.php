<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A concatenation of rich texts.
 */
class RichTexts extends RichText
{
    public const TYPE_NAME = 'richTexts';

    /**
     * Texts.
     *
     * @var RichText[]
     */
    protected array $texts;

    public function __construct(array $texts)
    {
        parent::__construct();

        $this->texts = $texts;
    }

    public static function fromArray(array $array): RichTexts
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['texts']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->texts),
        ];
    }

    public function getTexts(): array
    {
        return $this->texts;
    }
}
