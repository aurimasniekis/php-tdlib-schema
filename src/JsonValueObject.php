<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a JSON object
 */
class JsonValueObject extends JsonValue
{
    public const TYPE_NAME = 'jsonValueObject';

    /**
     * The list of object members
     *
     * @var JsonObjectMember[]
     */
    protected array $members;

    public function __construct(array $members)
    {
        parent::__construct();

        $this->members = $members;
    }

    public static function fromArray(array $array): JsonValueObject
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['members']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->members),
        ];
    }

    public function getMembers(): array
    {
        return $this->members;
    }
}
