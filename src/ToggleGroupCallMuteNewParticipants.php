<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles whether new participants of a group call can be unmuted only by administrators of the group call. Requires can_manage_voice_chats rights in the corresponding chat and allowed_change_mute_mew_participants group call flag.
 */
class ToggleGroupCallMuteNewParticipants extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallMuteNewParticipants';

    /**
     * Group call identifier.
     */
    protected int $groupCallId;

    /**
     * New value of the mute_new_participants setting.
     */
    protected bool $muteNewParticipants;

    public function __construct(int $groupCallId, bool $muteNewParticipants)
    {
        $this->groupCallId         = $groupCallId;
        $this->muteNewParticipants = $muteNewParticipants;
    }

    public static function fromArray(array $array): ToggleGroupCallMuteNewParticipants
    {
        return new static(
            $array['group_call_id'],
            $array['mute_new_participants'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'group_call_id'         => $this->groupCallId,
            'mute_new_participants' => $this->muteNewParticipants,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getMuteNewParticipants(): bool
    {
        return $this->muteNewParticipants;
    }
}
