<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a user profile photo
 */
class ProfilePhoto extends TdObject
{
    public const TYPE_NAME = 'profilePhoto';

    /**
     * Photo identifier; 0 for an empty photo. Can be used to find a photo in a list of user profile photos
     *
     * @var string
     */
    protected string $id;

    /**
     * A small (160x160) user profile photo. The file can be downloaded only before the photo is changed
     *
     * @var File
     */
    protected File $small;

    /**
     * A big (640x640) user profile photo. The file can be downloaded only before the photo is changed
     *
     * @var File
     */
    protected File $big;

    /**
     * User profile photo minithumbnail; may be null
     *
     * @var Minithumbnail|null
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * True, if the photo has animated variant
     *
     * @var bool
     */
    protected bool $hasAnimation;

    public function __construct(string $id, File $small, File $big, ?Minithumbnail $minithumbnail, bool $hasAnimation)
    {
        $this->id = $id;
        $this->small = $small;
        $this->big = $big;
        $this->minithumbnail = $minithumbnail;
        $this->hasAnimation = $hasAnimation;
    }

    public static function fromArray(array $array): ProfilePhoto
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['small']),
            TdSchemaRegistry::fromArray($array['big']),
            (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            $array['has_animation'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'small' => $this->small->typeSerialize(),
            'big' => $this->big->typeSerialize(),
            'minithumbnail' => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'has_animation' => $this->hasAnimation,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSmall(): File
    {
        return $this->small;
    }

    public function getBig(): File
    {
        return $this->big;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getHasAnimation(): bool
    {
        return $this->hasAnimation;
    }
}
