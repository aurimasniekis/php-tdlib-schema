<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a closed vector path. The path begins at the end point of the last command.
 */
class ClosedVectorPath extends TdObject
{
    public const TYPE_NAME = 'closedVectorPath';

    /**
     * List of vector path commands.
     *
     * @var VectorPathCommand[]
     */
    protected array $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public static function fromArray(array $array): ClosedVectorPath
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->commands),
        ];
    }

    public function getCommands(): array
    {
        return $this->commands;
    }
}
