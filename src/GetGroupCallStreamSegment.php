<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a file with a segment of a group call stream in a modified OGG format for audio or MPEG-4 format for video
 */
class GetGroupCallStreamSegment extends TdFunction
{
    public const TYPE_NAME = 'getGroupCallStreamSegment';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Point in time when the stream segment begins; Unix timestamp in milliseconds
     *
     * @var int
     */
    protected int $timeOffset;

    /**
     * Segment duration scale; 0-1. Segment's duration is 1000/(2**scale) milliseconds
     *
     * @var int
     */
    protected int $scale;

    /**
     * Identifier of an audio/video channel to get as received from tgcalls
     *
     * @var int
     */
    protected int $channelId;

    /**
     * Video quality as received from tgcalls; pass null to get the worst available quality
     *
     * @var GroupCallVideoQuality
     */
    protected GroupCallVideoQuality $videoQuality;

    public function __construct(
        int $groupCallId,
        int $timeOffset,
        int $scale,
        int $channelId,
        GroupCallVideoQuality $videoQuality
    ) {
        $this->groupCallId = $groupCallId;
        $this->timeOffset = $timeOffset;
        $this->scale = $scale;
        $this->channelId = $channelId;
        $this->videoQuality = $videoQuality;
    }

    public static function fromArray(array $array): GetGroupCallStreamSegment
    {
        return new static(
            $array['group_call_id'],
            $array['time_offset'],
            $array['scale'],
            $array['channel_id'],
            TdSchemaRegistry::fromArray($array['video_quality']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'time_offset' => $this->timeOffset,
            'scale' => $this->scale,
            'channel_id' => $this->channelId,
            'video_quality' => $this->videoQuality->typeSerialize(),
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getTimeOffset(): int
    {
        return $this->timeOffset;
    }

    public function getScale(): int
    {
        return $this->scale;
    }

    public function getChannelId(): int
    {
        return $this->channelId;
    }

    public function getVideoQuality(): GroupCallVideoQuality
    {
        return $this->videoQuality;
    }
}
