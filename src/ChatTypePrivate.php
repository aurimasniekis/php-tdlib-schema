<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An ordinary chat with a user.
 */
class ChatTypePrivate extends ChatType
{
    public const TYPE_NAME = 'chatTypePrivate';

    /**
     * User identifier.
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId)
    {
        parent::__construct();

        $this->userId = $userId;
    }

    public static function fromArray(array $array): ChatTypePrivate
    {
        return new static(
            $array['user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
