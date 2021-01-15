<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Constructs a persistent HTTP URL for a background.
 */
class GetBackgroundUrl extends TdFunction
{
    public const TYPE_NAME = 'getBackgroundUrl';

    /**
     * Background name.
     *
     * @var string
     */
    protected string $name;

    /**
     * Background type.
     *
     * @var BackgroundType
     */
    protected BackgroundType $type;

    public function __construct(string $name, BackgroundType $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public static function fromArray(array $array): GetBackgroundUrl
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
            'type'  => $this->type->typeSerialize(),
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): BackgroundType
    {
        return $this->type;
    }
}
