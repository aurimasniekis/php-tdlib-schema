<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends debug information for a call.
 */
class SendCallDebugInformation extends TdFunction
{
    public const TYPE_NAME = 'sendCallDebugInformation';

    /**
     * Call identifier.
     */
    protected int $callId;

    /**
     * Debug information in application-specific format.
     */
    protected string $debugInformation;

    public function __construct(int $callId, string $debugInformation)
    {
        $this->callId           = $callId;
        $this->debugInformation = $debugInformation;
    }

    public static function fromArray(array $array): SendCallDebugInformation
    {
        return new static(
            $array['call_id'],
            $array['debug_information'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'call_id'           => $this->callId,
            'debug_information' => $this->debugInformation,
        ];
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getDebugInformation(): string
    {
        return $this->debugInformation;
    }
}
