<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Installs/uninstalls or activates/archives a sticker set
 */
class ChangeStickerSet extends TdFunction
{
    public const TYPE_NAME = 'changeStickerSet';

    /**
     * Identifier of the sticker set
     *
     * @var string
     */
    protected string $setId;

    /**
     * The new value of is_installed
     *
     * @var bool
     */
    protected bool $isInstalled;

    /**
     * The new value of is_archived. A sticker set can't be installed and archived simultaneously
     *
     * @var bool
     */
    protected bool $isArchived;

    public function __construct(string $setId, bool $isInstalled, bool $isArchived)
    {
        $this->setId = $setId;
        $this->isInstalled = $isInstalled;
        $this->isArchived = $isArchived;
    }

    public static function fromArray(array $array): ChangeStickerSet
    {
        return new static(
            $array['set_id'],
            $array['is_installed'],
            $array['is_archived'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'set_id' => $this->setId,
            'is_installed' => $this->isInstalled,
            'is_archived' => $this->isArchived,
        ];
    }

    public function getSetId(): string
    {
        return $this->setId;
    }

    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    public function getIsArchived(): bool
    {
        return $this->isArchived;
    }
}
