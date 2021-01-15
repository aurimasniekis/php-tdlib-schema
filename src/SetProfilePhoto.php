<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes a profile photo for the current user.
 */
class SetProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'setProfilePhoto';

    /**
     * Profile photo to set.
     */
    protected InputChatPhoto $photo;

    public function __construct(InputChatPhoto $photo)
    {
        $this->photo = $photo;
    }

    public static function fromArray(array $array): SetProfilePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
        ];
    }

    public function getPhoto(): InputChatPhoto
    {
        return $this->photo;
    }
}
