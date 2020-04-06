<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a link to a file.
 */
class InputInlineQueryResultDocument extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultDocument';

    /**
     * Unique identifier of the query result.
     *
     * @var string
     */
    protected string $id;

    /**
     * Title of the resulting file.
     *
     * @var string
     */
    protected string $title;

    /**
     * Short description of the result, if known.
     *
     * @var string
     */
    protected string $description;

    /**
     * URL of the file.
     *
     * @var string
     */
    protected string $documentUrl;

    /**
     * MIME type of the file content; only "application/pdf" and "application/zip" are currently allowed.
     *
     * @var string
     */
    protected string $mimeType;

    /**
     * The URL of the file thumbnail, if it exists.
     *
     * @var string
     */
    protected string $thumbnailUrl;

    /**
     * Width of the thumbnail.
     *
     * @var int
     */
    protected int $thumbnailWidth;

    /**
     * Height of the thumbnail.
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
     * The content of the message to be sent. Must be one of the following types: InputMessageText, InputMessageDocument, InputMessageLocation, InputMessageVenue or InputMessageContact.
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        string $id,
        string $title,
        string $description,
        string $documentUrl,
        string $mimeType,
        string $thumbnailUrl,
        int $thumbnailWidth,
        int $thumbnailHeight,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        parent::__construct();

        $this->id                  = $id;
        $this->title               = $title;
        $this->description         = $description;
        $this->documentUrl         = $documentUrl;
        $this->mimeType            = $mimeType;
        $this->thumbnailUrl        = $thumbnailUrl;
        $this->thumbnailWidth      = $thumbnailWidth;
        $this->thumbnailHeight     = $thumbnailHeight;
        $this->replyMarkup         = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultDocument
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['description'],
            $array['document_url'],
            $array['mime_type'],
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
            'title'                 => $this->title,
            'description'           => $this->description,
            'document_url'          => $this->documentUrl,
            'mime_type'             => $this->mimeType,
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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDocumentUrl(): string
    {
        return $this->documentUrl;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
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
