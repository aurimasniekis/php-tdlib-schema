<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Terminates a session of the current user.
 */
class TerminateSession extends TdFunction
{
    public const TYPE_NAME = 'terminateSession';

    /**
     * Session identifier.
     *
     * @var int
     */
    protected int $sessionId;

    public function __construct(int $sessionId)
    {
        $this->sessionId = $sessionId;
    }

    public static function fromArray(array $array): TerminateSession
    {
        return new static(
            $array['session_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'session_id' => $this->sessionId,
        ];
    }

    public function getSessionId(): int
    {
        return $this->sessionId;
    }
}
