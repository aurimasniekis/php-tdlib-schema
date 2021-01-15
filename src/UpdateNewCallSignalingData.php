<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * New call signaling data arrived.
 */
class UpdateNewCallSignalingData extends Update
{
    public const TYPE_NAME = 'updateNewCallSignalingData';

    /**
     * The call identifier.
     */
    protected int $callId;

    /**
     * The data.
     */
    protected string $data;

    public function __construct(int $callId, string $data)
    {
        parent::__construct();

        $this->callId = $callId;
        $this->data   = $data;
    }

    public static function fromArray(array $array): UpdateNewCallSignalingData
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
