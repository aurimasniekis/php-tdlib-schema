<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a link to an animated (i.e. without sound) H.264/MPEG-4 AVC video.
 */
class InputInlineQueryResultAnimatedMpeg4 extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultAnimatedMpeg4';

    /**
     * Unique identifier of the query result.
     *
     * @var string
     */
    protected string $id;

    /**
     * Title of the result.
     *
     * @var string
     */
    protected string $title;

    /**
     * URL of the static result thumbnail (JPEG or GIF), if it exists.
     *
     * @var string
     */
    protected string $thumbnailUrl;

    /**
     * The URL of the MPEG4-file (file size must not exceed 1MB).
     *
     * @var string
     */
    protected string $mpeg4Url;

    /**
     * Duration of the video, in seconds.
     *
     * @var int
     */
    protected int $mpeg4Duration;

    /**
     * Width of the video.
     *
     * @var int
     */
    protected int $mpeg4Width;

    /**
     * Height of the video.
     *
     * @var int
     */
    protected int $mpeg4Height;

    /**
     * The message reply markup. Must be of type replyMarkupInlineKeyboard or null.
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * The content of the message to be sent. Must be one of the following types: InputMessageText, InputMessageAnimation, InputMessageLocation, InputMessageVenue or InputMessageContact.
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        string $id,
        string $title,
        string $thumbnailUrl,
        string $mpeg4Url,
        int $mpeg4Duration,
        int $mpeg4Width,
        int $mpeg4Height,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        parent::__construct();

        $this->id                  = $id;
        $this->title               = $title;
        $this->thumbnailUrl        = $thumbnailUrl;
        $this->mpeg4Url            = $mpeg4Url;
        $this->mpeg4Duration       = $mpeg4Duration;
        $this->mpeg4Width          = $mpeg4Width;
        $this->mpeg4Height         = $mpeg4Height;
        $this->replyMarkup         = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultAnimatedMpeg4
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['thumbnail_url'],
            $array['mpeg4_url'],
            $array['mpeg4_duration'],
            $array['mpeg4_width'],
            $array['mpeg4_height'],
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
            'thumbnail_url'         => $this->thumbnailUrl,
            'mpeg4_url'             => $this->mpeg4Url,
            'mpeg4_duration'        => $this->mpeg4Duration,
            'mpeg4_width'           => $this->mpeg4Width,
            'mpeg4_height'          => $this->mpeg4Height,
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

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getMpeg4Url(): string
    {
        return $this->mpeg4Url;
    }

    public function getMpeg4Duration(): int
    {
        return $this->mpeg4Duration;
    }

    public function getMpeg4Width(): int
    {
        return $this->mpeg4Width;
    }

    public function getMpeg4Height(): int
    {
        return $this->mpeg4Height;
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
