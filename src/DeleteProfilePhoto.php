<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes a profile photo
 */
class DeleteProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'deleteProfilePhoto';

    /**
     * Identifier of the profile photo to delete
     *
     * @var string
     */
    protected string $profilePhotoId;

    public function __construct(string $profilePhotoId)
    {
        $this->profilePhotoId = $profilePhotoId;
    }

    public static function fromArray(array $array): DeleteProfilePhoto
    {
        return new static(
            $array['profile_photo_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'profile_photo_id' => $this->profilePhotoId,
        ];
    }

    public function getProfilePhotoId(): string
    {
        return $this->profilePhotoId;
    }
}
