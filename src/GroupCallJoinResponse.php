<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a join response for interaction with tgcalls.
 */
class GroupCallJoinResponse extends TdObject
{
    public const TYPE_NAME = 'groupCallJoinResponse';

    /**
     * Join response payload to pass to tgcalls.
     */
    protected GroupCallPayload $payload;

    /**
     * Join response candidates to pass to tgcalls.
     *
     * @var GroupCallJoinResponseCandidate[]
     */
    protected array $candidates;

    public function __construct(GroupCallPayload $payload, array $candidates)
    {
        $this->payload    = $payload;
        $this->candidates = $candidates;
    }

    public static function fromArray(array $array): GroupCallJoinResponse
    {
        return new static(
            TdSchemaRegistry::fromArray($array['payload']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['candidates']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'payload'         => $this->payload->typeSerialize(),
            array_map(fn ($x) => $x->typeSerialize(), $this->candidates),
        ];
    }

    public function getPayload(): GroupCallPayload
    {
        return $this->payload;
    }

    public function getCandidates(): array
    {
        return $this->candidates;
    }
}
