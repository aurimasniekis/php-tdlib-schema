<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the call identifier.
 */
class CallId extends TdObject
{
    public const TYPE_NAME = 'callId';

    /**
     * Call identifier.
     *
     * @var int
     */
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public static function fromArray(array $array): CallId
    {
        return new static(
            $array['id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }
}
