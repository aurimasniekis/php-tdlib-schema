<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A secret chat with a user
 */
class ChatTypeSecret extends ChatType
{
    public const TYPE_NAME = 'chatTypeSecret';

    /**
     * Secret chat identifier
     *
     * @var int
     */
    protected int $secretChatId;

    /**
     * User identifier of the secret chat peer
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $secretChatId, int $userId)
    {
        parent::__construct();

        $this->secretChatId = $secretChatId;
        $this->userId = $userId;
    }

    public static function fromArray(array $array): ChatTypeSecret
    {
        return new static(
            $array['secret_chat_id'],
            $array['user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'secret_chat_id' => $this->secretChatId,
            'user_id' => $this->userId,
        ];
    }

    public function getSecretChatId(): int
    {
        return $this->secretChatId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
