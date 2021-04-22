<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the username of the current user.
 */
class SetUsername extends TdFunction
{
    public const TYPE_NAME = 'setUsername';

    /**
     * The new value of the username. Use an empty string to remove the username.
     */
    protected string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public static function fromArray(array $array): SetUsername
    {
        return new static(
            $array['username'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'username' => $this->username,
        ];
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
