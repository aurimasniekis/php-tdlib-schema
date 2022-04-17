<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles whether a session can accept incoming secret chats
 */
class ToggleSessionCanAcceptSecretChats extends TdFunction
{
    public const TYPE_NAME = 'toggleSessionCanAcceptSecretChats';

    /**
     * Session identifier
     *
     * @var string
     */
    protected string $sessionId;

    /**
     * True, if incoming secret chats can be accepted by the session
     *
     * @var bool
     */
    protected bool $canAcceptSecretChats;

    public function __construct(string $sessionId, bool $canAcceptSecretChats)
    {
        $this->sessionId = $sessionId;
        $this->canAcceptSecretChats = $canAcceptSecretChats;
    }

    public static function fromArray(array $array): ToggleSessionCanAcceptSecretChats
    {
        return new static(
            $array['session_id'],
            $array['can_accept_secret_chats'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'session_id' => $this->sessionId,
            'can_accept_secret_chats' => $this->canAcceptSecretChats,
        ];
    }

    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    public function getCanAcceptSecretChats(): bool
    {
        return $this->canAcceptSecretChats;
    }
}
