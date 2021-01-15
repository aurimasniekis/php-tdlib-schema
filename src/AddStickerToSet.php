<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds a new sticker to a set; for bots only. Returns the sticker set.
 */
class AddStickerToSet extends TdFunction
{
    public const TYPE_NAME = 'addStickerToSet';

    /**
     * Sticker set owner.
     *
     * @var int
     */
    protected int $userId;

    /**
     * Sticker set name.
     *
     * @var string
     */
    protected string $name;

    /**
     * Sticker to add to the set.
     *
     * @var InputSticker
     */
    protected InputSticker $sticker;

    public function __construct(int $userId, string $name, InputSticker $sticker)
    {
        $this->userId  = $userId;
        $this->name    = $name;
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): AddStickerToSet
    {
        return new static(
            $array['user_id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'name'    => $this->name,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSticker(): InputSticker
    {
        return $this->sticker;
    }
}
