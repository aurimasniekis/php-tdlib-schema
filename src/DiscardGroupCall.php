<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Discards a group call. Requires can_manage_voice_chats rights in the corresponding chat.
 */
class DiscardGroupCall extends TdFunction
{
    public const TYPE_NAME = 'discardGroupCall';

    /**
     * Group call identifier.
     */
    protected int $groupCallId;

    public function __construct(int $groupCallId)
    {
        $this->groupCallId = $groupCallId;
    }

    public static function fromArray(array $array): DiscardGroupCall
    {
        return new static(
            $array['group_call_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }
}
