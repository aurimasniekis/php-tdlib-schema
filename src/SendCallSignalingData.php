<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends call signaling data.
 */
class SendCallSignalingData extends TdFunction
{
    public const TYPE_NAME = 'sendCallSignalingData';

    /**
     * Call identifier.
     */
    protected int $callId;

    /**
     * The data.
     */
    protected string $data;

    public function __construct(int $callId, string $data)
    {
        $this->callId = $callId;
        $this->data   = $data;
    }

    public static function fromArray(array $array): SendCallSignalingData
    {
        return new static(
            $array['call_id'],
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'call_id' => $this->callId,
            'data'    => $this->data,
        ];
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
