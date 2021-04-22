<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the photo of a chat. Supported only for basic groups, supergroups and channels. Requires can_change_info rights
 */
class SetChatPhoto extends TdFunction
{
    public const TYPE_NAME = 'setChatPhoto';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New chat photo. Pass null to delete the chat photo
     *
     * @var InputChatPhoto
     */
    protected InputChatPhoto $photo;

    public function __construct(int $chatId, InputChatPhoto $photo)
    {
        $this->chatId = $chatId;
        $this->photo = $photo;
    }

    public static function fromArray(array $array): SetChatPhoto
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'photo' => $this->photo->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPhoto(): InputChatPhoto
    {
        return $this->photo;
    }
}
