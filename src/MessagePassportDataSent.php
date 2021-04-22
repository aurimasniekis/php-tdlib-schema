<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Telegram Passport data has been sent.
 */
class MessagePassportDataSent extends MessageContent
{
    public const TYPE_NAME = 'messagePassportDataSent';

    /**
     * List of Telegram Passport element types sent.
     *
     * @var PassportElementType[]
     */
    protected array $types;

    public function __construct(array $types)
    {
        parent::__construct();

        $this->types = $types;
    }

    public static function fromArray(array $array): MessagePassportDataSent
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['types']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->types),
        ];
    }

    public function getTypes(): array
    {
        return $this->types;
    }
}
