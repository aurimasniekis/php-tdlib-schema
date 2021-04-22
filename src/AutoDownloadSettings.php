<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains auto-download settings
 */
class AutoDownloadSettings extends TdObject
{
    public const TYPE_NAME = 'autoDownloadSettings';

    /**
     * True, if the auto-download is enabled
     *
     * @var bool
     */
    protected bool $isAutoDownloadEnabled;

    /**
     * The maximum size of a photo file to be auto-downloaded
     *
     * @var int
     */
    protected int $maxPhotoFileSize;

    /**
     * The maximum size of a video file to be auto-downloaded
     *
     * @var int
     */
    protected int $maxVideoFileSize;

    /**
     * The maximum size of other file types to be auto-downloaded
     *
     * @var int
     */
    protected int $maxOtherFileSize;

    /**
     * The maximum suggested bitrate for uploaded videos
     *
     * @var int
     */
    protected int $videoUploadBitrate;

    /**
     * True, if the beginning of video files needs to be preloaded for instant playback
     *
     * @var bool
     */
    protected bool $preloadLargeVideos;

    /**
     * True, if the next audio track needs to be preloaded while the user is listening to an audio file
     *
     * @var bool
     */
    protected bool $preloadNextAudio;

    /**
     * True, if "use less data for calls" option needs to be enabled
     *
     * @var bool
     */
    protected bool $useLessDataForCalls;

    public function __construct(
        bool $isAutoDownloadEnabled,
        int $maxPhotoFileSize,
        int $maxVideoFileSize,
        int $maxOtherFileSize,
        int $videoUploadBitrate,
        bool $preloadLargeVideos,
        bool $preloadNextAudio,
        bool $useLessDataForCalls
    ) {
        $this->isAutoDownloadEnabled = $isAutoDownloadEnabled;
        $this->maxPhotoFileSize = $maxPhotoFileSize;
        $this->maxVideoFileSize = $maxVideoFileSize;
        $this->maxOtherFileSize = $maxOtherFileSize;
        $this->videoUploadBitrate = $videoUploadBitrate;
        $this->preloadLargeVideos = $preloadLargeVideos;
        $this->preloadNextAudio = $preloadNextAudio;
        $this->useLessDataForCalls = $useLessDataForCalls;
    }

    public static function fromArray(array $array): AutoDownloadSettings
    {
        return new static(
            $array['is_auto_download_enabled'],
            $array['max_photo_file_size'],
            $array['max_video_file_size'],
            $array['max_other_file_size'],
            $array['video_upload_bitrate'],
            $array['preload_large_videos'],
            $array['preload_next_audio'],
            $array['use_less_data_for_calls'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_auto_download_enabled' => $this->isAutoDownloadEnabled,
            'max_photo_file_size' => $this->maxPhotoFileSize,
            'max_video_file_size' => $this->maxVideoFileSize,
            'max_other_file_size' => $this->maxOtherFileSize,
            'video_upload_bitrate' => $this->videoUploadBitrate,
            'preload_large_videos' => $this->preloadLargeVideos,
            'preload_next_audio' => $this->preloadNextAudio,
            'use_less_data_for_calls' => $this->useLessDataForCalls,
        ];
    }

    public function getIsAutoDownloadEnabled(): bool
    {
        return $this->isAutoDownloadEnabled;
    }

    public function getMaxPhotoFileSize(): int
    {
        return $this->maxPhotoFileSize;
    }

    public function getMaxVideoFileSize(): int
    {
        return $this->maxVideoFileSize;
    }

    public function getMaxOtherFileSize(): int
    {
        return $this->maxOtherFileSize;
    }

    public function getVideoUploadBitrate(): int
    {
        return $this->videoUploadBitrate;
    }

    public function getPreloadLargeVideos(): bool
    {
        return $this->preloadLargeVideos;
    }

    public function getPreloadNextAudio(): bool
    {
        return $this->preloadNextAudio;
    }

    public function getUseLessDataForCalls(): bool
    {
        return $this->useLessDataForCalls;
    }
}
