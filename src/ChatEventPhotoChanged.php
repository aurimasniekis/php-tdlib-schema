<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat photo was changed.
 */
class ChatEventPhotoChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventPhotoChanged';

    /**
     * Previous chat photo value; may be null.
     *
     * @var Photo|null
     */
    protected ?Photo $oldPhoto;

    /**
     * New chat photo value; may be null.
     *
     * @var Photo|null
     */
    protected ?Photo $newPhoto;

    public function __construct(?Photo $oldPhoto, ?Photo $newPhoto)
    {
        parent::__construct();

        $this->oldPhoto = $oldPhoto;
        $this->newPhoto = $newPhoto;
    }

    public static function fromArray(array $array): ChatEventPhotoChanged
    {
        return new static(
            (null !== $array['old_photo'] ? TdSchemaRegistry::fromArray($array['old_photo']) : null),
            (null !== $array['new_photo'] ? TdSchemaRegistry::fromArray($array['new_photo']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'old_photo' => (null !== $this->oldPhoto ? $this->oldPhoto : null),
            'new_photo' => (null !== $this->newPhoto ? $this->newPhoto : null),
        ];
    }

    public function getOldPhoto(): ?Photo
    {
        return $this->oldPhoto;
    }

    public function getNewPhoto(): ?Photo
    {
        return $this->newPhoto;
    }
}
