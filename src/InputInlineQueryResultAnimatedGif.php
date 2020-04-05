<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a link to an animated GIF.
 */
class InputInlineQueryResultAnimatedGif extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultAnimatedGif';

    /**
     * Unique identifier of the query result.
     *
     * @var string
     */
    protected string $id;

    /**
     * Title of the query result.
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
     * The URL of the GIF-file (file size must not exceed 1MB).
     *
     * @var string
     */
    protected string $gifUrl;

    /**
     * Duration of the GIF, in seconds.
     *
     * @var int
     */
    protected int $gifDuration;

    /**
     * Width of the GIF.
     *
     * @var int
     */
    protected int $gifWidth;

    /**
     * Height of the GIF.
     *
     * @var int
     */
    protected int $gifHeight;

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
        string $gifUrl,
        int $gifDuration,
        int $gifWidth,
        int $gifHeight,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        parent::__construct();

        $this->id                  = $id;
        $this->title               = $title;
        $this->thumbnailUrl        = $thumbnailUrl;
        $this->gifUrl              = $gifUrl;
        $this->gifDuration         = $gifDuration;
        $this->gifWidth            = $gifWidth;
        $this->gifHeight           = $gifHeight;
        $this->replyMarkup         = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultAnimatedGif
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['thumbnail_url'],
            $array['gif_url'],
            $array['gif_duration'],
            $array['gif_width'],
            $array['gif_height'],
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
            'gif_url'               => $this->gifUrl,
            'gif_duration'          => $this->gifDuration,
            'gif_width'             => $this->gifWidth,
            'gif_height'            => $this->gifHeight,
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

    public function getGifUrl(): string
    {
        return $this->gifUrl;
    }

    public function getGifDuration(): int
    {
        return $this->gifDuration;
    }

    public function getGifWidth(): int
    {
        return $this->gifWidth;
    }

    public function getGifHeight(): int
    {
        return $this->gifHeight;
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
