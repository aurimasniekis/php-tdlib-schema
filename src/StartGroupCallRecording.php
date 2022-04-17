<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Starts recording of an active group call. Requires groupCall.can_be_managed group call flag
 */
class StartGroupCallRecording extends TdFunction
{
    public const TYPE_NAME = 'startGroupCallRecording';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Group call recording title; 0-64 characters
     *
     * @var string
     */
    protected string $title;

    /**
     * Pass true to record a video file instead of an audio file
     *
     * @var bool
     */
    protected bool $recordVideo;

    /**
     * Pass true to use portrait orientation for video instead of landscape one
     *
     * @var bool
     */
    protected bool $usePortraitOrientation;

    public function __construct(int $groupCallId, string $title, bool $recordVideo, bool $usePortraitOrientation)
    {
        $this->groupCallId = $groupCallId;
        $this->title = $title;
        $this->recordVideo = $recordVideo;
        $this->usePortraitOrientation = $usePortraitOrientation;
    }

    public static function fromArray(array $array): StartGroupCallRecording
    {
        return new static(
            $array['group_call_id'],
            $array['title'],
            $array['record_video'],
            $array['use_portrait_orientation'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'title' => $this->title,
            'record_video' => $this->recordVideo,
            'use_portrait_orientation' => $this->usePortraitOrientation,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRecordVideo(): bool
    {
        return $this->recordVideo;
    }

    public function getUsePortraitOrientation(): bool
    {
        return $this->usePortraitOrientation;
    }
}
