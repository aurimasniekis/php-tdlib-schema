<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Closes a secret chat, effectively transferring its state to secretChatStateClosed.
 */
class CloseSecretChat extends TdFunction
{
    public const TYPE_NAME = 'closeSecretChat';

    /**
     * Secret chat identifier.
     *
     * @var int
     */
    protected int $secretChatId;

    public function __construct(int $secretChatId)
    {
        $this->secretChatId = $secretChatId;
    }

    public static function fromArray(array $array): CloseSecretChat
    {
        return new static(
            $array['secret_chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'secret_chat_id' => $this->secretChatId,
        ];
    }

    public function getSecretChatId(): int
    {
        return $this->secretChatId;
    }
}
