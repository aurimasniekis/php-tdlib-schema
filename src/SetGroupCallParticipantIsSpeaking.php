<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Informs TDLib that a group call participant speaking state has changed.
 */
class SetGroupCallParticipantIsSpeaking extends TdFunction
{
    public const TYPE_NAME = 'setGroupCallParticipantIsSpeaking';

    /**
     * Group call identifier.
     */
    protected int $groupCallId;

    /**
     * Group call participant's synchronization source identifier, or 0 for the current user.
     */
    protected int $source;

    /**
     * True, if the user is speaking.
     */
    protected bool $isSpeaking;

    public function __construct(int $groupCallId, int $source, bool $isSpeaking)
    {
        $this->groupCallId = $groupCallId;
        $this->source      = $source;
        $this->isSpeaking  = $isSpeaking;
    }

    public static function fromArray(array $array): SetGroupCallParticipantIsSpeaking
    {
        return new static(
            $array['group_call_id'],
            $array['source'],
            $array['is_speaking'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'source'        => $this->source,
            'is_speaking'   => $this->isSpeaking,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getSource(): int
    {
        return $this->source;
    }

    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }
}
