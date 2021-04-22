<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an existing chat corresponding to a known supergroup or channel.
 */
class CreateSupergroupChat extends TdFunction
{
    public const TYPE_NAME = 'createSupergroupChat';

    /**
     * Supergroup or channel identifier.
     */
    protected int $supergroupId;

    /**
     * If true, the chat will be created without network request. In this case all information about the chat except its type, title and photo can be incorrect.
     */
    protected bool $force;

    public function __construct(int $supergroupId, bool $force)
    {
        $this->supergroupId = $supergroupId;
        $this->force        = $force;
    }

    public static function fromArray(array $array): CreateSupergroupChat
    {
        return new static(
            $array['supergroup_id'],
            $array['force'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'force'         => $this->force,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getForce(): bool
    {
        return $this->force;
    }
}
