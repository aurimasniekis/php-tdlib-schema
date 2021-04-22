<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a link to a page containing an embedded video player or a video file.
 */
class InputInlineQueryResultVideo extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultVideo';

    /**
     * Unique identifier of the query result.
     */
    protected string $id;

    /**
     * Title of the result.
     */
    protected string $title;

    /**
     * A short description of the result, if known.
     */
    protected string $description;

    /**
     * The URL of the video thumbnail (JPEG), if it exists.
     */
    protected string $thumbnailUrl;

    /**
     * URL of the embedded video player or video file.
     */
    protected string $videoUrl;

    /**
     * MIME type of the content of the video URL, only "text/html" or "video/mp4" are currently supported.
     */
    protected string $mimeType;

    /**
     * Width of the video.
     */
    protected int $videoWidth;

    /**
     * Height of the video.
     */
    protected int $videoHeight;

    /**
     * Video duration, in seconds.
     */
    protected int $videoDuration;

    /**
     * The message reply markup. Must be of type replyMarkupInlineKeyboard or null.
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * The content of the message to be sent. Must be one of the following types: InputMessageText, InputMessageVideo, InputMessageLocation, InputMessageVenue or InputMessageContact.
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        string $id,
        string $title,
        string $description,
        string $thumbnailUrl,
        string $videoUrl,
        string $mimeType,
        int $videoWidth,
        int $videoHeight,
        int $videoDuration,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        parent::__construct();

        $this->id                  = $id;
        $this->title               = $title;
        $this->description         = $description;
        $this->thumbnailUrl        = $thumbnailUrl;
        $this->videoUrl            = $videoUrl;
        $this->mimeType            = $mimeType;
        $this->videoWidth          = $videoWidth;
        $this->videoHeight         = $videoHeight;
        $this->videoDuration       = $videoDuration;
        $this->replyMarkup         = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultVideo
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['description'],
            $array['thumbnail_url'],
            $array['video_url'],
            $array['mime_type'],
            $array['video_width'],
            $array['video_height'],
            $array['video_duration'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'title'                 => $this->title,
            'description'           => $this->description,
            'thumbnail_url'         => $this->thumbnailUrl,
            'video_url'             => $this->videoUrl,
            'mime_type'             => $this->mimeType,
            'video_width'           => $this->videoWidth,
            'video_height'          => $this->videoHeight,
            'video_duration'        => $this->videoDuration,
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getVideoWidth(): int
    {
        return $this->videoWidth;
    }

    public function getVideoHeight(): int
    {
        return $this->videoHeight;
    }

    public function getVideoDuration(): int
    {
        return $this->videoDuration;
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
