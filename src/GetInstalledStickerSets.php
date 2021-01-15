<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of installed sticker sets.
 */
class GetInstalledStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getInstalledStickerSets';

    /**
     * Pass true to return mask sticker sets; pass false to return ordinary sticker sets.
     */
    protected bool $isMasks;

    public function __construct(bool $isMasks)
    {
        $this->isMasks = $isMasks;
    }

    public static function fromArray(array $array): GetInstalledStickerSets
    {
        return new static(
            $array['is_masks'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'is_masks' => $this->isMasks,
        ];
    }

    public function getIsMasks(): bool
    {
        return $this->isMasks;
    }
}
