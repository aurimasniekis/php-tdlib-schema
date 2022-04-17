<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The call is pending, waiting to be accepted by a user
 */
class CallStatePending extends CallState
{
    public const TYPE_NAME = 'callStatePending';

    /**
     * True, if the call has already been created by the server
     *
     * @var bool
     */
    protected bool $isCreated;

    /**
     * True, if the call has already been received by the other party
     *
     * @var bool
     */
    protected bool $isReceived;

    public function __construct(bool $isCreated, bool $isReceived)
    {
        parent::__construct();

        $this->isCreated = $isCreated;
        $this->isReceived = $isReceived;
    }

    public static function fromArray(array $array): CallStatePending
    {
        return new static(
            $array['is_created'],
            $array['is_received'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_created' => $this->isCreated,
            'is_received' => $this->isReceived,
        ];
    }

    public function getIsCreated(): bool
    {
        return $this->isCreated;
    }

    public function getIsReceived(): bool
    {
        return $this->isReceived;
    }
}
