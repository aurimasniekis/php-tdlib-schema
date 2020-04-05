<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a link to an article or web page.
 */
class InputInlineQueryResultArticle extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultArticle';

    /**
     * Unique identifier of the query result.
     *
     * @var string
     */
    protected string $id;

    /**
     * URL of the result, if it exists.
     *
     * @var string
     */
    protected string $url;

    /**
     * True, if the URL must be not shown.
     *
     * @var bool
     */
    protected bool $hideUrl;

    /**
     * Title of the result.
     *
     * @var string
     */
    protected string $title;

    /**
     * A short description of the result.
     *
     * @var string
     */
    protected string $description;

    /**
     * URL of the result thumbnail, if it exists.
     *
     * @var string
     */
    protected string $thumbnailUrl;

    /**
     * Thumbnail width, if known.
     *
     * @var int
     */
    protected int $thumbnailWidth;

    /**
     * Thumbnail height, if known.
     *
     * @var int
     */
    protected int $thumbnailHeight;

    /**
     * The message reply markup. Must be of type replyMarkupInlineKeyboard or null.
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * The content of the message to be sent. Must be one of the following types: InputMessageText, InputMessageLocation, InputMessageVenue or InputMessageContact.
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        string $id,
        string $url,
        bool $hideUrl,
        string $title,
        string $description,
        string $thumbnailUrl,
        int $thumbnailWidth,
        int $thumbnailHeight,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        parent::__construct();

        $this->id                  = $id;
        $this->url                 = $url;
        $this->hideUrl             = $hideUrl;
        $this->title               = $title;
        $this->description         = $description;
        $this->thumbnailUrl        = $thumbnailUrl;
        $this->thumbnailWidth      = $thumbnailWidth;
        $this->thumbnailHeight     = $thumbnailHeight;
        $this->replyMarkup         = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultArticle
    {
        return new static(
            $array['id'],
            $array['url'],
            $array['hide_url'],
            $array['title'],
            $array['param_description'],
            $array['thumbnail_url'],
            $array['thumbnail_width'],
            $array['thumbnail_height'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'url'                   => $this->url,
            'hide_url'              => $this->hideUrl,
            'title'                 => $this->title,
            'param_description'     => $this->description,
            'thumbnail_url'         => $this->thumbnailUrl,
            'thumbnail_width'       => $this->thumbnailWidth,
            'thumbnail_height'      => $this->thumbnailHeight,
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getHideUrl(): bool
    {
        return $this->hideUrl;
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

    public function getThumbnailWidth(): int
    {
        return $this->thumbnailWidth;
    }

    public function getThumbnailHeight(): int
    {
        return $this->thumbnailHeight;
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
