<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a group call participant's video channel
 */
class GroupCallParticipantVideoInfo extends TdObject
{
    public const TYPE_NAME = 'groupCallParticipantVideoInfo';

    /**
     * List of synchronization source groups of the video
     *
     * @var GroupCallVideoSourceGroup[]
     */
    protected array $sourceGroups;

    /**
     * Video channel endpoint identifier
     *
     * @var string
     */
    protected string $endpointId;

    /**
     * True if the video is paused. This flag needs to be ignored, if new video frames are received
     *
     * @var bool
     */
    protected bool $isPaused;

    public function __construct(array $sourceGroups, string $endpointId, bool $isPaused)
    {
        $this->sourceGroups = $sourceGroups;
        $this->endpointId = $endpointId;
        $this->isPaused = $isPaused;
    }

    public static function fromArray(array $array): GroupCallParticipantVideoInfo
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['source_groups']),
            $array['endpoint_id'],
            $array['is_paused'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->sourceGroups),
            'endpoint_id' => $this->endpointId,
            'is_paused' => $this->isPaused,
        ];
    }

    public function getSourceGroups(): array
    {
        return $this->sourceGroups;
    }

    public function getEndpointId(): string
    {
        return $this->endpointId;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }
}
