<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a link to an animated GIF or an animated (i.e., without sound) H.264/MPEG-4 AVC video
 */
class InputInlineQueryResultAnimation extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultAnimation';

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * Title of the query result
     *
     * @var string
     */
    protected string $title;

    /**
     * URL of the result thumbnail (JPEG, GIF, or MPEG4), if it exists
     *
     * @var string
     */
    protected string $thumbnailUrl;

    /**
     * MIME type of the video thumbnail. If non-empty, must be one of "image/jpeg", "image/gif" and "video/mp4"
     *
     * @var string
     */
    protected string $thumbnailMimeType;

    /**
     * The URL of the video file (file size must not exceed 1MB)
     *
     * @var string
     */
    protected string $videoUrl;

    /**
     * MIME type of the video file. Must be one of "image/gif" and "video/mp4"
     *
     * @var string
     */
    protected string $videoMimeType;

    /**
     * Duration of the video, in seconds
     *
     * @var int
     */
    protected int $videoDuration;

    /**
     * Width of the video
     *
     * @var int
     */
    protected int $videoWidth;

    /**
     * Height of the video
     *
     * @var int
     */
    protected int $videoHeight;

    /**
     * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageAnimation, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        string $id,
        string $title,
        string $thumbnailUrl,
        string $thumbnailMimeType,
        string $videoUrl,
        string $videoMimeType,
        int $videoDuration,
        int $videoWidth,
        int $videoHeight,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        parent::__construct();

        $this->id = $id;
        $this->title = $title;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->thumbnailMimeType = $thumbnailMimeType;
        $this->videoUrl = $videoUrl;
        $this->videoMimeType = $videoMimeType;
        $this->videoDuration = $videoDuration;
        $this->videoWidth = $videoWidth;
        $this->videoHeight = $videoHeight;
        $this->replyMarkup = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultAnimation
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['thumbnail_url'],
            $array['thumbnail_mime_type'],
            $array['video_url'],
            $array['video_mime_type'],
            $array['video_duration'],
            $array['video_width'],
            $array['video_height'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'title' => $this->title,
            'thumbnail_url' => $this->thumbnailUrl,
            'thumbnail_mime_type' => $this->thumbnailMimeType,
            'video_url' => $this->videoUrl,
            'video_mime_type' => $this->videoMimeType,
            'video_duration' => $this->videoDuration,
            'video_width' => $this->videoWidth,
            'video_height' => $this->videoHeight,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getThumbnailMimeType(): string
    {
        return $this->thumbnailMimeType;
    }

    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }

    public function getVideoMimeType(): string
    {
        return $this->videoMimeType;
    }

    public function getVideoDuration(): int
    {
        return $this->videoDuration;
    }

    public function getVideoWidth(): int
    {
        return $this->videoWidth;
    }

    public function getVideoHeight(): int
    {
        return $this->videoHeight;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
