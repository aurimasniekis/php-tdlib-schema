<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message was sent by a known user.
 */
class MessageSenderUser extends MessageSender
{
    public const TYPE_NAME = 'messageSenderUser';

    /**
     * Identifier of the user that sent the message.
     */
    protected int $userId;

    public function __construct(int $userId)
    {
        parent::__construct();

        $this->userId = $userId;
    }

    public static function fromArray(array $array): MessageSenderUser
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
