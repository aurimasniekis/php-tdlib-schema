<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles whether a session can accept incoming calls
 */
class ToggleSessionCanAcceptCalls extends TdFunction
{
    public const TYPE_NAME = 'toggleSessionCanAcceptCalls';

    /**
     * Session identifier
     *
     * @var string
     */
    protected string $sessionId;

    /**
     * True, if incoming calls can be accepted by the session
     *
     * @var bool
     */
    protected bool $canAcceptCalls;

    public function __construct(string $sessionId, bool $canAcceptCalls)
    {
        $this->sessionId = $sessionId;
        $this->canAcceptCalls = $canAcceptCalls;
    }

    public static function fromArray(array $array): ToggleSessionCanAcceptCalls
    {
        return new static(
            $array['session_id'],
            $array['can_accept_calls'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'session_id' => $this->sessionId,
            'can_accept_calls' => $this->canAcceptCalls,
        ];
    }

    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    public function getCanAcceptCalls(): bool
    {
        return $this->canAcceptCalls;
    }
}
