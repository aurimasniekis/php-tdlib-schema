<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The call has ended successfully.
 */
class CallStateDiscarded extends CallState
{
    public const TYPE_NAME = 'callStateDiscarded';

    /**
     * The reason, why the call has ended.
     */
    protected CallDiscardReason $reason;

    /**
     * True, if the call rating should be sent to the server.
     */
    protected bool $needRating;

    /**
     * True, if the call debug information should be sent to the server.
     */
    protected bool $needDebugInformation;

    public function __construct(CallDiscardReason $reason, bool $needRating, bool $needDebugInformation)
    {
        parent::__construct();

        $this->reason               = $reason;
        $this->needRating           = $needRating;
        $this->needDebugInformation = $needDebugInformation;
    }

    public static function fromArray(array $array): CallStateDiscarded
    {
        return new static(
            TdSchemaRegistry::fromArray($array['reason']),
            $array['need_rating'],
            $array['need_debug_information'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'reason'                 => $this->reason->typeSerialize(),
            'need_rating'            => $this->needRating,
            'need_debug_information' => $this->needDebugInformation,
        ];
    }

    public function getReason(): CallDiscardReason
    {
        return $this->reason;
    }

    public function getNeedRating(): bool
    {
        return $this->needRating;
    }

    public function getNeedDebugInformation(): bool
    {
        return $this->needDebugInformation;
    }
}
