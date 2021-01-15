<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes the photo of a chat. Supported only for basic groups, supergroups and channels. Requires can_change_info rights. The photo will not be changed before request to the server has been completed.
 */
class SetChatPhoto extends TdFunction
{
    public const TYPE_NAME = 'setChatPhoto';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New chat photo. You can use a zero InputFileId to delete the chat photo. Files that are accessible only by HTTP URL are not acceptable.
     *
     * @var InputFile
     */
    protected InputFile $photo;

    public function __construct(int $chatId, InputFile $photo)
    {
        $this->chatId = $chatId;
        $this->photo  = $photo;
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
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'photo'   => $this->photo->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPhoto(): InputFile
    {
        return $this->photo;
    }
}
