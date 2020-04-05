<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Uploads a new profile photo for the current user. If something changes, updateUser will be sent.
 */
class SetProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'setProfilePhoto';

    /**
     * Profile photo to set. inputFileId and inputFileRemote may still be unsupported.
     *
     * @var InputFile
     */
    protected InputFile $photo;

    public function __construct(InputFile $photo)
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

    public function getPhoto(): InputFile
    {
        return $this->photo;
    }
}
