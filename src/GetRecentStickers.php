<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of recently used stickers
 */
class GetRecentStickers extends TdFunction
{
    public const TYPE_NAME = 'getRecentStickers';

    /**
     * Pass true to return stickers and masks that were recently attached to photos or video files; pass false to return recently sent stickers
     *
     * @var bool
     */
    protected bool $isAttached;

    public function __construct(bool $isAttached)
    {
        $this->isAttached = $isAttached;
    }

    public static function fromArray(array $array): GetRecentStickers
    {
        return new static(
            $array['is_attached'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_attached' => $this->isAttached,
        ];
    }

    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }
}
