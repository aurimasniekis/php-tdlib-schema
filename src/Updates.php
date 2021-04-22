<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of updates
 */
class Updates extends TdObject
{
    public const TYPE_NAME = 'updates';

    /**
     * List of updates
     *
     * @var Update[]
     */
    protected array $updates;

    public function __construct(array $updates)
    {
        $this->updates = $updates;
    }

    public static function fromArray(array $array): Updates
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['updates']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->updates),
        ];
    }

    public function getUpdates(): array
    {
        return $this->updates;
    }
}
