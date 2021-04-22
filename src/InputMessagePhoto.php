<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A photo message.
 */
class InputMessagePhoto extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessagePhoto';

    /**
     * Photo to send.
     */
    protected InputFile $photo;

    /**
     * Photo thumbnail to be sent, this is sent to the other party in secret chats only.
     */
    protected InputThumbnail $thumbnail;

    /**
     * File identifiers of the stickers added to the photo, if applicable.
     *
     * @var int[]
     */
    protected array $addedStickerFileIds;

    /**
     * Photo width.
     */
    protected int $width;

    /**
     * Photo height.
     */
    protected int $height;

    /**
     * Photo caption; 0-GetOption("message_caption_length_max") characters.
     */
    protected FormattedText $caption;

    /**
     * Photo TTL (Time To Live), in seconds (0-60). A non-zero TTL can be specified only in private chats.
     */
    protected int $ttl;

    public function __construct(
        InputFile $photo,
        InputThumbnail $thumbnail,
        array $addedStickerFileIds,
        int $width,
        int $height,
        FormattedText $caption,
        int $ttl
    ) {
        parent::__construct();

        $this->photo               = $photo;
        $this->thumbnail           = $thumbnail;
        $this->addedStickerFileIds = $addedStickerFileIds;
        $this->width               = $width;
        $this->height              = $height;
        $this->caption             = $caption;
        $this->ttl                 = $ttl;
    }

    public static function fromArray(array $array): InputMessagePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            $array['added_sticker_file_ids'],
            $array['width'],
            $array['height'],
            TdSchemaRegistry::fromArray($array['caption']),
            $array['ttl'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'photo'                  => $this->photo->typeSerialize(),
            'thumbnail'              => $this->thumbnail->typeSerialize(),
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'width'                  => $this->width,
            'height'                 => $this->height,
            'caption'                => $this->caption->typeSerialize(),
            'ttl'                    => $this->ttl,
        ];
    }

    public function getPhoto(): InputFile
    {
        return $this->photo;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
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
