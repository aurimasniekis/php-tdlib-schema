<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the period of inactivity after which the account of the current user will automatically be deleted.
 */
class SetAccountTtl extends TdFunction
{
    public const TYPE_NAME = 'setAccountTtl';

    /**
     * New account TTL.
     */
    protected AccountTtl $ttl;

    public function __construct(AccountTtl $ttl)
    {
        $this->ttl = $ttl;
    }

    public static function fromArray(array $array): SetAccountTtl
    {
        return new static(
            TdSchemaRegistry::fromArray($array['ttl']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'ttl'   => $this->ttl->typeSerialize(),
        ];
    }

    public function getTtl(): AccountTtl
    {
        return $this->ttl;
    }
}
