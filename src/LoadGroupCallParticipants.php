<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Loads more group call participants. The loaded participants will be received through updates. Use the field groupCall.loaded_all_participants to check whether all participants has already been loaded.
 */
class LoadGroupCallParticipants extends TdFunction
{
    public const TYPE_NAME = 'loadGroupCallParticipants';

    /**
     * Group call identifier. The group call must be previously received through getGroupCall and must be joined or being joined.
     */
    protected int $groupCallId;

    /**
     * Maximum number of participants to load.
     */
    protected int $limit;

    public function __construct(int $groupCallId, int $limit)
    {
        $this->groupCallId = $groupCallId;
        $this->limit       = $limit;
    }

    public static function fromArray(array $array): LoadGroupCallParticipants
    {
        return new static(
            $array['group_call_id'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'limit'         => $this->limit,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
