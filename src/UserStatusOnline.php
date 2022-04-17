<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is online
 */
class UserStatusOnline extends UserStatus
{
    public const TYPE_NAME = 'userStatusOnline';

    /**
     * Point in time (Unix timestamp) when the user's online status will expire
     *
     * @var int
     */
    protected int $expires;

    public function __construct(int $expires)
    {
        parent::__construct();

        $this->expires = $expires;
    }

    public static function fromArray(array $array): UserStatusOnline
    {
        return new static(
            $array['expires'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'expires' => $this->expires,
        ];
    }

    public function getExpires(): int
    {
        return $this->expires;
    }
}
