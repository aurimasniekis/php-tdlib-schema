<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a part of the text that needs to be formatted in some unusual way.
 */
class TextEntity extends TdObject
{
    public const TYPE_NAME = 'textEntity';

    /**
     * Offset of the entity, in UTF-16 code units.
     */
    protected int $offset;

    /**
     * Length of the entity, in UTF-16 code units.
     */
    protected int $length;

    /**
     * Type of the entity.
     */
    protected TextEntityType $type;

    public function __construct(int $offset, int $length, TextEntityType $type)
    {
        $this->offset = $offset;
        $this->length = $length;
        $this->type   = $type;
    }

    public static function fromArray(array $array): TextEntity
    {
        return new static(
            $array['offset'],
            $array['length'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'offset' => $this->offset,
            'length' => $this->length,
            'type'   => $this->type->typeSerialize(),
        ];
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getType(): TextEntityType
    {
        return $this->type;
    }
}
