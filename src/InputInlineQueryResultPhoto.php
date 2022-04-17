<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents link to a JPEG image
 */
class InputInlineQueryResultPhoto extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultPhoto';

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * Title of the result, if known
     *
     * @var string
     */
    protected string $title;

    /**
     * A short description of the result, if known
     *
     * @var string
     */
    protected string $description;

    /**
     * URL of the photo thumbnail, if it exists
     *
     * @var string
     */
    protected string $thumbnailUrl;

    /**
     * The URL of the JPEG photo (photo size must not exceed 5MB)
     *
     * @var string
     */
    protected string $photoUrl;

    /**
     * Width of the photo
     *
     * @var int
     */
    protected int $photoWidth;

    /**
     * Height of the photo
     *
     * @var int
     */
    protected int $photoHeight;

    /**
     * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessagePhoto, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        string $id,
        string $title,
        string $description,
        string $thumbnailUrl,
        string $photoUrl,
        int $photoWidth,
        int $photoHeight,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        parent::__construct();

        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->photoUrl = $photoUrl;
        $this->photoWidth = $photoWidth;
        $this->photoHeight = $photoHeight;
        $this->replyMarkup = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultPhoto
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['description'],
            $array['thumbnail_url'],
            $array['photo_url'],
            $array['photo_width'],
            $array['photo_height'],
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
            'description' => $this->description,
            'thumbnail_url' => $this->thumbnailUrl,
            'photo_url' => $this->photoUrl,
            'photo_width' => $this->photoWidth,
            'photo_height' => $this->photoHeight,
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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getPhotoUrl(): string
    {
        return $this->photoUrl;
    }

    public function getPhotoWidth(): int
    {
        return $this->photoWidth;
    }

    public function getPhotoHeight(): int
    {
        return $this->photoHeight;
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
