<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The mute_new_participants setting of a video chat was toggled
 */
class ChatEventVideoChatMuteNewParticipantsToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventVideoChatMuteNewParticipantsToggled';

    /**
     * New value of the mute_new_participants setting
     *
     * @var bool
     */
    protected bool $muteNewParticipants;

    public function __construct(bool $muteNewParticipants)
    {
        parent::__construct();

        $this->muteNewParticipants = $muteNewParticipants;
    }

    public static function fromArray(array $array): ChatEventVideoChatMuteNewParticipantsToggled
    {
        return new static(
            $array['mute_new_participants'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'mute_new_participants' => $this->muteNewParticipants,
        ];
    }

    public function getMuteNewParticipants(): bool
    {
        return $this->muteNewParticipants;
    }
}
