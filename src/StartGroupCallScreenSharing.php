<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Starts screen sharing in a joined group call. Returns join response payload for tgcalls
 */
class StartGroupCallScreenSharing extends TdFunction
{
    public const TYPE_NAME = 'startGroupCallScreenSharing';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Screen sharing audio channel synchronization source identifier; received from tgcalls
     *
     * @var int
     */
    protected int $audioSourceId;

    /**
     * Group call join payload; received from tgcalls
     *
     * @var string
     */
    protected string $payload;

    public function __construct(int $groupCallId, int $audioSourceId, string $payload)
    {
        $this->groupCallId = $groupCallId;
        $this->audioSourceId = $audioSourceId;
        $this->payload = $payload;
    }

    public static function fromArray(array $array): StartGroupCallScreenSharing
    {
        return new static(
            $array['group_call_id'],
            $array['audio_source_id'],
            $array['payload'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'audio_source_id' => $this->audioSourceId,
            'payload' => $this->payload,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getAudioSourceId(): int
    {
        return $this->audioSourceId;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }
}
