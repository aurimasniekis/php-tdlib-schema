<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A previously used profile photo of the current user.
 */
class InputChatPhotoPrevious extends InputChatPhoto
{
    public const TYPE_NAME = 'inputChatPhotoPrevious';

    /**
     * Identifier of the current user's profile photo to reuse.
     */
    protected string $chatPhotoId;

    public function __construct(string $chatPhotoId)
    {
        parent::__construct();

        $this->chatPhotoId = $chatPhotoId;
    }

    public static function fromArray(array $array): InputChatPhotoPrevious
    {
        return new static(
            $array['chat_photo_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_photo_id' => $this->chatPhotoId,
        ];
    }

    public function getChatPhotoId(): string
    {
        return $this->chatPhotoId;
    }
}
