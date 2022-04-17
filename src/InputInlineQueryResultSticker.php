<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a link to a WEBP or TGS sticker
 */
class InputInlineQueryResultSticker extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultSticker';

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * URL of the sticker thumbnail, if it exists
     *
     * @var string
     */
    protected string $thumbnailUrl;

    /**
     * The URL of the WEBP or TGS sticker (sticker file size must not exceed 5MB)
     *
     * @var string
     */
    protected string $stickerUrl;

    /**
     * Width of the sticker
     *
     * @var int
     */
    protected int $stickerWidth;

    /**
     * Height of the sticker
     *
     * @var int
     */
    protected int $stickerHeight;

    /**
     * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageSticker, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        string $id,
        string $thumbnailUrl,
        string $stickerUrl,
        int $stickerWidth,
        int $stickerHeight,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        parent::__construct();

        $this->id = $id;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->stickerUrl = $stickerUrl;
        $this->stickerWidth = $stickerWidth;
        $this->stickerHeight = $stickerHeight;
        $this->replyMarkup = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultSticker
    {
        return new static(
            $array['id'],
            $array['thumbnail_url'],
            $array['sticker_url'],
            $array['sticker_width'],
            $array['sticker_height'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'thumbnail_url' => $this->thumbnailUrl,
            'sticker_url' => $this->stickerUrl,
            'sticker_width' => $this->stickerWidth,
            'sticker_height' => $this->stickerHeight,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getStickerUrl(): string
    {
        return $this->stickerUrl;
    }

    public function getStickerWidth(): int
    {
        return $this->stickerWidth;
    }

    public function getStickerHeight(): int
    {
        return $this->stickerHeight;
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
