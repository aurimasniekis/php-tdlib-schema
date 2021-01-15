<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A video message.
 */
class InputMessageVideo extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageVideo';

    /**
     * Video to be sent.
     */
    protected InputFile $video;

    /**
     * Video thumbnail, if available.
     */
    protected InputThumbnail $thumbnail;

    /**
     * File identifiers of the stickers added to the video, if applicable.
     *
     * @var int[]
     */
    protected array $addedStickerFileIds;

    /**
     * Duration of the video, in seconds.
     */
    protected int $duration;

    /**
     * Video width.
     */
    protected int $width;

    /**
     * Video height.
     */
    protected int $height;

    /**
     * True, if the video should be tried to be streamed.
     */
    protected bool $supportsStreaming;

    /**
     * Video caption; 0-GetOption("message_caption_length_max") characters.
     */
    protected FormattedText $caption;

    /**
     * Video TTL (Time To Live), in seconds (0-60). A non-zero TTL can be specified only in private chats.
     */
    protected int $ttl;

    public function __construct(
        InputFile $video,
        InputThumbnail $thumbnail,
        array $addedStickerFileIds,
        int $duration,
        int $width,
        int $height,
        bool $supportsStreaming,
        FormattedText $caption,
        int $ttl
    ) {
        parent::__construct();

        $this->video               = $video;
        $this->thumbnail           = $thumbnail;
        $this->addedStickerFileIds = $addedStickerFileIds;
        $this->duration            = $duration;
        $this->width               = $width;
        $this->height              = $height;
        $this->supportsStreaming   = $supportsStreaming;
        $this->caption             = $caption;
        $this->ttl                 = $ttl;
    }

    public static function fromArray(array $array): InputMessageVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            $array['added_sticker_file_ids'],
            $array['duration'],
            $array['width'],
            $array['height'],
            $array['supports_streaming'],
            TdSchemaRegistry::fromArray($array['caption']),
            $array['ttl'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'video'                  => $this->video->typeSerialize(),
            'thumbnail'              => $this->thumbnail->typeSerialize(),
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'duration'               => $this->duration,
            'width'                  => $this->width,
            'height'                 => $this->height,
            'supports_streaming'     => $this->supportsStreaming,
            'caption'                => $this->caption->typeSerialize(),
            'ttl'                    => $this->ttl,
        ];
    }

    public function getVideo(): InputFile
    {
        return $this->video;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getSupportsStreaming(): bool
    {
        return $this->supportsStreaming;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }
}
