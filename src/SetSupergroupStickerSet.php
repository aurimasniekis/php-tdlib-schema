<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the sticker set of a supergroup; requires can_change_info rights.
 */
class SetSupergroupStickerSet extends TdFunction
{
    public const TYPE_NAME = 'setSupergroupStickerSet';

    /**
     * Identifier of the supergroup.
     *
     * @var int
     */
    protected int $supergroupId;

    /**
     * New value of the supergroup sticker set identifier. Use 0 to remove the supergroup sticker set.
     *
     * @var int
     */
    protected int $stickerSetId;

    public function __construct(int $supergroupId, int $stickerSetId)
    {
        $this->supergroupId = $supergroupId;
        $this->stickerSetId = $stickerSetId;
    }

    public static function fromArray(array $array): SetSupergroupStickerSet
    {
        return new static(
            $array['supergroup_id'],
            $array['sticker_set_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'supergroup_id'  => $this->supergroupId,
            'sticker_set_id' => $this->stickerSetId,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }
}
