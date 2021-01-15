<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a payload for interaction with tgcalls.
 */
class GroupCallPayload extends TdObject
{
    public const TYPE_NAME = 'groupCallPayload';

    /**
     * Value of the field ufrag.
     */
    protected string $ufrag;

    /**
     * Value of the field pwd.
     */
    protected string $pwd;

    /**
     * The list of fingerprints.
     *
     * @var GroupCallPayloadFingerprint[]
     */
    protected array $fingerprints;

    public function __construct(string $ufrag, string $pwd, array $fingerprints)
    {
        $this->ufrag        = $ufrag;
        $this->pwd          = $pwd;
        $this->fingerprints = $fingerprints;
    }

    public static function fromArray(array $array): GroupCallPayload
    {
        return new static(
            $array['ufrag'],
            $array['pwd'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['fingerprints']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'ufrag'           => $this->ufrag,
            'pwd'             => $this->pwd,
            array_map(fn ($x) => $x->typeSerialize(), $this->fingerprints),
        ];
    }

    public function getUfrag(): string
    {
        return $this->ufrag;
    }

    public function getPwd(): string
    {
        return $this->pwd;
    }

    public function getFingerprints(): array
    {
        return $this->fingerprints;
    }
}
