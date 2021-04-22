<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Accepts an incoming call
 */
class AcceptCall extends TdFunction
{
    public const TYPE_NAME = 'acceptCall';

    /**
     * Call identifier
     *
     * @var int
     */
    protected int $callId;

    /**
     * Description of the call protocols supported by the application
     *
     * @var CallProtocol
     */
    protected CallProtocol $protocol;

    public function __construct(int $callId, CallProtocol $protocol)
    {
        $this->callId = $callId;
        $this->protocol = $protocol;
    }

    public static function fromArray(array $array): AcceptCall
    {
        return new static(
            $array['call_id'],
            TdSchemaRegistry::fromArray($array['protocol']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'call_id' => $this->callId,
            'protocol' => $this->protocol->typeSerialize(),
        ];
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getProtocol(): CallProtocol
    {
        return $this->protocol;
    }
}
