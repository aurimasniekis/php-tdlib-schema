<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains basic information about the photo of a chat
 */
class ChatPhotoInfo extends TdObject
{
    public const TYPE_NAME = 'chatPhotoInfo';

    /**
     * A small (160x160) chat photo variant in JPEG format. The file can be downloaded only before the photo is changed
     *
     * @var File
     */
    protected File $small;

    /**
     * A big (640x640) chat photo variant in JPEG format. The file can be downloaded only before the photo is changed
     *
     * @var File
     */
    protected File $big;

    /**
     * True, if the photo has animated variant
     *
     * @var bool
     */
    protected bool $hasAnimation;

    public function __construct(File $small, File $big, bool $hasAnimation)
    {
        $this->small = $small;
        $this->big = $big;
        $this->hasAnimation = $hasAnimation;
    }

    public static function fromArray(array $array): ChatPhotoInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['small']),
            TdSchemaRegistry::fromArray($array['big']),
            $array['has_animation'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'small' => $this->small->typeSerialize(),
            'big' => $this->big->typeSerialize(),
            'has_animation' => $this->hasAnimation,
        ];
    }

    public function getSmall(): File
    {
        return $this->small;
    }

    public function getBig(): File
    {
        return $this->big;
    }

    public function getHasAnimation(): bool
    {
        return $this->hasAnimation;
    }
}
