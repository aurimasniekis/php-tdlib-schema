<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a user that sent a join request and waits for administrator approval
 */
class ChatJoinRequest extends TdObject
{
    public const TYPE_NAME = 'chatJoinRequest';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * Point in time (Unix timestamp) when the user sent the join request
     *
     * @var int
     */
    protected int $date;

    /**
     * A short bio of the user
     *
     * @var string
     */
    protected string $bio;

    public function __construct(int $userId, int $date, string $bio)
    {
        $this->userId = $userId;
        $this->date = $date;
        $this->bio = $bio;
    }

    public static function fromArray(array $array): ChatJoinRequest
    {
        return new static(
            $array['user_id'],
            $array['date'],
            $array['bio'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'date' => $this->date,
            'bio' => $this->bio,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getBio(): string
    {
        return $this->bio;
    }
}
