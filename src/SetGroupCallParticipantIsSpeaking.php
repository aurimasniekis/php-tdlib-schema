<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Informs TDLib that speaking state of a participant of an active group has changed
 */
class SetGroupCallParticipantIsSpeaking extends TdFunction
{
    public const TYPE_NAME = 'setGroupCallParticipantIsSpeaking';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Group call participant's synchronization audio source identifier, or 0 for the current user
     *
     * @var int
     */
    protected int $audioSource;

    /**
     * True, if the user is speaking
     *
     * @var bool
     */
    protected bool $isSpeaking;

    public function __construct(int $groupCallId, int $audioSource, bool $isSpeaking)
    {
        $this->groupCallId = $groupCallId;
        $this->audioSource = $audioSource;
        $this->isSpeaking = $isSpeaking;
    }

    public static function fromArray(array $array): SetGroupCallParticipantIsSpeaking
    {
        return new static(
            $array['group_call_id'],
            $array['audio_source'],
            $array['is_speaking'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'audio_source' => $this->audioSource,
            'is_speaking' => $this->isSpeaking,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getAudioSource(): int
    {
        return $this->audioSource;
    }

    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }
}
