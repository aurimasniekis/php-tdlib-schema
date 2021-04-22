<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat photo was changed
 */
class ChatEventPhotoChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventPhotoChanged';

    /**
     * Previous chat photo value; may be null
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $oldPhoto;

    /**
     * New chat photo value; may be null
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $newPhoto;

    public function __construct(?ChatPhoto $oldPhoto, ?ChatPhoto $newPhoto)
    {
        parent::__construct();

        $this->oldPhoto = $oldPhoto;
        $this->newPhoto = $newPhoto;
    }

    public static function fromArray(array $array): ChatEventPhotoChanged
    {
        return new static(
            (isset($array['old_photo']) ? TdSchemaRegistry::fromArray($array['old_photo']) : null),
            (isset($array['new_photo']) ? TdSchemaRegistry::fromArray($array['new_photo']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_photo' => (isset($this->oldPhoto) ? $this->oldPhoto : null),
            'new_photo' => (isset($this->newPhoto) ? $this->newPhoto : null),
        ];
    }

    public function getOldPhoto(): ?ChatPhoto
    {
        return $this->oldPhoto;
    }

    public function getNewPhoto(): ?ChatPhoto
    {
        return $this->newPhoto;
    }
}
