<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to a sticker set. Call searchStickerSet with the given sticker set name to process the link and show the sticker set
 */
class InternalLinkTypeStickerSet extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeStickerSet';

    /**
     * Name of the sticker set
     *
     * @var string
     */
    protected string $stickerSetName;

    public function __construct(string $stickerSetName)
    {
        parent::__construct();

        $this->stickerSetName = $stickerSetName;
    }

    public static function fromArray(array $array): InternalLinkTypeStickerSet
    {
        return new static(
            $array['sticker_set_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_set_name' => $this->stickerSetName,
        ];
    }

    public function getStickerSetName(): string
    {
        return $this->stickerSetName;
    }
}
