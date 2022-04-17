<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Ends a group call. Requires groupCall.can_be_managed
 */
class EndGroupCall extends TdFunction
{
    public const TYPE_NAME = 'endGroupCall';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    public function __construct(int $groupCallId)
    {
        $this->groupCallId = $groupCallId;
    }

    public static function fromArray(array $array): EndGroupCall
    {
        return new static(
            $array['group_call_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }
}
