<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an existing chat corresponding to a given user.
 */
class CreatePrivateChat extends TdFunction
{
    public const TYPE_NAME = 'createPrivateChat';

    /**
     * User identifier.
     *
     * @var int
     */
    protected int $userId;

    /**
     * If true, the chat will be created without network request. In this case all information about the chat except its type, title and photo can be incorrect.
     *
     * @var bool
     */
    protected bool $force;

    public function __construct(int $userId, bool $force)
    {
        $this->userId = $userId;
        $this->force  = $force;
    }

    public static function fromArray(array $array): CreatePrivateChat
    {
        return new static(
            $array['user_id'],
            $array['force'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'force'   => $this->force,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getForce(): bool
    {
        return $this->force;
    }
}
