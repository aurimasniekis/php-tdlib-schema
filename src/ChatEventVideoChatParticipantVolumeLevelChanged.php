<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A video chat participant volume level was changed
 */
class ChatEventVideoChatParticipantVolumeLevelChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventVideoChatParticipantVolumeLevelChanged';

    /**
     * Identifier of the affected group call participant
     *
     * @var MessageSender
     */
    protected MessageSender $participantId;

    /**
     * New value of volume_level; 1-20000 in hundreds of percents
     *
     * @var int
     */
    protected int $volumeLevel;

    public function __construct(MessageSender $participantId, int $volumeLevel)
    {
        parent::__construct();

        $this->participantId = $participantId;
        $this->volumeLevel = $volumeLevel;
    }

    public static function fromArray(array $array): ChatEventVideoChatParticipantVolumeLevelChanged
    {
        return new static(
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['volume_level'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'participant_id' => $this->participantId->typeSerialize(),
            'volume_level' => $this->volumeLevel,
        ];
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }
}
