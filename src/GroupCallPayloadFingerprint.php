<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a payload fingerprint for interaction with tgcalls.
 */
class GroupCallPayloadFingerprint extends TdObject
{
    public const TYPE_NAME = 'groupCallPayloadFingerprint';

    /**
     * Value of the field hash.
     */
    protected string $hash;

    /**
     * Value of the field setup.
     */
    protected string $setup;

    /**
     * Value of the field fingerprint.
     */
    protected string $fingerprint;

    public function __construct(string $hash, string $setup, string $fingerprint)
    {
        $this->hash        = $hash;
        $this->setup       = $setup;
        $this->fingerprint = $fingerprint;
    }

    public static function fromArray(array $array): GroupCallPayloadFingerprint
    {
        return new static(
            $array['hash'],
            $array['setup'],
            $array['fingerprint'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'hash'        => $this->hash,
            'setup'       => $this->setup,
            'fingerprint' => $this->fingerprint,
        ];
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getSetup(): string
    {
        return $this->setup;
    }

    public function getFingerprint(): string
    {
        return $this->fingerprint;
    }
}
