<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a list of chat administrators
 */
class ChatAdministrators extends TdObject
{
    public const TYPE_NAME = 'chatAdministrators';

    /**
     * A list of chat administrators
     *
     * @var ChatAdministrator[]
     */
    protected array $administrators;

    public function __construct(array $administrators)
    {
        $this->administrators = $administrators;
    }

    public static function fromArray(array $array): ChatAdministrators
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['administrators']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->administrators),
        ];
    }

    public function getAdministrators(): array
    {
        return $this->administrators;
    }
}
