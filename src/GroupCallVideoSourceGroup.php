<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a group of video synchronization source identifiers
 */
class GroupCallVideoSourceGroup extends TdObject
{
    public const TYPE_NAME = 'groupCallVideoSourceGroup';

    /**
     * The semantics of sources, one of "SIM" or "FID"
     *
     * @var string
     */
    protected string $semantics;

    /**
     * The list of synchronization source identifiers
     *
     * @var int[]
     */
    protected array $sourceIds;

    public function __construct(string $semantics, array $sourceIds)
    {
        $this->semantics = $semantics;
        $this->sourceIds = $sourceIds;
    }

    public static function fromArray(array $array): GroupCallVideoSourceGroup
    {
        return new static(
            $array['semantics'],
            $array['source_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'semantics' => $this->semantics,
            'source_ids' => $this->sourceIds,
        ];
    }

    public function getSemantics(): string
    {
        return $this->semantics;
    }

    public function getSourceIds(): array
    {
        return $this->sourceIds;
    }
}
