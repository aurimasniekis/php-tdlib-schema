<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Discards a call.
 */
class DiscardCall extends TdFunction
{
    public const TYPE_NAME = 'discardCall';

    /**
     * Call identifier.
     *
     * @var int
     */
    protected int $callId;

    /**
     * True, if the user was disconnected.
     *
     * @var bool
     */
    protected bool $isDisconnected;

    /**
     * The call duration, in seconds.
     *
     * @var int
     */
    protected int $duration;

    /**
     * Identifier of the connection used during the call.
     *
     * @var int
     */
    protected int $connectionId;

    public function __construct(int $callId, bool $isDisconnected, int $duration, int $connectionId)
    {
        $this->callId         = $callId;
        $this->isDisconnected = $isDisconnected;
        $this->duration       = $duration;
        $this->connectionId   = $connectionId;
    }

    public static function fromArray(array $array): DiscardCall
    {
        return new static(
            $array['call_id'],
            $array['is_disconnected'],
            $array['duration'],
            $array['connection_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'call_id'         => $this->callId,
            'is_disconnected' => $this->isDisconnected,
            'duration'        => $this->duration,
            'connection_id'   => $this->connectionId,
        ];
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getIsDisconnected(): bool
    {
        return $this->isDisconnected;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getConnectionId(): int
    {
        return $this->connectionId;
    }
}
