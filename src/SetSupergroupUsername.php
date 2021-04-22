<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the username of a supergroup or channel, requires owner privileges in the supergroup or channel.
 */
class SetSupergroupUsername extends TdFunction
{
    public const TYPE_NAME = 'setSupergroupUsername';

    /**
     * Identifier of the supergroup or channel.
     */
    protected int $supergroupId;

    /**
     * New value of the username. Use an empty string to remove the username.
     */
    protected string $username;

    public function __construct(int $supergroupId, string $username)
    {
        $this->supergroupId = $supergroupId;
        $this->username     = $username;
    }

    public static function fromArray(array $array): SetSupergroupUsername
    {
        return new static(
            $array['supergroup_id'],
            $array['username'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'username'      => $this->username,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
