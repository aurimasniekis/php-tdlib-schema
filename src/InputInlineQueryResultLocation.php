<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a point on the map.
 */
class InputInlineQueryResultLocation extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultLocation';

    /**
     * Unique identifier of the query result.
     *
     * @var string
     */
    protected string $id;

    /**
     * Location result.
     *
     * @var Location
     */
    protected Location $location;

    /**
     * Amount of time relative to the message sent time until the location can be updated, in seconds.
     *
     * @var int
     */
    protected int $livePeriod;

    /**
     * Title of the result.
     *
     * @var string
     */
    protected string $title;

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
        Location $location,
        int $livePeriod,
        string $title,
        string $thumbnailUrl,
        int $thumbnailWidth,
        int $thumbnailHeight,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        parent::__construct();

        $this->id                  = $id;
        $this->location            = $location;
        $this->livePeriod          = $livePeriod;
        $this->title               = $title;
        $this->thumbnailUrl        = $thumbnailUrl;
        $this->thumbnailWidth      = $thumbnailWidth;
        $this->thumbnailHeight     = $thumbnailHeight;
        $this->replyMarkup         = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultLocation
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['location']),
            $array['live_period'],
            $array['title'],
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
            'location'              => $this->location->typeSerialize(),
            'live_period'           => $this->livePeriod,
            'title'                 => $this->title,
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

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getLivePeriod(): int
    {
        return $this->livePeriod;
    }

    public function getTitle(): string
    {
        return $this->title;
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
