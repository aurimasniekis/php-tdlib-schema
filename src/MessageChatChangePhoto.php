<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An updated chat photo.
 */
class MessageChatChangePhoto extends MessageContent
{
    public const TYPE_NAME = 'messageChatChangePhoto';

    /**
     * New chat photo.
     *
     * @var Photo
     */
    protected Photo $photo;

    public function __construct(Photo $photo)
    {
        parent::__construct();

        $this->photo = $photo;
    }

    public static function fromArray(array $array): MessageChatChangePhoto
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

    public function getPhoto(): Photo
    {
        return $this->photo;
    }
}
