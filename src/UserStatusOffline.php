<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is offline
 */
class UserStatusOffline extends UserStatus
{
    public const TYPE_NAME = 'userStatusOffline';

    /**
     * Point in time (Unix timestamp) when the user was last online
     *
     * @var int
     */
    protected int $wasOnline;

    public function __construct(int $wasOnline)
    {
        parent::__construct();

        $this->wasOnline = $wasOnline;
    }

    public static function fromArray(array $array): UserStatusOffline
    {
        return new static(
            $array['was_online'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'was_online' => $this->wasOnline,
        ];
    }

    public function getWasOnline(): int
    {
        return $this->wasOnline;
    }
}
